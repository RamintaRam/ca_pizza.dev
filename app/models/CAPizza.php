<?php

namespace App\models;

use App\models\CAPizzaIngredients;
use App\models\CAPizzaIngredientsConnections;
use Illuminate\Database\Eloquent\Model;

class CAPizza extends CoreModel
{
    protected $table = 'ca_pizza';

    protected $fillable = ['id', 'name', 'comment', 'cheese_id', 'pad_id'];


    public function ingredientsInsert()
    {
        return $this->belongsToMany(CAPizzaIngredients::class, 'ca_pizza_ingredients_connections', 'pizza_id', 'ingredients_id');
    }

    public function ingredients()
    {
        return $this->hasMany(CAPizzaIngredientsConnections::class, 'pizza_id', 'id');
    }


}