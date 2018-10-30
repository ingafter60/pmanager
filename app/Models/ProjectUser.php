<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
  //
	protected $fillable = [
		'project_id',
		'user_id'
	];

  // Project belong project
  public function project() {
      return $this->belongsTo('App\Models\Project');
  }	

  // Project belong users
  public function user() {
      return $this->belongsTo('App\Models\User');
  }
}
