<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {

        $users = User::orderBy('name', 'asc')->paginate(10);

        return view('users.index', compact('users'));
    }

    public function search(Request $request)
    {
        $users = User::where('name', 'like', '%' . $request->get('keyword') . '%')->orderBy('created_at', 'desc')->paginate(10);

        return view('users.index', compact('users'));
    }


}
