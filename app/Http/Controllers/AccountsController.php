<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountsController extends Controller
{
    //

    public function index() {
        $data = array("accounts"=> DB::table('accounts')->orderBy('created_at', 'desc')->paginate(5));
        return view('accounts', $data);
    }

    public function destroy(Accounts $account){
        $account->delete();
        return redirect('accounts')->with('message', 'Data was deleted successfully.');
    }
}
