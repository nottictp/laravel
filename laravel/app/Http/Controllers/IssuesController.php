<?php
namespace App\Http\Controllers;
use App\Issue;
use Illuminate\Http\Request;
class IssuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issues = \App\Issue::all();
        return view("issues.index",[
            "issues" => $issues
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = \App\User::all();
        $projects = \App\Project::all();
        $categories = \App\Category::all();
        $statuses = ['new','feedback','acknowledged','confirmed','resolved','closed'];
        $priorities = ['none','low','normal','high','urgent','immediate'];
        $severities = ['feature','trivial','text','tweak','minor','major','crash','block'];
        $reproducibilities = ['always','sometimes','random','have not tried','unable to reproduce','N/A'];
        return view("issues.create", compact(
            "users", "projects", "categories",
            "statuses", "priorities", "severities",
            "reproducibilities"
        ));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $issue = new Issue;
            $issue->summary = $request->input("summary");
            $issue->category_id = $request->input("category");
            $issue->project_id = $request->input("project");
            $issue->reporter = $request->input("reporter");
            $issue->assigned_to = $request->input("assigned_to");
            $issue->status = $request->input("status");
            $issue->priority = $request->input("priority");
            $issue->severity = $request->input("severity");
            $issue->reproducibility = $request->input("reproducibility");
            $issue->description = $request->input("description");
            $issue->steps = $request->input("steps");   
            $issue->save();
            return redirect("/issues/$issue->id");
        }catch(Exception $e){
            return back()->withInput();
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function show(Issue $issue)
    {
        return view("issues.show",[
            "issue" => $issue
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function edit(Issue $issue)
    {
        $users = \App\User::all();
        $projects = \App\Project::all();
        $categories = \App\Category::all();
        $statuses = ['new','feedback','acknowledged','confirmed','resolved','closed'];
        $priorities = ['none','low','normal','high','urgent','immediate'];
        $severities = ['feature','trivial','text','tweak','minor','major','crash','block'];
        $reproducibilities = ['always','sometimes','random','have not tried','unable to reproduce','N/A'];
        return view("issues.edit", compact(
            "issue",
            "users", "projects", "categories",
            "statuses", "priorities", "severities",
            "reproducibilities"
        ));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Issue $issue)
    {
        try{
            $issue->summary = $request->input("summary");
            $issue->category_id = $request->input("category");
            $issue->project_id = $request->input("project");
            $issue->reporter = $request->input("reporter");
            $issue->assigned_to = $request->input("assigned_to");
            $issue->status = $request->input("status");
            $issue->priority = $request->input("priority");
            $issue->severity = $request->input("severity");
            $issue->reproducibility = $request->input("reproducibility");
            $issue->description = $request->input("description");
            $issue->steps = $request->input("steps");   
            $issue->save();
            return redirect("/issues/$issue->id");
        }catch(Exception $e){
            return back()->withInput();
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Issue $issue)
    {
        $issue->delete();
        return redirect("/issues");
    }
}