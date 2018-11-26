<?php

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

