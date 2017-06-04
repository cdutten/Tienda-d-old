<?php

namespace App;

use Laratrust\LaratrustRole;

class Role extends LaratrustRole
{
    //
    protected static $roleProfile = 'user';

    protected $table = 'roles';

    protected $fillable = 
    [
        'name','display_name','description',
    ];
}
