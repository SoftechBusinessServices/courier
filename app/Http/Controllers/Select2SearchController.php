<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class Select2SearchController extends Controller
{
    //

    public function selectSearch(Request $request)
    {
    	$movies = [];

        if($request->has('q')){
            $search = $request->q;
            $movies =Service::select("id", "name")
            		->where('name', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($movies);
    }
}
