<?php
namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = \App\Category::all();
        return view("categories.index",[
            "categories" => $categories
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = \App\Project::all();
        $users = \App\User::all();
        return view("categories.create",[
            "projects" => $projects,
            "users" => $users
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $category = new Category;
            $category->name = $request->input("name");
            $category->project_id = $request->input("project");
            $category->assign_to = $request->input("assign_to");
            $category->save();
            return redirect("/categories/" . $category->id);
        }catch(Exception $e){
            return back()->withInput();
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view("categories.show", [
            "category" => $category
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $projects = \App\Project::all();
        $users = \App\User::all();
        return view("categories.edit",[
            "category" => $category,
            "projects" => $projects,
            "users" => $users
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        try{
            $category->name = $request->input("name");
            $category->project_id = $request->input("project");
            $category->assign_to = $request->input("assign_to");
            $category->save();
            return redirect("/categories/" . $category->id);
        }catch(Exception $e){
            return back()->withInput();
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/categories'); 
    }
}