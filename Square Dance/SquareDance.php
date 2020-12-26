<?php
include_once 'Dancer.php';

class SquareDance
{
    public $queueMale;
    public $queueFemale;

    public function __construct()
    {
        $this->queueMale = new SplQueue();
        $this->queueFemale = new SplQueue();
    }

    public function addDancer($dancer)
    {
        $gender = $dancer->gender;

        if ($gender == "Male")
            $this->queueMale->push($dancer);
        else
            $this->queueFemale->push($dancer);
    }

    public function letDance()
    {
        $queueMaleIsEmpty = $this->queueMale->isEmpty();
        $queueFemaleIsEmpty = $this->queueFemale->isEmpty();
        $alert = '';

        //echo $queueMaleIsEmpty . ' ' . $queueFemaleIsEmpty;

        if ($queueMaleIsEmpty && $queueFemaleIsEmpty){
            $alert = "Thiếu bạn nhảy, chờ thêm người để ghép đôi!";
        } else {
            $alert = $this->queueMale->dequeue()->name . " | ". $this->queueFemale->dequeue()->name;
        }
        echo $alert;
    }
}