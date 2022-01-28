<?php

class Person
{
   var ?string $name = null;
   var string $address = "Tidak diketahui";
   var string $country;


   function sayHello(string $name)
   {
      echo "Hello $name" . PHP_EOL;
   }
}
