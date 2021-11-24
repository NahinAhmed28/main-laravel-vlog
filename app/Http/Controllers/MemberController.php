<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Group;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public $memberModel;
    public $groupModel;
    public function __construct(Member $member, Group $group)
    {

        $this->memberModel= $member;
        $this->groupModel = $group;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'members' =>$this->memberModel->get(),
            'groups' =>  $this->groupModel->get()
        ];


       return view('admin.members.index' , $data );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'groups' =>  $this->groupModel->get(['id','name']),
            ];
        return view ('admin.members.create',$data);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $query= $this->memberModel->create([

            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'education'=>implode(",",$request->input('education',[])),
            'group_id'=>$request->group_id,

        ]);

        if ($query)
        {
            return redirect()->route('members.index');
        }else
        {
            return redirect()->route('members.create');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
