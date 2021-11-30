<?php

namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $roleModel;
    public function __construct(User $user, Role $role){
        $this->middleware('auth');
        $this->userModel = $user;
        $this->roleModel = $role;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index' , compact('users') );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'users' =>  $this->userModel->get(),
            'roles' =>  $this->roleModel->get(),
        ];



        return view('admin.users.create', $data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $query= $this->userModel->create([

            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'country'=>$request->country,
            'address'=>$request->address,
            'education'=>implode(",",$request->input('education',[])),
            'role_id'=>$request->role_id,
            'password'=>$request->password,



        ]);

        if ($query)
        {
            return redirect()->route('users.index');
        }else
        {
            return redirect()->route('users.create');

        }
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {

            $user = User::find($id);

        return view('admin.users.edit', compact('user') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $userdata= $this->userModel->findOrFail($id);
        $userdata->phone =  $request->phone;
        $userdata->country =  $request->country;
        $userdata->address =  $request->address;
        $userdata->education = implode(",",$request->input('education',[]));
        $userdata->update();

      return redirect()->route('users.index');
        //return view('admin.users.index' );
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
    public function registeruser($id)
    {
        //
    }
}
