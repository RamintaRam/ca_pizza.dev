<?php

namespace App\models;


class CAPizzaIngredientsConnections extends CoreModel
{
    protected $table = 'ca_pizza_ingredients_connections';

    protected $fillable = ['id', 'name', 'pad_id', 'cheese_id', 'ingredients_id'];

}