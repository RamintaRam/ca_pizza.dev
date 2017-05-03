<?php namespace App\Http\Controllers;

use App\models\CAPizzaIngredients;
use Illuminate\Routing\Controller;

class CAPizzaIngredientsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /capizzaingredients
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /capizzaingredients/create
	 *
	 * @return Response
	 */
	public function create()
    {
        $data = request()->all();

        $record = CAPizzaIngredients::create(array(
            'name' => $data['ingredients']

        ));


        return view('ingredients', $record->toArray());
    }


    /**
	 * Store a newly created resource in storage.
	 * POST /capizzaingredients
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /capizzaingredients/{id}
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
	 * GET /capizzaingredients/{id}/edit
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
	 * PUT /capizzaingredients/{id}
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
	 * DELETE /capizzaingredients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}