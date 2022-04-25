<?php

class School
{
    private $StudentName;
    private$totalClass;
    private $classNo;

    /**
     * @param $StudentName
     * @param $totalClass
     * @param $classNo
     */
    public function __construct($StudentName, $totalClass, $classNo)
    {
        $this->StudentName = $StudentName;
        $this->totalClass = $totalClass;
        $this->classNo = $classNo;
    }

    /**
     * @return mixed
     */
    public function getStudentName()
    {
        return $this->StudentName;
    }

    /**
     * @return mixed
     */
    public function getTotalClass()
    {
        return $this->totalClass;
    }

    /**
     * @return mixed
     */
    public function getClassNo()
    {
        return $this->classNo;
    }
    


}