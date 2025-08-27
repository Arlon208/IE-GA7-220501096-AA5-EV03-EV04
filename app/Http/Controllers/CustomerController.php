<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Resources\CustomerCollection;
use App\Filters\CustomerFilter;
use App\Http\Resources\CustomerResource;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Muestra una lista de clientes previamente almacenados
     */
    public function index(Request $request)
    {
// Filtros
        $filter = new CustomerFilter();
        $queryItems = $filter->transform($request);
        
        // Obtiene la instancia del query builder
        $customers = Customer::query();
        
        // Aplica los filtros si existen
        if (count($queryItems) > 0) {
            $customers = $customers->where($queryItems);
        }

        // Incluir mascotas de clientes (eager loading)
        if ($request->query('includePets')) {
            $customers = $customers->with('pets');
        }

        // Devuelve la colección con paginación y los parámetros de la URL
        return new CustomerCollection($customers->paginate()->appends($request->query()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Guarda un nuevo cliente en la BD
     */
    public function store(StoreCustomerRequest $request)
    {
        return new CustomerResource(Customer::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
        $includePets = request()->query('includePets');
        if($includePets){
            return new CustomerResource($customer->loadMissing('pet'));
        }
        return new CustomerResource($customer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
        $customer->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete(); // Elimina el registro

        // Devuelve una respuesta JSON vacía con un código de estado 204
        return response()->json(null, 204);
    }
}
