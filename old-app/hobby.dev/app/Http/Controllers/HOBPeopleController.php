<?php namespace App\Http\Controllers;

use App\models\HOBCities;
use App\models\HOBHobbies;
use App\models\HOBPeople;
use Illuminate\Routing\Controller;

class HOBPeopleController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /hobpeople
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /hobpeople/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $data = request()->all();

        $record = HOBPeople::create($data);
        dd($data);
        $record['hobbies'] = HOBHobbies::pluck('name', 'id');



        return view('people',  $record->toArray());
	}


    public function showCreate()
    {
        $configuration=[];
        $configuration['hobbies'] = HOBHobbies::pluck('name', 'id')->toArray();
        $configuration['cities']  = HOBCities::pluck('name', 'id')->toArray();

        dd($configuration);

        return view('people',  $configuration);
    }
	/**
	 * Store a newly created resource in storage.
	 * POST /hobpeople
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /hobpeople/{id}
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
	 * GET /hobpeople/{id}/edit
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
	 * PUT /hobpeople/{id}
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
	 * DELETE /hobpeople/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}