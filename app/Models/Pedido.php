<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use Illuminate\Support\Facades\DB;

class Pedido extends Model
{ 
public function pedido ()
{
    return $this->hasMany('Item')
    ->select( DB::raw('item_id, sum(valor) as valores, count(1) as qtd'))
    ->groupBy('item_id')
    ->orderBY('item_id', 'desc');
}
}