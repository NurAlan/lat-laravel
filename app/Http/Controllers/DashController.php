<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashController extends Controller
{
    public function index()
    {
        $data['data'] = User::all();
        return view('user',$data);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request,User $user)
    {
        $data = array('name' => $request->name,'password' => $request->password );
        $insert = $user->insert($data);
        return 'success';
    }
    public function edit(Request $request)
    {
        $data['user'] = User::where('id',$request->id)->first();
        return view('edit',$data);
    }
    public function update(Request $request)
    {
        $data = array('name' => $request->name, 'password' => $request->password);
        User::where('id',$request->id)->update($data);
        return 'success';
    }
    public function delete(Request $request)
    {
        User::where('id',$request->id)->delete();
        return redirect('/');
    }
    public function trash()
    {
        $data['trash'] = User::onlyTrashed()->get();
        return view('trash',$data);
    }
}
