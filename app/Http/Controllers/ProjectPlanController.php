<?php

namespace App\Http\Controllers;

use App\Models\ProjectPlan;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function createPlan($id)
    {
        $project = Project::find($id)->first();
        
        return view('dashboard/project/createPlan',
            [
                'project' => $project,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function storePlan(Request $request)
    {
        $projectPlan = new ProjectPlan;
        $projectPlan->project_id = $request->project_id;
        $projectPlan->title = $request->title;
        $projectPlan->type = $request->type;
        $projectPlan->upload_time = $request->upload_time;
        $projectPlan->upload_date = $request->upload_date;
        $projectPlan->status = $request->status;
        $projectPlan->detail = $request->detail;
        $projectPlan->caption = $request->caption;
        $projectPlan->hashtag = $request->hashtag;
        $projectPlan->revision = $request->revision;
        $projectPlan->save();

        return redirect()->route('project.detail', $request->project_id)->with('status', 'Project Plan Created');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectPlan $projectPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectPlan $projectPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectPlan $projectPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectPlan $projectPlan)
    {
        //
    }
}
