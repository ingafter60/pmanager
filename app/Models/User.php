<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'first_name',
        'last_name',
        'nick_name',
        'city',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // User has many tasks
    public function tasks() {
        return $this->hasMany('App\Models\Task');
    }

    // User has many comments
    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }

    // User belong to role
    public function role() {
        return $this->belongsTo('App\Models\Role');
    }

    // User has many companies
    public function companies() {
        return $this->hasMany('App\Models\Company');
    }  
    
    // User belongs to many tasks
    public function tasks() {
      return $this->belongsToMany('App\Models\Task');
    }  
    
    // User belongs to many projects
    public function projects() {
      return $this->belongsToMany('App\Models\Project');
    }
}
