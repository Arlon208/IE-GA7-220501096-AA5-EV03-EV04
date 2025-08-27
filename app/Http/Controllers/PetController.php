<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Http\Requests\StorePetRequest;
use App\Http\Requests\UpdatePetRequest;
use App\Http\Resources\PetCollection;
use App\Http\Resources\PetResource;
use App\Filters\PetFilter;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   //filtro mascota
         $filter = new petFilter();
         $queryItems = $filter->transform($request);
         if(count($queryItems) == 0){
            return new PetCollection(Pet::paginate());
         }
         else{
            $pets = Pet::where($queryItems)->paginate();
            return new PetCollection($pets->appends($request->query()));
         }
         // Obtiene todos las mascotas de la base de datos
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetRequest $request)
    {
        //Guardar mascota
        return new PetResource(Pet::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        //
         return new PetResource($pet);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetRequest $request, Pet $pet)
    {
         
    $pet->update($request->all());

    return response()->json($pet, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        $pet->delete(); // Elimina el registro

        // Devuelve una respuesta JSON vacía con un código de estado 204
        return response()->json(null, 204);
    }
}
