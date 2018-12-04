<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use App\Project;

// public function __construct()
//     {
//         $this->middleware('auth');
//     }

class PagesController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('pages/home', compact('user'));
    }

    public function results(Request $request) {
        //'https://www.behance.net/v2/users/matiascorea?api_key=lLwzNqwHn503pChAxZeWrQxFxqYDG98w';

        $search = $request->search;


        return redirect('search/'.urlencode($search));
    }


    public function search(Request $request, $keyword) {
        //'https://www.behance.net/v2/users/matiascorea?api_key=lLwzNqwHn503pChAxZeWrQxFxqYDG98w';

        $client = new Client();

        $res = $client->request("GET", "https://api.behance.net/v2/projects?q=".urlencode($keyword)."&client_id=lLwzNqwHn503pChAxZeWrQxFxqYDG98w&field=".urlencode("Web Design"));

        $data = $res->getBody();

        $data = json_decode($data);

        $filterData = $data->projects;

        // $inspirationsArray = Project::where('user_id', Auth::id())->where('active', 1)->first();

        // $inspirationsArray = $inspirationsArray->$inspiration;

        // $arrayInfo = [];

        // foreach ($inspirationsArray as $image) {
        //     array_push($inspirationsArray, $image->$image_info);
        // }
        //return $inspiArrayInfo;

        $user = Auth::user();
        return view('pages/results', compact('user', 'filterData', 'keyword'));
    }
}
