<?php namespace App\Http\Controllers;


use App\models\CAPizza;
use App\models\CAPizzaCheese;
use App\models\CAPizzaIngredients;
use App\models\CAPizzaPad;
use Illuminate\Routing\Controller;

class CAPizzaController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /capizza
     *
     * @return Response
     */
    public function index()
    {
        return CAPizza::with('ingredients')->get();
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
        $configuration['calories'] = CAPizzaIngredients::pluck('calories', 'id')->toArray();
        $configuration['padCalories'] = CAPizzaPad::pluck('calories', 'id')->toArray();
        $configuration['cheeseCalories'] = CAPizzaCheese::pluck('calories', 'id')->toArray();
        $configuration['pad'] = CAPizzaPad::pluck('name', 'id')->toArray();
        $configuration['ingredients'] = CAPizzaIngredients::pluck('ingredients', 'id')->toArray();

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
        $data = request()->all();

        $record = CAPizza::create([
            'name' => $data['name'],
            'cheese_id' => $data['cheese'][0],
            'pad_id' => $data['pad'][0],
            'comment' => $data['comment']
        ]);

        $record->ingredientsInsert()->sync($data['ingredients']);

        $configuration = [];
        $configuration['cheese'] = CAPizzaCheese::pluck('name', 'id')->toArray();
        $configuration['calories'] = CAPizzaIngredients::pluck('calories', 'id')->toArray();
        $configuration['padCalories'] = CAPizzaPad::pluck('calories', 'id')->toArray();
        $configuration['cheeseCalories'] = CAPizzaCheese::pluck('calories', 'id')->toArray();
        $configuration['pad'] = CAPizzaPad::pluck('name', 'id')->toArray();
        $configuration['ingredients'] = CAPizzaIngredients::pluck('ingredients', 'id')->toArray();
        $configuration['record'] = $record;
        //     dd($configuration);

        return view('form', $configuration);
    }

    /**
     * Display the specified resource.
     * GET /capizza/{id}
     *
     * @param  int $id
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
     * @param  int $id
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
     * @param  int $id
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
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}