<?php

// Different data types
$stringVar   = "Hello World";
$intVar      = 10;
$floatVar    = 10.5;
$boolVar     = true;
$arrayVar    = array("Apple", "Banana", "Mango");
$nullVar     = NULL;

class MyClass {}
$objectVar   = new MyClass();

$fileVar     = fopen("test.txt", "w"); // Resource

echo "<h3>Type Checking Results:</h3>";

// String
echo "String Check: ";
var_dump(is_string($stringVar));
echo "<br>";

// Integer
echo "Integer Check: ";
var_dump(is_int($intVar));
echo "<br>";

// Float
echo "Float Check: ";
var_dump(is_float($floatVar));
echo "<br>";

// Boolean
echo "Boolean Check: ";
var_dump(is_bool($boolVar));
echo "<br>";

// Array
echo "Array Check: ";
var_dump(is_array($arrayVar));
echo "<br>";

// Null
echo "Null Check: ";
var_dump(is_null($nullVar));
echo "<br>";

// Object
echo "Object Check: ";
var_dump(is_object($objectVar));
echo "<br>";

// Resource
echo "Resource Check: ";
var_dump(is_resource($fileVar));
echo "<br>";

// General Type
echo "<br><h3>Using gettype()</h3>";
echo "Type of stringVar: " . gettype($stringVar) . "<br>";
echo "Type of intVar: " . gettype($intVar) . "<br>";
echo "Type of floatVar: " . gettype($floatVar) . "<br>";
echo "Type of boolVar: " . gettype($boolVar) . "<br>";
echo "Type of arrayVar: " . gettype($arrayVar) . "<br>";
echo "Type of nullVar: " . gettype($nullVar) . "<br>";
echo "Type of objectVar: " . gettype($objectVar) . "<br>";
echo "Type of fileVar: " . gettype($fileVar) . "<br>";

// Close resource
fclose($fileVar);

?>