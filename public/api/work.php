<?php

echo '<pre>'
$foo = "bar\n";
$bar = 'bit\n';

echo $foo;
echo $bar;

echo $one = 'ONE';

echo "The value is {$one}.\n";
echo "The value is" . $one;

class Animal
{
  public $name = 'Pig';
}

$wilber = new Animal();
echo $wilber->name;

$myARR = [

  'first' =>'Tom',
  'last' => 'Gregory'
];

$people = [

  0 =>'Tom',
  1 => 'Phil',
  2 =>'Midge'
];

print_r($people);
var_dump($myArr);

/*
$n = 0;

if (isset($_GET['id'])){
  $n = $_GET['id']
}

//This means the same thing:
  $n = isset($_GET['id']) ? $_GET['id'] : 0;

// Same thing in JS:
  n = foo || default
*/

//This also means the same thing:
  $n = $_GET['id'] ?? 0;

echo '$n = ' . $n . "\n";
