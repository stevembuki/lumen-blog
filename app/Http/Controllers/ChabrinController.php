<?php

namespace App\Http\Controllers;

use App\Chabrin;
//use Chabrin;

//use Illuminate\Http\Request;
use Illuminate\Http\Request;

//cuse App\Http\Requests;
use App\Http\Controllers\Controller;

class ChabrinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//CreatePost
    public function createNew(Request $request)
    {
        $chabrin=Chabrin::create($request->all());

        return response()->json($chabrin);
    }
//UpdatePost
    public function updateNew(Request $request,$id)
    {
        $chabrin = Chabrin::find($id);
        $chabrin->tenantName=$request->input('tenantName');
       //$chabrin->unitcode=$request->input('unitcode');
        $chabrin->amount=$request->input('amount');
        $chabrin->description=$request->input('description');

        $chabrin->save();

        return response()->json($chabrin);

    }
//Lists all Post
    public function index()
    {
        $chabrin = Chabrin::all();

        return response()->json($chabrin);

    }

    public function view($id)
    {
        $chabrin = Chabrin::find($id);

        return response()->json($chabrin);
    }

    public function delete($id)
    {
        $chabrin = Chabrin::find($id);

        $chabrin->delete();

        return response()->json('Removed Successfully'); 
    }
}
