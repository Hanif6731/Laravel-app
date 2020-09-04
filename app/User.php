<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    //protected $table='user_table'; //to Map table
    public $timestamps = false; // doesn't look for CREATED_AT and UPDATED_AT
    //const CREATED_AT = 'creation_time';
    //const UPDATED_AT = 'modification_time';

    protected $primaryKey='userId';


}
