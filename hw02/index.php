<?php
abstract class product {
    function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    abstract public function getValue($amount);
    abstract public function getInfo();
}

class digitalProduct extends product{
    function __construct($name, $price, $type){
        parent::__construct($name, $price);
        $this->type = $type;

    }

    function getValue($amount){
        $totalPrice = $this->price * $amount;
        echo "Цена за {$amount}шт: \${$totalPrice}<br>";
    }

    function getInfo(){
        echo "Название: $this->name<br>Цена: \$$this->price<br>Тип: $this->type<br>";

    }
}

class good extends product{
    function __construct($name, $price, $shipRegion){
        parent::__construct($name, $price);
        $this->shipRegion = $shipRegion;
    }

    function getValue($amount){
        $totalPrice = $this->price * $amount;
        echo "Цена за {$amount}шт: \${$totalPrice}<br>";
    }

    function getInfo(){
        echo "Название: $this->name<br>Цена: \$$this->price<br>Осуществялется доставка в следующий регион: $this->shipRegion<br>";

    }
}

class goodByWeight extends product{
    function __construct($name, $price, $category){
        parent::__construct($name, $price);
        $this->category = $category;
    }

    function getValue($amount){
        $totalPrice = $this->price * $amount;
        echo "Цена за {$amount}кг: \${$totalPrice}<br>";
    }

    function getInfo(){
        echo "Название: $this->name<br>Цена (за кг): \$$this->price<br>Категория: $this->category<br>";

    }
}

$eBook = new digitalProduct('Гарри Поттер', 10, 'pdf');
$book = new good('Гарри Поттер', 20, 'Россия');
$orange = new goodByWeight('Мандарин', 2, 'Фрукты');
$eBook->getInfo();
$book->getInfo();
$orange->getInfo();

$eBook->getValue(2);
$book->getValue(5);
$orange->getValue(7);
