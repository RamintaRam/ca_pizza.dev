<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class CAPizzaController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /capizza
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /capizza/create
	 *
	 * @return Response
	 */
	public function create()
    {
        $configuration = [];
        $configuration['cheese'] = CAPizzaCheese::pluck('name', 'id')->toArray();
        $configuration['pad'] = CAPizzaPad::pluck('name', 'id')->toArray();

//        dd($configuration);

        return view('form', $configuration);
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /capizza
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /capizza/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /capizza/{id}/edit
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
	 * PUT /capizza/{id}
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
	 * DELETE /capizza/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}