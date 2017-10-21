<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$permissions=Permission::all();
		return view('admin.permission.index',compact('permissions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$permissions=Permission::all();
		return view('admin.permission.create',compact('permissions'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{

		Permission::create($request->except(['permission','_token']));



		return redirect()->route('permission.index')->withMessage('permission created');

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

		$permission=Permission::find($id);

		return view('admin.permission.edit',compact(['permission']));

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
		$permission=Permission::find($id);
		$permission->name=$request->name;
		$permission->display_name=$request->display_name;
		$permission->description=$request->description;
		$permission->save();



		return redirect()->route('permission.index')->withMessage('permission Updated');
	}



	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		DB::table("permissions")->where('id',$id)->delete();
		return redirect()->route('permission.index')->withMessage('permission deleted');
	}
}