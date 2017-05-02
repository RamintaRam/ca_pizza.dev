<?php

namespace App\models;



class CAPizzaIngredients extends CoreModel
{
    protected $table = 'ca_pizza_ingredients';

    protected $fillable = ['id', 'name'];

}
