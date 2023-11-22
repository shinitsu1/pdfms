<?php

namespace App\Http\Controllers;

use App\Models\Vehicles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiclesController extends Controller
{
    //
    public function index() {
        $data = array("vehicles"=> DB::table('vehicles')->orderBy('created_at', 'desc')->paginate(5));
        return view('vehicles', $data);
    }

    public function destroy(Vehicles $vehicle){
        $vehicle->delete();

        return redirect('vehicles')->with('message', 'Data was deleted successfully.');
    }
}
