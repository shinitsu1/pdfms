<?php

namespace App\Http\Controllers;

use App\Models\Supervisors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupervisorsController extends Controller
{
    public function index() {

        // $data = Supervisors::all();


        // return view('supervisor', ['supervisors' => $data]);

        $data = array("supervisors"=> DB::table('supervisors')->orderBy('created_at', 'desc')->paginate(5));
        return view('supervisors', $data);



    }

    // public function destroy(Request $request, Supervisors $supervisor){
    //     $supervisor->delete();

    //     return redirect('supervisors')->with('message', 'Data was deleted successfully.');
    // }

    public function destroy(Supervisors $supervisor){
       $supervisor->delete();
        return redirect('supervisors')->with('message', 'Data was deleted successfully.');
    }






}
