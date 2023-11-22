<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Supervisors;
use App\Models\User;
use App\Models\Vehicles;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function countUsersByRole(){
        $countSupervisor = Supervisors::where('role', 'supervisor')->count();
        $countVehicle = Vehicles::where('role', 'vehicle')->count();
        $countAccount = Accounts::where('role', 'police')->count();



        return view('dashboard',
        ['countSupervisor' => $countSupervisor,
        'countVehicle' => $countVehicle,
        'countAccount' => $countAccount]


        );
    }
}
