<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Category extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];
	public function project(){
		return $this->belongsTo('App\Project', 'project_id');
	}
	public function user(){
		return $this->belongsTo('App\User', 'assign_to');
	}
	// public function issue(){
	// 	return $this->hasMany('App\Issue', 'category_id');
	// }
	public function scopeGlobal($query){
        return $query->where('project_id', null);
    }
    public function scopeAssigned($query){
        return $query->where('assign_to', null);
    }
    public function scopeAdminTasks($query){
        $admin = User::where('access_level', 'administrator')->first();
        return $query->where('assign_to', $admin->id);
    }
}
