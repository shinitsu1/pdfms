<?php

namespace App\Http\Controllers;

use App\Models\Supervisors;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class SupervisorsController extends Controller
{
    // public function index(Request $request, Supervisors $supervisor) {
    //     $data = Supervisors::where('role', 'supervisor')->get();

    //     return view('supervisors', compact('data'));
    // }

    public function index()
    {
        // $data = User::all(); // Replace YourModel with your actual model name

        // Fetch users based on role (e.g., 'admin' role)
        $data = Supervisors::where('role', 'supervisor')->get();

        return view('supervisors', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Supervisors::find($id);

        if (!$data) {
            return redirect()->route('supervisors')->with('error', 'User not found');
        }

        // Validate the request
        $request->validate([
            'last_name' => 'string',
            'first_name' => 'string',
            'email' => 'email',
            // 'phone' => 'string',
            'password' => 'nullable|string|min:6',
            // 'role' => 'string',
        ]);

        // Update user information
        $data->update([
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'email' => $request->input('email'),
            // 'phone' => $request->input('phone'),
            'password' => $request->has('password') ? bcrypt($request->input('password')) : $data->password,
            // 'role' => $request->input('role'),
        ]);

        return redirect()->route('supervisors')->with('message', 'User updated successfully');
    }
    //    return back()->with('message', 'User Account was successfully updated');

    public function supervisor_delete(Supervisors $supervisor){
        $supervisor->delete();

         return redirect('supervisors')->with('message', 'Supervisor was deleted successfully.');
     }


    public function create_supervisor(Request $request){
        $request->validate([
            'photo' => 'image',
            'last_name' => 'required|string',
            'first_name' => 'required|string',
            'phone' => 'string',
            'role' => 'nullable|string|min:6',
            'email' => 'required', 'email', Rule::unique('students', 'email'),
            'password' => 'nullable|string|min:6',
        ]);

        $accountsData = $request->all();

        if ($request->hasFile('photo')) {
            $fileName = time().$request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('images', $fileName, 'public');
            $accountsData["photo"] = '/storage/'.$path;
        }

        Supervisors::create([
            'photo' => $accountsData["photo"], // Use the modified variable here
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => '12345',
            'role' => 'supervisor',
        ]);

        User::create([
            'photo' => $accountsData["photo"], // Use the modified variable here
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => '12345',
            'role' => 'supervisor',
        ]);

        return redirect()->route('supervisors')->with('message', 'User Added Successfully.');
    }

    public function messenger(){
        return view ('messenger');
    }
}


