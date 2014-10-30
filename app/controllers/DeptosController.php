<?php

class DeptosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /deptos
	 *
	 * @return Response
	 */
	public function index()
	{
		$deptos = Depto::all();
		return View::make('deptos.index',compact('deptos'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /deptos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return  View::make('deptos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /deptos
	 *
	 * @return Response
	 */
	public function store()
	{
		$depto = new Depto;
			
			$depto->id = Input::get('id');
			$depto->bodega = Input::get('bodega');
			$depto->estacionamiento = Input::get('estacionamiento');
			$depto->gastos_Espe= Input::get('gastos_Espe');
			$depto->rut_Ed = Input::get('rut_Ed');
			$depto->rut_Prop = Input::get('rut_Prop');
			$depto->save();

		return Redirect::to('deptos')->with('estado','ok');
	}

	/**
	 * Display the specified resource.
	 * GET /deptos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$depto = Depto::find($id);
		return View::make('deptos.show',compact('depto'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /deptos/{id}/edit
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
	 * PUT /deptos/{id}
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
	 * DELETE /deptos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}