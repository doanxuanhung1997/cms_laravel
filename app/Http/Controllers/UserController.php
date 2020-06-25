<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use \Carbon\Carbon;
use Illuminate\Support\Str;
use App\User;
use App\Models\Role;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->orderBy('updated_at', 'desc')->get();
        // $roles = DB::table('role')->orderBy('role', 'asc')->get();
        return view('dashboard.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = DB::table('role')->orderBy('role', 'asc')->get();
        return view('dashboard.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();

        $user->id = Str::uuid();
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->name = $request->input('fullName');
        $user->role = $request->input('role');;
        $user->phone_number = $request->input('phone');
        $user->address = $request->input('address');

        $user->save(); //Lưu lại

        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }

    public function handleLogin(Request $request)
    {
        if(Auth::attempt(['email'=>$request->input('email'), 'password'=>$request->input('password')]))
        {
            $ss=$request->session();
            $ss->put('idUser',Auth::user()->id);
            return redirect()->route('dashboard');
        }
        else
            return redirect()->route('store')->with('thongbao','Đăng nhập không thành công. Hãy thử lại !!!');
    }

    public function logout(Request $request)
    {
        $ss=$request->session();
        $ss->put('idUser',"");
        Auth::logout();
        return redirect('trangchu');
    }
}
