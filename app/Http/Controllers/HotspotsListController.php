<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListHotspot;


class HotspotsListController extends Controller
{

    public function index() {
       
                return view('auth0.hotspots');
        
    } 

    public function saveItem(Request $request) {
        // \Log::info(json_encode($request->all()));

        $newListHotspot = new ListHotspot;
        $newListHotspot->name = $request-> listHotlistItem;
        $newListHotspot->is_infected = 1;
        $newListHotspot->save();

        // return redirect('/hotspots');
        return view ('/hotspots');
    }

}
