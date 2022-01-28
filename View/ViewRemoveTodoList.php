<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";


function viewRemoveTodoList()
{
   echo "MENGHAPUS TODO" . PHP_EOL;

   $pilihan = input("Nomor (x untuk batal)");

   if ($pilihan == "x") {
      echo "Batal menghapus todo" . PHP_EOL;
   } else {
      $success = removeTodoList($pilihan);

      if ($success) {
         echo "Success mengapus todo nomor $pilihan" . PHP_EOL;
      } else {
         echo "Gagal mengapus todo nomor $pilihan" . PHP_EOL;
      }
   }
}
