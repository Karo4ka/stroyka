<?php

abstract class User {

    public $fullname;

    public $accessRights;

    abstract public function getFullname();

    abstract public function getAccessRights();

}
class TeamLead extends  User {
    public $accessRights;
    public  $name;
    public  $surname;
    public function __construct($name,$surname,$accessRights){
       $this ->name=$name;
       $this->surame=$surname;
       $this->accessRights=$accessRights;
    }
    }

    function getFullname(){
        return  $this->name.''.$this->surname;
    }
    function getAccessRights(){
        return  $this->accessRights;
    }
    function make_order(){
        return $this->orderBlank;
    }
    function workPlan(){
         return this->
//	Stockman
interface FullName
{
    public function getFullName();
}

interface FullNameAccess extends FullName
{
    public function getAccessRights();
}


abstract class User
{
    public $fullName, $accessRights;
}

class Supplier extends User implements FullNameAccess
{
    protected $order;

    public function getFullName()
    {
        return $this->fullName . "\n";
    }

    public function getAccessRights()
    {
        $access = ["director" => "all", "supplier" => "only orders", "worker" => "without access"];
        foreach ($access as $key => $value) {
            echo $access[ "supplier" ];
        }
    }

    function do_order($order)
    {
        $this->order = $order; //with Vlasta?
    }
}

Class Director extends User
{

    function __construct($name, array $accessRights)
    {
        $this->fullName     = $name;
        $this->accessRights = $accessRights;
    }

    public function getFullName()
    {
        return $this->fullName;
    }

    public function getAccessRights()
    {
        return $this->accessRights;
    }

    public function setFullName($name)
    {
        if (gettype($name) === 'string') {
            $this->fullName = $name;
        }
    }

    public function setAccessRights(array $rights)
    {
        $this->accessRights = $rights;
    }
}

$director = new Director('Like A Boss', ['director']);
$supplier = new Supplier();
$supplier->fullName = 'Nikita';
$supplier->accessRights = 'supplier';

$persons[] = $director;
$persons[] = $supplier;

foreach ($persons as $person)
{
    echo $person->getFullName().PHP_EOL;
}


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

Mechanizm  Maxim

