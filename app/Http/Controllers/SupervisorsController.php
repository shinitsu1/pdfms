<?php

namespace App\Http\Controllers;

use App\Models\Supervisors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupervisorsController extends Controller
{
    public function index(Request $request, Supervisors $supervisor) {

        // $data = Supervisors::all();


        // return view('supervisor', ['supervisors' => $data]);

        // $data = array("supervisors"=> DB::table('supervisors')->orderBy('created_at', 'desc')->paginate(5));

        $data = Supervisors::where('role', 'supervisor')->get();


        return view('supervisors', compact('data'));



    }

    // public function edit($supervisorID){
    //     $supervisor = Supervisors::findOrFail($supervisorID);
    //     return view ('supervisors', ['supervisor' => $supervisor]);
    // }

    // public function destroy(Request $request, Supervisors $supervisor){
    //     $supervisor->delete();

    //     return redirect('supervisors')->with('message', 'Data was deleted successfully.');
    // }

    public function supervisor_delete(Supervisors $supervisor){
       $supervisor->delete();
        return redirect('supervisors')->with('message', 'User Account was deleted successfully.');
    }

    public function supervisor_edit(Request $request, Supervisors $supervisor) {
        $validated = $request->validate([

            "first_name" => ['required', 'min:4'],
            "last_name" => ['required', 'min:4'],
            "email" => ['required', 'email'],
            "age" => ['required'],
       ]);

       $supervisor->update($validated);

    //    return back()->with('message', 'User Account was successfully updated');


    }

}
