<?php

namespace App\models;


class CAPizzaIngredientsConnections extends CoreModel
{
    protected $table = 'ca_pizza_ingredients_connections';

    protected $fillable = ['name', 'pizza_id', 'ingredients_id'];

}