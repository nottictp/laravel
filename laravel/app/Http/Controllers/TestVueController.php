<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class TestVueController extends Controller
{
    public function index(){
        $projects = \App\Project::all();
        $users = \App\User::all();
        return view("test-vue", compact('projects', 'users'));
    }
}