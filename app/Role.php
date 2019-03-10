<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // File: ./app/Role.php
    public function users() 
    {
        return $this->belongsToMany(User::class);
    }
}
