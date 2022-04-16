<?php

class Home
{
    public $color;
    public $window;
    public $address;

    public function __construct($color, $window, $address){

        $this ->color = $color;
        $this -> window = $window;
        $this -> address = $address;
}

public function message(){
        return "My House is in ".$this->address. " and the colour of my house is ".$this->color.". My house got ".$this->window;
}

}