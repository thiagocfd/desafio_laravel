<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name', 'asc')->paginate(10);

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user = new User();
        $user->create($data);
        $request->session()->flash('success', 'Registro gravado com sucesso!');

        return redirect()->back();
    }

    public function show(User $user)
    {
        //
    }

    public function edit(Request $request, User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $data = $request->all();
        $user->update($data);
        $request->session()->flash('success', 'Registro atualizado com sucesso!');

        return redirect()->back();
    }

    public function destroy(Request $request, User $user)
    {
        $user->delete();

        $request->session()->flash('success', 'Registro excluído com sucesso!');

        return redirect()->back();
    }

    public function changePassword()
    {
        $user = auth()->user();

        return view('users.change_password', compact('user'));
    }

    public function changePasswordUpdate(ChangePasswordRequest $request)
    {
        $user = auth()->user();
        $user->password = Hash::make($request->get('password'));
        $user->save();

        $request->session()->flash('success', 'Senha atualizada com sucesso!');

        return redirect()->back();
    }

}
