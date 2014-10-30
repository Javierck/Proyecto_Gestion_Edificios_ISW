<?php

class UsersController extends BaseController {
	protected $layout = 'layouts.master';
	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return $this->layout->content = View::make('users.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return  View::make('users.create');
	}
	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User;

		$user->id = Input::get('id');
		$user->password = Input::get('password');
		$user->real_name = Input::get('real_name');
		$user->user_Type = Input::get('user_Type');
		$user->cellphone = Input::get('cellphone');
		$user->email = Input::get('email');
		$user->date = Input::get('date');
		$user->save();
		/*DB::table('users')->insert(array(
			'id' => Input::get('id'),
			'password'=>  Input::get('password'),
			'real_mame' => Input::get('real_name'),
			'user_Type' => Input::get('user_Type'),
			'cellphone' => Input::get('cellphone'),
			'email' =>  Input::get('email'),
			'date' => Input::get('date')			
		));*/
		return Redirect::to('users')->with('estado','ok');
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);
		return View::make('users.show',compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}