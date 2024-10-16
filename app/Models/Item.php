<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table='book';
    protected $fillable=['name', 'email', 'password', 'title','id_user','pages','price'];
    public function relUsers()
    {
        return $this->hasOne('App\Models\ModelBook','id','id_user');}

    public function orders()
    {
        return $this->hasMany(Order::class, 'item_id'); // 'item_id' deve ser o nome da coluna na tabela 'orders'
    }
}