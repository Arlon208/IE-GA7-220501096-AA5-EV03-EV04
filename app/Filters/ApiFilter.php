<?php

namespace App\Filters;

use Illuminate\Http\Request;
class ApiFilter{
    protected $safeParams = [];
    protected $columnMap = [];
    protected $operatorMap = [];

    public function transform(Request $request){
        $eloQuery = [];
        foreach($this->safeParams as $parm => $operators){
            $query = $request->query($parm);
            if(!isset($query)){
                continue;
            }
            $colum = $this->columnMap[$parm] ?? $parm;
            foreach($operators as $operator){
                if(isset($query[$operator])){
                    $eloQuery[] = [$colum,$this->operatorMap[$operator], $query[$operator]];
                }
            }
        }
        return $eloQuery;
    }
}