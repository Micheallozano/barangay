<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ProjectsExport;

use Maatwebsite\Excel\Facades\Excel;
use App\Models\ActivityLog;

class ProjectExportController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function exportProject(Request $request) 
    {
        $new_log_activity = new ActivityLog();
        $new_log_activity->id = floor(time()-999999999);
        $new_log_activity->user_id = auth()->user()->id;
        $new_log_activity->name = auth()->user()->name;
        $new_log_activity->module = "Project";
        $new_log_activity->action = "Downloaded Project List";
        $new_log_activity->url = url()->current();
        $new_log_activity->ip = request()->ip();
        $new_log_activity->agent = $request->header('User-Agent');
        $new_log_activity->save();

        return Excel::download(new ProjectsExport, 'Residents.xlsx');   
    }
}
