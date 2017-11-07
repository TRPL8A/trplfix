<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tikets';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['namaPesawat', 'asal', 'tujuan', 'berangkat', 'tiba', 'harga'];

    
}
