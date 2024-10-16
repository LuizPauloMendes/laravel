<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['item_id', 'item_name', 'price', 'quantity', 'total'];

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
