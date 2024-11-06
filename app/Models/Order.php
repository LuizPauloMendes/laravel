<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [ 'item_id', 'image', 'item_name', 'price', 'quantity', 'total'];

    public function item()
{
    return $this->belongsTo(Item::class, 'item_id'); // Certifique-se de que 'item_id' está correto
}
public function user()
{
    return $this->belongsTo(User::class);
}
}
