<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table='book';
    protected $fillable=['name', 'email', 'password', 'title','id_user','pages','price','image'];
    public function relUsers()
    {
        return $this->hasOne('App\Models\User','id','id_user');

    }
}
