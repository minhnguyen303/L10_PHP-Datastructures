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
        $maleDancer = $this->queueMale->bottom();
        $femaleDancer = $this->queueFemale->bottom();

        if ($maleDancer != null && $femaleDancer != null){

            return [$this->queueMale->bottom(), $this->queueFemale->bottom()];
        }
    }
}