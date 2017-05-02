<?php namespace App\Http\Controllers;

use App\models\CAPizzaCheese;
use App\models\CAPizzaIngredients;
use App\models\CAPizzaIngredientsConnections;
use App\models\CAPizzaPad;
use Illuminate\Routing\Controller;

class CAPizzaIngredientsConnectionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /capizzaingredientsconnections
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /capizzaingredientsconnections/create
	 *
	 * @return Response
	 */
    public function create()
    {
        $data = request()->all();

        $record = CAPizzaIngredientsConnections::create($data);
//        dd($data);
        $record['ingredients'] = CAPizzaIngredients::pluck('name', 'id');



        return view('form',  $record->toArray());
    }


    public function showCreate()
    {
        $configuration=[];
        $configuration['cheese'] = CAPizzaCheese::pluck('name', 'id')->toArray();
        $configuration['pad']  = CAPizzaPad::pluck('name', 'id')->toArray();
        $configuration['ingredients']  = CAPizzaIngredients::pluck('name', 'id')->toArray();

//        dd($configuration);

        return view('form',  $configuration);
    }
	/**
	 * Store a newly created resource in storage.
	 * POST /capizzaingredientsconnections
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /capizzaingredientsconnections/{id}
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
	 * GET /capizzaingredientsconnections/{id}/edit
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
	 * PUT /capizzaingredientsconnections/{id}
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
	 * DELETE /capizzaingredientsconnections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}