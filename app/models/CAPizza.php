<?php

namespace App\models;

use App\models\CAPizzaIngredients;
use App\models\CAPizzaIngredientsConnections;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CAPizza
 * @package App\models: reikalinga ištraukti info:
 * apie užsakymą, picą, galėsim ištraukti ne tik id, bet ir detalesnę info.
 */
class CAPizza extends CoreModel
{
    protected $table = 'ca_pizza';

    protected $fillable = ['id', 'name', 'comment', 'cheese_id', 'pad_id'];

    //protected $hidden = ['ingredients_id', 'cheese_id', 'pad_id'];

    public function ingredientsInsert()
    {
        return $this->belongsToMany(CAPizzaIngredients::class, 'ca_pizza_ingredients_connections', 'pizza_id', 'ingredients_id');
    }

    public function ingredients()
    {
        return $this->hasMany(CAPizzaIngredientsConnections::class, 'pizza_id', 'id')->with('ingredients');
    }

    public function cheese()
    {
        return $this->hasOne(CAPizzaCheese::class, 'id', 'cheese_id');
    }

    public function pad()
    {
        return $this->hasOne(CAPizzaPad::class, 'id', 'pad_id');
    }

}

