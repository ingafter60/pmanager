<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  //
	protected $fillable = [
		'name',
		'description',
		'company_id',
		'user_id',
		'days'
	];

  // Project belongs company
  public function company() {
      return $this->belongsTo('App\Models\Company');
  }	

  // Project belongs to many users
  public function user() {
      return $this->belongsToMany('App\Models\User');
  }	
}
