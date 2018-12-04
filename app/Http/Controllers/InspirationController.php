<?php

namespace App\Http\Controllers;
use App\Inspiration;
use Illuminate\Http\Request;

class InspirationController extends Controller
{
    public function create(Request $request, $image_info) {
        $projects = Project::where('user_id', Auth::id())->where('active', 1)->first();
        if ($project == null ) {
            return redirect('account/project/create');
        } else {
            $saveData = [
                "image_info" => $image_info,
                "image_url" => $request->image_url,
                "project_id" => 1
            ];
            $inspiration = Inspiration::create($saveData);
        }
        return back();
    }

    public function destroy($image_info) {
        $inspiration = Inspiration::where('image_info', $image_info)->delete();
        return back();
    }
}
