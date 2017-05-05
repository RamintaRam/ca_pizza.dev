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
        $config = [];
        $config['list'] = CAPizza::with(['ingredients', 'cheese', 'pad'])->get()->toArray();

        foreach ($config['list'] as &$pizza) {
            $pizza['calories'] = 0;
            $pizza['calories'] += $pizza['cheese']['calories'];
            $pizza['calories'] += $pizza['pad']['calories'];

            foreach ($pizza['ingredients'] as $ingredient) {
                $pizza['calories'] += $ingredient['ingredients']['calories'];
            }
        }

        return view('orders', $config);
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
     * @return mixed
     */
    public function store()
    {
        $data = request()->all();
        $configuration = [];
        $configuration['cheese'] = CAPizzaCheese::pluck('name', 'id')->toArray();
        $configuration['calories'] = CAPizzaIngredients::pluck('calories', 'id')->toArray();
        $configuration['padCalories'] = CAPizzaPad::pluck('calories', 'id')->toArray();
        $configuration['cheeseCalories'] = CAPizzaCheese::pluck('calories', 'id')->toArray();
        $configuration['pad'] = CAPizzaPad::pluck('name', 'id')->toArray();
        $configuration['ingredients'] = CAPizzaIngredients::pluck('ingredients', 'id')->toArray();

        if (sizeof($data['ingredients']) > 3)
        {
            $configuration['error'] = ['message' => 'Negali būti daugiau negu 3 ingredientai'];

            return view('form', $configuration);
        }

        if (sizeof($data['pad']) > 1)
        {
            $configuration['error'] = ['message' => 'More than 1'];

            return view('form', $configuration);
        }




        $record = CAPizza::create([
            'name' => $data['name'],
            'cheese_id' => $data['cheese'][0],
            'pad_id' => $data['pad'][0],
            'comment' => $data['comment']
        ]);

        $record->ingredientsInsert()->sync($data['ingredients']);



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
        $config = [];
        $config['singlePizza'] = CAPizza::with(['ingredients', 'cheese', 'pad'])->find($id);
        $config['route'] = route('app.pizza.update', $id);

        return view('singlePizza', $config);


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
        $configuration = [];
        $configuration['cheese'] = CAPizzaCheese::pluck('name', 'id')->toArray();
        $configuration['calories'] = CAPizzaIngredients::pluck('calories', 'id')->toArray();
        $configuration['padCalories'] = CAPizzaPad::pluck('calories', 'id')->toArray();
        $configuration['cheeseCalories'] = CAPizzaCheese::pluck('calories', 'id')->toArray();
        $configuration['pad'] = CAPizzaPad::pluck('name', 'id')->toArray();
        $configuration['ingredients'] = CAPizzaIngredients::pluck('ingredients', 'id')->toArray();

        $configuration['singlePizza'] = CAPizza::with(['ingredients', 'cheese', 'pad'])->find($id);

        $configuration['pizzaIngredients'] = $configuration['singlePizza']->ingredients->pluck('ingredients_id')->toArray();

        $configuration['singlePizza'] = $configuration['singlePizza']->toArray();

        return view('editPizza', $configuration);

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
        $data = request()->all();
        $record = CAPizza::find($id);
        $record -> update([
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

        $configuration['singlePizza'] = $record;//CAPizza::with(['ingredients', 'cheese', 'pad'])->find($id);

        return view('orders', $configuration);
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