<?php
class product {
    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    function showInfo(){
        echo "Название: $this->name<br>Цена: \$$this->price<br>";

    }
}

class digitalProduct extends product{
    public function __construct($name, $price, $type){
        parent::__construct($name, $price);
        $this->type = $type;

    }

    function showInfo(){
        echo "Название: $this->name<br>Цена: \$$this->price<br>Тип: $this->type<br>";

    }
}

class good extends product{
    public function __construct($name, $price, $ship){
        parent::__construct($name, $price);
        $this->ship = $ship;
    }

    function showInfo(){
        echo "Название: $this->name<br>Цена: \$$this->price<br>Осуществялется доставка в следующий регион: $this->ship<br>";

    }
}

$starWarsGame = new digitalProduct('Star Wars', 10, 'Game key');
$bag = new good('Рюкзак', 20, 'Россия');
$starWarsGame->showInfo();
$bag->showInfo();