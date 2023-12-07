<?php

namespace App\Http\Controllers;

use App\Models\Supervisors;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use App\Mail\PoliceLoginLink;

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
            'email' => 'required|email|unique:supervisors,email', // Assuming 'supervisors' table for supervisors
            'password' => 'nullable|string|min:6',
        ]);
    
        $accountsData = $request->all();
    
        if ($request->hasFile('photo')) {
            $fileName = time().$request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('image', $fileName, 'public');
            $accountsData["photo"] = '/storage/'.$path;
        }
    
        // Create a new supervisor record using the create() method
        $supervisor = Supervisors::create([
            'photo' => $accountsData["photo"],
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => bcrypt('12345'), // Hash the password securely
            'role' => 'supervisor',
        ]);
        
        $supervisorEmail = $request->input('email'); // Retrieve the email address of the newly added supervisor account
        
        // Assuming the PoliceLoginLink mailable is correctly defined
        $loginLink = 'http://127.0.0.1:8000/login'; // Replace with the actual login link
        
        // Send email with login link to the newly added supervisor
        Mail::to($supervisorEmail)->send(new PoliceLoginLink($loginLink));
    
        // Assuming 'User' model is related to 'Supervisors' model (one-to-one or other relationship)
        // Adjust this part according to your application's logic
        User::create([
            'photo' => $accountsData["photo"],
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => bcrypt('12345'), // Hash the password securely
            'role' => 'supervisor',
            'supervisor_id' => $supervisor->id, // Assuming User belongs to Supervisor
        ]);
    
        return redirect()->route('supervisors')->with('message', 'User Added Successfully.');
    }
}    