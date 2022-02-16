<?php
class Warrior{
    //Attributs
    public $name = 'Conan'; //default value
    public function my_name(){
        echo $this->var;
    }
}
<?php
include('warrior.php');
$warrior1 = new Warrior();
$warrior1->my_name();
<?php
class Warrior{
    //Attributs
    public $name = 'THANOS'; //default value
    private $level = 1;
    private $age = 10000000000;
    private $force = 680 ;
    public function my_name(){
        echo $this->var;
    }
}
<?php
include('warrior.php');
$warrior1 = new Warrior();
$warrior1->my_name();
echo $warrior->name;
echo $warrior->level;
echo $warrior->age;
echo $warrior->force;
<?php
class Warrior{
    //Attributs
    public $name = 'THANOS'; //default value
    private $level = 1;
    private $age = 1000000000;
    private $force = 680;
    public function get_hp(){
        return $this->hp;
    }
    public function set_hp($hp){
        $this->hp = $hp;
    }
    public function my_name(){
        echo $this->var;
    }
}
<?php
class Warrior{
    //Attributs
    public $name = 'THANOS'; //default value
    private $level = 1;
    private $age = 10000000000;
    private $force = 680;
    function __construct($name, $hp, $att, $def){
       //TODO: complete behavior
    } 
}
