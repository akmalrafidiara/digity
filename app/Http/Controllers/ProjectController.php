<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Service;
use App\Models\User;
use App\Models\ProjectPlan;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::all();
        return view('dashboard/project/index',
            [
                'projects' => $project
            ]
        );
    }

    public function detail($id)
    {
        $project = Project::find($id)->first();
        $plans = ProjectPlan::where('project_id', $id)->get();
        return view('dashboard/project/detail',
            [
                'project' => $project,
                'plans' => $plans
            ]);
    }
    public function createProject()
    {
        
        $stackholder = User::where('role_id', '3')->get();
        $PIC = User::where('role_id', '2')->get();
        $service = Service::all();
        return view('dashboard/project/create',
            [
                'stackholder' => $stackholder,
                'PIC' => $PIC,
                'service' => $service
            ]
        );
    }

    public function storeProject(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'stackholder' => 'required',
            'pic' => 'required',
            'service_id' => 'required',
            'date_start' => 'required',
            'status' => 'required',
        ]);

        $project = new Project;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->note = $request->note;
        $project->stackholder = $request->stackholder;
        $project->pic = $request->pic;
        $project->service_id = $request->service_id;
        $project->date_start = $request->date_start;
        $project->date_end = $request->date_end;
        $project->status = $request->status;
        $project->save();

        return redirect('/dashboard/project');
    }

    public function editProject($id)
    {
        $project = Project::find($id)->first();
        $stackholder = User::where('role_id', '3')->get();
        $pic = User::where('role_id', '2')->get();
        $service = Service::all();
        return view('dashboard/project/update',
            [
                'project' => $project,
                'stackholder' => $stackholder,
                'pic' => $pic,
                'service' => $service
            ]
        );
    }

    public function updateProject(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'stackholder' => 'required',
            'pic' => 'required',
            'service_id' => 'required',
            'date_start' => 'required',
            'status' => 'required',
        ]);

        $project = Project::find($request->id)->first();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->note = $request->note;
        $project->stackholder = $request->stackholder;
        $project->pic = $request->pic;
        $project->service_id = $request->service_id;
        $project->date_start = $request->date_start;
        $project->date_end = $request->date_end;
        $project->status = $request->status;
        $project->save();

        return redirect('/dashboard/project');
    }

    public function deleteProject($id)
    {
        $project = Project::find($id)->first();
        $project->delete();

        return redirect('/dashboard/project');
    }

    public function uploadFile()
    {
        return view('dashboard/project/upload');
    }
}
