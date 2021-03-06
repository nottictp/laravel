<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
	protected $dates = ['deleted_at'];

	public function categories(){
		return $this->hasMany('App\Category', 'project_id');
	}
	
}
