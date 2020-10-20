<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Hash; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['users'] = User::simplePaginate(10); 
        return view('admin.users.index', $arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User();

        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->save();
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User $User
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::findOrFail($id);

        return view('admin.users.show' , compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product $Product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);

        return view('admin.users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product $Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->save();
        return redirect()->route('/users/' . $users->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        User::destroy($id);
        return redirect()->route('users.index');
    }
}
