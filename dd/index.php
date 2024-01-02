<?php

require "vendor/autoload.php";

class Animal {
    protected $extremities = [];
    protected $color;

    function __construct($color)
    {
        $this->color = $color;

        for ($i = 0; $i < 4; $i++)
            $this->extremities[$i] = new Extremity();
    }
}

class Extremity
{
    protected $nails = 4;
    protected $description = "Son botitas blancas";

    public function getDescription() : string
    {
        return $this->description;
    }
}

$houses_cat = array(
    "name" => "Oreo",
    "location" => [
        "country" => "Argentina",
        "city" => "Ciudad de Corrientes"
    ],
    "amount" => 3,
    "cats" => [
        new Animal("Black"),
        new Animal("Orange"),
        new Animal("White")
    ]
);

dd($houses_cat);