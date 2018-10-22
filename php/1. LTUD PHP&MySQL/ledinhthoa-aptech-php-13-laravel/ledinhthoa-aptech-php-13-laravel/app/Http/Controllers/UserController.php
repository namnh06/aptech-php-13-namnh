<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index()
    {
        //
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
    public function create()
    {
        //
        return view('users.create');
    }
    public function store(Request $request)
    {
        //
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('users.index');
    }
    public function show($id)
    {
        //
        $user = User::find($id);
        return view('users.show', ['user' => $user]);

    }
    public function edit($id)
    {
        //
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);
        $user->name = $request->name;
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }

}
