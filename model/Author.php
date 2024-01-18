<?php 
namespace Model;

class Author
{
    public $name;

    public $age ;

    public $id ;

    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
      
    }
    
}
