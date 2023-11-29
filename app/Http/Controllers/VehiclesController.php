<?php

namespace App\Http\Controllers;

use App\Models\Vehicles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiclesController extends Controller
{
    //
    public function index() {
        $vehicles = Vehicles::where('role', 'vehicle')->get();

        return view('vehicles', compact('vehicles'));
    }

    public function destroy(Vehicles $vehicle){
        $vehicle->delete();

        return redirect('vehicles')->with('message', 'Data was deleted successfully.');
    }

    public function update(Request $request, $id)
    {
        $data = Vehicles::find($id);

        if (!$data) {
            return redirect()->route('vehicles')->with('error', 'User not found');
        }

        // Validate the request
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'role' => 'string',
            // 'emergency_phone' => 'required|int',

        ]);

        // Update user information
        $data->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            // 'emergency_phone' => $request->input('emergency_phone'),
        ]);

        return redirect()->route('vehicles')->with('message', 'User updated successfully');
    }

    public function create_vehicle(Request $request){

        $number = mt_rand(1000000000, 9999999999);
        if ($this->vehicleCodeExists($number)) {
            $number = mt_rand(1000000000, 9999999999);
        }
        $request['vehicle_code'] = $number;

        $request->validate([
            'name' => 'required|string',
            'email' => 'required',
            // 'username' => 'required|string',
            // 'email' => 'required', 'email', Rule::unique('accounts', 'email'),
            // 'phone' => 'required',
            'role' => 'string',
            // 'password' => 'string',
        ]);
        Vehicles::create($request->all());
        // Vehicles::create([
        //     'name' => $request->input('name'),
        //     // 'username' => $request->input('username'),
        //     'email' => $request->input('email'),
        //     // 'phone' => $request->input('phone'),
        //     // 'emergency_phone' => $request->input('emergency_phone'),
        //     // 'password' => '12345',
        //     'role' => 'vehicle',
        //     'vehicle_code' => $request->input('vehicle_code'),
        // ]);

        return redirect()->route('vehicles')->with('message', 'User Added Successfully.');
    }

    public function vehicleCodeExists($number){

        return Vehicles::whereVehicleCode($number)->exists();
    }

}
