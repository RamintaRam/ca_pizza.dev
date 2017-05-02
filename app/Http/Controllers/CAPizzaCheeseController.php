<?php namespace App\Http\Controllers;

use App\models\CAPizzaCheese;
use Illuminate\Routing\Controller;

class CAPizzaCheeseController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /capizzacheese
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /capizzacheese/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $data = request()->all();

        $record = CAPizzaCheese::create(array(
            'name' => $data['cheese']

        ));


        return view('cheese', $record->toArray());
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /capizzacheese
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /capizzacheese/{id}
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
	 * GET /capizzacheese/{id}/edit
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
	 * PUT /capizzacheese/{id}
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
	 * DELETE /capizzacheese/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}