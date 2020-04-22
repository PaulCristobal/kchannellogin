<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    //Table Name
    protected $table = 'dashboard';

    public $primaryKey = 'id';

    public $timestamps = true;
}
