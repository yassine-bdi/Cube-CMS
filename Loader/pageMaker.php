<?php 

class pageMaker 
{
    private $name; 
    private $description; 
    private $type; 
    public function __construct(String $name, String $description, String $type) 
    {
        $this->name = $name; 
        $this->description = $description; 
        $this->type = $type; 
    } 
    public function getName() 
    {
        echo $this->name; 
    }
    public function getDescription() 
    {
        echo $this->description; 
    }
    public function getImage() 
    {
        if ($this->type == 'animals') {
            $image = "../Images/animal.jpg"; 
            echo $image; 
        }
        elseif($this->type == 'cars') {
            $image= "../Images/car.jpg"; 
            echo $image; 
        }
        elseif($this->type == 'sport') {
           $image = "../Images/sports.jpeg"; 
           echo $image; 
        }
        else {
            echo "No background"; 
        }
    }
}