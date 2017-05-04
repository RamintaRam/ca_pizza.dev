<?php

namespace App\models;


class CAPizzaIngredientsConnections extends CoreModel
{
    protected $table = 'ca_pizza_ingredients_connections';

    protected $fillable = ['name', 'pizza_id', 'ingredients_id'];

    public function ingredients()
    {
        return $this->hasOne(CAPizzaIngredients::class, 'id', 'ingredients_id');
    }

    public function pizza()
    {
        return $this->hasMany(CAPizza::class, 'id', 'pizza_id');
    }
}