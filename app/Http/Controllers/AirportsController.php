<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AirportsController extends Controller
{
    public function index()
    {
        
    }
    public function create()
    {
        return view("Airpots.create");
    }
    public function store(Request $request)
    {
        $data = new Airpots();

        $data->Airpots_name = $request->name;
        $data->Airpots_country = $request->Country;
        $data->active = $request->vendor_status;
        $data->Airpots_modified = Auth::user()->id;

        if($data->save()){
            return redirect()->route('Airpots.index');
        }else{
            return redirect()->back();
        }
    }
}