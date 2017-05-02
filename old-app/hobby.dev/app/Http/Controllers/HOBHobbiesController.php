<?php namespace App\Http\Controllers;

use App\models\HOBHobbies;
use Illuminate\Routing\Controller;

class HOBHobbiesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /hobhobbies
	 *
	 * @return Response
	 */
	public function index()
	{
        return HOBHobbiesController::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /hobhobbies/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $data = request()->all();

        $record = HOBHobbies::create(array(
            'name' => $data['hobby'],
            'description' => $data['description']

        ));


        return view('hobby',  $record->toArray());
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /hobhobbies
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /hobhobbies/{id}
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
	 * GET /hobhobbies/{id}/edit
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
	 * PUT /hobhobbies/{id}
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
	 * DELETE /hobhobbies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}