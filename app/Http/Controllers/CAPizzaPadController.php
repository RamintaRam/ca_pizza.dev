<?php namespace App\Http\Controllers;

use App\models\CAPizzaPad;
use Illuminate\Routing\Controller;

class CAPizzaPadController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /capizzapad
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /capizzapad/create
	 *
	 * @return Response
	 */
	public function create()
    {
        $data = request()->all();

        $record = CAPizzaPad::create(array(
            'name' => $data['pad']

        ));


        return view('pad', $record->toArray());
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /capizzapad
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /capizzapad/{id}
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
	 * GET /capizzapad/{id}/edit
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
	 * PUT /capizzapad/{id}
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
	 * DELETE /capizzapad/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}