<?php

class Car
{
public $model;
public $color;

    /**
     * @param $model
     * @param $color
     */
    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    public function message(){
        return "My car name " .$this->model." and the color is ". $this->color. "!";
    }

}