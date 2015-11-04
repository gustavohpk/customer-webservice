<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for editing the user's password.
     *
     * @return Response
     */
    public function editPassword()
    {
        $user = \Auth::user();

        return view('users.password')->withUser($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function updatePassword(Request $request)
    {
        $user = \Auth::user();

        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|alpha_num|min:6|max:32',
            'password_confirmation' => 'required|min:6|max:32|same:password'
        ]);

        if(!\Hash::check($request->current_password, \Auth::user()->password)){
            return redirect()->back()->withErrors('Senha atual informada incorretamente.');
        }

        $input = [
            'password' => bcrypt($request->password)
        ];

        $user->fill($input)->save();

        \Session::flash('flash_message', 'Senha com sucesso.');

        return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = \App\User::orderBy('id','DESC')->paginate(10);
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|alpha_num|min:4|max:16',
            'name' => 'required',
            'password' => 'required|alpha_num|min:6|max:32',
            'password_confirmation' => 'required|min:6|max:32|same:password'
        ]);
        $input = [
            'username' => $request->username,
            'name' => $request->name,
            'admin' => $request->admin == "on" ? true : false,
            'password' => bcrypt($request->password)
            // 'password' => $request->password
        ];

        \App\User::create($input);

        \Session::flash('flash_message', 'Usuário adicionado com sucesso.');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = \App\User::findOrFail($id);

        return view('users.show')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = \App\User::findOrFail($id);

        return view('users.edit')->withUser($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $user = \App\User::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
        ]);

        $input = [
            'name' => $request->name,
            'admin' => $request->admin == "on" ? true : false,
        ];

        $user->fill($input)->save();

        \Session::flash('flash_message', 'Usuário atualizado com sucesso.');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {

        if($id == \Auth::user()->id){
            return redirect()->back()->withErrors('Você não pode excluir sua própria conta de usuário.');
        }

        $user = \App\User::findOrFail($id);

        $user->delete();

        \Session::flash('flash_message', 'Usuário excluído com sucesso.');

        return redirect()->route('users.index');
    }
}
