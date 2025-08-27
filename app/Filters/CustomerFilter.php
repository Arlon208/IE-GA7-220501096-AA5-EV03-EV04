<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CustomerFilter extends ApiFilter
{
    protected $safeParams = [
        'nombre' => ['eq'],
        'ciudad' => ['eq'],
        'direccion' => ['eq'],
        'telefono' => ['eq']
    ];

    protected $columnMap = [];

    protected $operatorMap = [
        'eq' => '='
    ];
}