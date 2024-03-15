<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function index() {
        $users = User::all();
        // dd($categories);
        return view('users.index', compact('users'));
    }
    public function create() {
        return view('users.create');
    }
    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required','string'],
            'password' => ['required', 'string'],

        ]);

        user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        // DB::table('categories')->insert([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'status' => $request->status
        // ]);

        return redirect()->route('users.index');
    }
    public function edit($id) {
        // dd($id);
        $user = User::find($id);
        $user = User::where('id', $id)->first();
        // dd($category);
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id) {
        $user = User::find($id);
        // dd($category);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
          'password' => $request->password
        ]);

        // DB::table('categories')->where('id', $id)->update([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //   'status' => $request->status
        // ]);
        return redirect()->route('users.index');
    }
    public function destroy($id) {
        user::where('id', $id)->delete();
        // DB::table('categories')->where('id', $id)->delete();
        return redirect()->route('users.index');
    }
}
