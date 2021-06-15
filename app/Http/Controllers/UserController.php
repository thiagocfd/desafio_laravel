<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request)
    {

            $data = $request->all();
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

    public function update(Request $request, User $user)
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


}
