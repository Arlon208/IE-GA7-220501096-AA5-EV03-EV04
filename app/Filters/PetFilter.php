<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class PetFilter extends ApiFilter
{
    protected $safeParams = [
        'customer_id' => ['eq'],
        'nombre' => ['eq'],
        'especie' => ['eq'],
        'edad' => ['eq'],
        'genero' => ['eq']
    ];

    protected $columnMap = [
        
    ];

    protected $operatorMap = [
        'eq' => '='
    ];
}