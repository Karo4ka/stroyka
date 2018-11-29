<?php

abstract class User
{

    public $fullName;

    public $accessRights;

    abstract public function getAccessRights();
}


class TeamLead extends User
{
    public $accessRights;
    public  $name;
    public  $surname;
    public function __construct($name,$surname,$accessRights){
       $this ->name=$name;
       $this->surame=$surname;
       $this->accessRights=$accessRights;
    }

    public function getAccessRights(){
        $access = ["director" => "all","teamlead"=>"only orders", "supplier" => "only orders", "worker" => "without access"];
        foreach ($access as $key => $value) {
            echo $access[ "teamlead" ];
        }
    }
}
    public function __construct($name, $surname, $accessRights)
    {
        $this->name         = $name;
        $this->surName      = $surname;
        $this->accessRights = $accessRights;
    }

    public function getFullName()
    {
        return $this->name . '' . $this->surName;
    }

    function list_of_workers($list_of_workers){
     $this->$list_of_workers;
    }
    function workPlan($workPlan){
        $this->$workPlan;
        }

    public function getAccessRights()
    {
        return $this->accessRights;
    }
}

//	Stockman
//interface FullName
//{
//    public function getFullName();
//}
//
//interface FullNameAccess extends FullName
//{
//    public function getAccessRights();
//}


class Supplier extends User
{
    protected $order;
    public $name,$surname,$age,$address;
    function __construct($name, $surname,$age,$address)
    {
        $this->fullName = $name;
        $this->fullSurname=$surname;
        $this->age = $age;
        $this->address=$address;
    }

    public function getAccessRights()
    {
        $access = ["director" => "all","teamlead"=>"only orders", "supplier" => "only orders", "worker" => "without access"];
        foreach ($access as $key => $value) {
            echo $access[ "supplier" ];
        }
    }
    protected $age = 10;
    function __construct($name, $accessRights = User::WORKER)
    {
        $this->fullName     = $name;
        $this->accessRights = $accessRights;
    }

    public $fullName, $accessRights;

    public function __toString()
    {
        return $this->fullName . PHP_EOL;
    }

    public function getFullname()
    {
        // TODO: Implement getFullname() method.
    }
}

    public function __call($name, $arguments)
    {
        $vars    = get_object_vars($this);
        $varName = lcfirst(substr($name, 3));
        if ((substr($name, 0, 3) === 'get') && (array_key_exists($varName, $vars))) {
            return $this->$varName . PHP_EOL;
        }
    }

    public function getFullName()
    {
        // TODO Дописать метод getFullName, потому что он абстрактный
    }

    public function getAccessRights()
    {
        // TODO Дописать метод getFullName, потому что он абстрактный
    }
}

Class Director extends User
{
    /*
     * __CALL
     */
    public function __call($name, $arguments)
    {
        // Замечание: значение $name регистрозависимо.
        echo "Вызов метода '$name' " . implode(', ', $arguments) . "\n";
        $this->fullName = $arguments[ 0 ];
    }
    /*
     * GET
     */
    public function getFullName()
    {
        // TODO Дописать метод getFullName, потому что он абстрактный
    }

    public function getAccessRights()
    {
        // TODO Дописать метод getFullName, потому что он абстрактный
    }
}

$supplier = new Supplier('Nikita', 'supplier');

print $supplier->getAge();

$persons[] = $supplier;

/*
foreach ($persons as $person) {
    echo $person->fullName;
}
*/


/*
	Director Sergey

	Stockman Nikolay

	Supplier Karina

	TeamLead Vlasta

	Worker (types) Pasha

	Driver Nikolay

Order Alexandr

Orderline Vlad

Transaction Sasha

Transactionline Haritonoff





Object Max

Storage Max

Subject: Maxim

Type Dmitry

Instrument Denis

Material Gleb

*/

