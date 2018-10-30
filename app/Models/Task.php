<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  //
	protected $fillable = [
		'name',
		'project_id',
		'user_id',
		'days',
		'hours',
		'company_id'
	];    

	// Task belongs to project
  public function user() {
      return $this->belongsTo('App\Models\Project');
  }
  
	// Task belongs to user
  public function user() {
      return $this->belongsTo('App\Models\User');
  }
  
	// Task belongs to company
  public function company() {
      return $this->belongsTo('App\Models\Company');
  }
  
	// Task belongs to many users
  public function users() {
      return $this->belongsToMany('App\Models\User');
  }
}
