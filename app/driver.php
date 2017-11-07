<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'drivers';

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
    protected $fillable = ['nama', 'username', 'email', 'password', 'alamat', 'telfon', 'foto'];

    
}
