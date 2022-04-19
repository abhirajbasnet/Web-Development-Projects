<?php

class Person
{
public $firstName;
public $lastName;
public $age;
public $height;
public $weight;
public $educated;

public function __construct($firstName, $lastName,$age,$height,$weight,$educated){

    $this -> firstName = $firstName;
    $this -> lastName = $lastName;
    $this -> age = $age;
    $this -> height = $height;
    $this -> weight = $weight;
    $this -> educated = $educated;
}

public function name(){
    echo 'Name of the person is '.($this -> firstName . " ". $this -> lastName);
}

public function educated(){
    if ($this->educated){
        echo "Person is educated";
    }else{
        echo "Person doesn't have any education background";
    }
}

public function personAge(){
    if ($this->age >0 && $this -> age <13){
        echo $this ->age." years old is infant age.";
    }else if ($this->age>13 && $this->age <19){
        echo $this->age.' years is adolescent age.';
    }else if ($this->age > 20 && $this->age < 100){
        echo $this->age. ' matured enough to make own decision';
    }

}

}