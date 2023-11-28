<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class AccountsController extends Controller
{
    //

    public function index() {

        $accounts = Accounts::all();

        return view('accounts', compact('accounts'));
    }

    public function destroy(Accounts $account){
        $account->delete();
        return redirect('accounts')->with('message', 'Data was deleted successfully.');
    }

    public function create_account(Request $request){
        $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required', 'email', Rule::unique('accounts', 'email'),
            'phone' => 'required',
            'employee_id' => 'required',
            'role' => 'nullable|string|min:6',
            'password' => 'nullable|string|min:6',
        ]);

        Accounts::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => '12345',
            'role' => 'supervisor',
        ]);

        return redirect()->route('supervisors')->with('message', 'User Added Successfully.');
    }

    public function update_account(Request $request, $id)
    {
        $data = Accounts::find($id);

        if (!$data) {
            return redirect()->route('accounts')->with('error', 'User not found');
        }

        // Validate the request
        $request->validate([
            'name' => 'required|string',
            // 'email' => 'required|email|unique:users,email,' . $data->id,
            'phone' => 'required|string',
            // 'employee_id' => 'required|string',
            // 'gender' => 'required|string',
            // 'address' => 'required|string',
            // 'username' => 'required|string',
            // 'shift' => 'required|string',
            // 'password' => 'nullable|string|min:6',
            // 'emergency_phone' => 'required|string',
            // 'role' => 'string',
        ]);

        // Update user information
        $data->update([
            'name' => $request->input('name'),
            // 'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            // 'employee_id' => $request->input('employee_id'),
            // 'gender' => $request->input('gender'),
            // 'address' => $request->input('address'),
            // 'username' => $request->input('username'),
            // 'shift' => $request->input('shift'),
            // 'emergency_phone' => $request->input('emergency_phone'),
            // 'password' => $request->has('password') ? bcrypt($request->input('password')) : $data->password,

            // 'role' => $request->input('role'),
        ]);

        return redirect()->route('supervisors')->with('message', 'User updated successfully');
    }
}
