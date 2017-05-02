<?php namespace App\Http\Controllers;

use App\models\HOBCities;
use Collective\Html\FormBuilder;
use Illuminate\Routing\Controller;

class HOBCitiesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /hobcities
	 *
	 * @return Response
	 */
	public function index()
	{
        return HOBCities::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /hobcities/create
	 *
	 * @return Response
	 */
	public function create()
    {
        $data = request()->all();

        $record = HOBCities::create(array(
            'name' => $data['city']

        ));


        return view('main', $record->toArray());
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /hobcities
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /hobcities/{id}
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
	 * GET /hobcities/{id}/edit
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
	 * PUT /hobcities/{id}
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
	 * DELETE /hobcities/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}