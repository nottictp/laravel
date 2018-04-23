<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Issue extends Model
{
    use SoftDeletes;
	protected $dates = ['deleted_at'];
	// public function project(){
	// 	return $this->belongsTo('App\Project', 'project_id');
	// }
	// public function category(){
	// 	return $this->belongsTo('App\Category', 'category_id');
	// }
}
