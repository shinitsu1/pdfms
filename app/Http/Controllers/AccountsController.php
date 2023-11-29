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

        $accounts = Accounts::where('role', 'police')->get();

        return view('accounts', compact('accounts'));
    }

    public function destroy(Accounts $account){
        $account->delete();
        return redirect('accounts')->with('message', 'Data was deleted successfully.');
    }

    public function create_account(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required',
            // 'username' => 'required|string',
            // 'email' => 'required', 'email', Rule::unique('accounts', 'email'),
            // 'phone' => 'required',
            'role' => 'string',
            // 'password' => 'string',
        ]);

        Accounts::create([
            'name' => $request->input('name'),
            // 'username' => $request->input('username'),
            'email' => $request->input('email'),
            // 'phone' => $request->input('phone'),
            // 'emergency_phone' => $request->input('emergency_phone'),
            // 'password' => '12345',
            'role' => 'police',
        ]);

        return redirect()->route('accounts')->with('message', 'User Added Successfully.');
    }

    public function update(Request $request, $id)
    {
        $data = Accounts::find($id);

        if (!$data) {
            return redirect()->route('accounts')->with('error', 'User not found');
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

        return redirect()->route('accounts')->with('message', 'User updated successfully');
    }


}
