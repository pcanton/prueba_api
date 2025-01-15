<?php

declare(strict_types=1);

class SuperHero
{
    public function __construct(private $name, public  string $powers, public string $planet) {}

    public function attack()
    {
        return "$this->name ataca con sus poderes!";
    }

    public function description()
    {

        return "$this->name es un superheroe que viene de $this->planet y tiene los siguientes poderes: $this->powers";
    }

    public static function random()
    {
        $names = [
            "Superman",
            "Batman",
            "Wonder Woman",
            "Spider-Man",
            "Iron Man",
            "Captain America",
            "Thor",
            "Black Panther"
        ];

        $powers = [
            "Vuelo",
            "Superfuerza",
            "Velocidad sobrehumana",
            "Sentido arácnido",
            "Tecnología avanzada",
            "Indestructibilidad",
            "Control del trueno",
            "Agilidad y reflejos sobrehumanos"
        ];

        $planet = [
            "Krypton",
            "Gotham City",
            "Themyscira",
            "Nueva York",
            "Stark Tower",
            "Brooklyn",
            "Asgard",
            "Wakanda"
        ];

        $name = $names[array_rand($names)];
        $planet = $planet[array_rand($planet)];
        $powers = $powers[array_rand($powers)];

        return new self($name, $powers, $planet);
    }
}

$hero = SuperHero::random();
echo $hero->description();
