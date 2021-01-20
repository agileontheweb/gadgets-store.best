<?php
function remainingPieces(){
  date_default_timezone_set('Europe/Rome');
  $current_time = date("h:i a");
  $date1 = DateTime::createFromFormat('h:i a', $current_time);

  $_01_am = DateTime::createFromFormat('h:i a', "01:00 am");
  $_02_am = DateTime::createFromFormat('h:i a', "02:00 am");
  $_03_am = DateTime::createFromFormat('h:i a', "03:00 am");
  $_04_am = DateTime::createFromFormat('h:i a', "04:00 am");
  $_05_am = DateTime::createFromFormat('h:i a', "05:00 am");
  $_06_am = DateTime::createFromFormat('h:i a', "06:00 am");
  $_07_am = DateTime::createFromFormat('h:i a', "07:00 am");
  $_08_am = DateTime::createFromFormat('h:i a', "08:00 am");
  $_09_am = DateTime::createFromFormat('h:i a', "09:00 am");
  $_10_am = DateTime::createFromFormat('h:i a', "10:00 am");
  $_11_am = DateTime::createFromFormat('h:i a', "11:00 am");
  $_12_am = DateTime::createFromFormat('h:i a', "12:00 am");

  $_01_pm = DateTime::createFromFormat('h:i a', "01:00 pm");
  $_02_pm = DateTime::createFromFormat('h:i a', "02:00 pm");
  $_03_pm = DateTime::createFromFormat('h:i a', "03:00 pm");
  $_04_pm = DateTime::createFromFormat('h:i a', "04:00 pm");
  $_05_pm = DateTime::createFromFormat('h:i a', "05:00 pm");
  $_06_pm = DateTime::createFromFormat('h:i a', "06:00 pm");
  $_07_pm = DateTime::createFromFormat('h:i a', "07:00 pm");
  $_08_pm = DateTime::createFromFormat('h:i a', "08:00 pm");
  $_09_pm = DateTime::createFromFormat('h:i a', "09:00 pm");
  $_10_pm = DateTime::createFromFormat('h:i a', "10:00 pm");
  $_11_pm = DateTime::createFromFormat('h:i a', "11:00 pm");
  $_12_pm = DateTime::createFromFormat('h:i a', "12:00 pm");

  if ($date1 >= $_12_am && $date1 <= $_01_am){
   echo(rand(60,55));
  }elseif ($date1 >= $_01_am && $date1 <= $_02_am){
   echo(rand(60,55));
  }elseif ($date1 >= $_02_am && $date1 <= $_03_am){
   echo(rand(55,60));
 }elseif ($date1 >= $_03_am && $date1 <= $_04_am){
   echo(rand(55,60));
 }elseif ($date1 >= $_04_am && $date1 <= $_05_am){
   echo(rand(55,60));
 }elseif ($date1 >= $_05_am && $date1 <= $_06_am){
   echo(rand(55,60));
 }elseif ($date1 >= $_07_am && $date1 <= $_08_am){
   echo(rand(55,60));
 }elseif ($date1 >= $_09_am && $date1 <= $_10_am){
   echo(rand(55,60));
 }elseif ($date1 >= $_10_am && $date1 <= $_11_am){
   echo(rand(55,60));
 }elseif ($date1 >= $_11_am && $date1 <= $_12_am){
   echo(rand(55,60));
 }elseif ($date1 >= $_12_am && $date1 <= $_01_pm){
   echo(rand(50,55));
 }elseif ($date1 >= $_01_pm && $date1 <= $_02_pm){
   echo(rand(50,55));
 }elseif ($date1 >= $_02_pm && $date1 <= $_03_pm){
   echo(rand(45,50));
 }elseif ($date1 >= $_03_pm && $date1 <= $_04_pm){
   echo(rand(40,45));
 }elseif ($date1 >= $_04_pm && $date1 <= $_05_pm){
   echo(rand(35,40));
 }elseif ($date1 >= $_05_pm && $date1 <= $_06_pm){
   echo(rand(30,35));
  }elseif ($date1 >= $_06_pm && $date1 <= $_07_pm){
   echo(rand(25,30));
  }elseif ($date1 >= $_07_pm && $date1 <= $_08_pm){
    echo(rand(20,25));
  }elseif ($date1 >= $_08_pm && $date1 <= $_09_pm){
   echo(rand(16,19));
  }elseif ($date1 >= $_09_pm && $date1 <= $_10_pm){
   echo(rand(15,20));
  }elseif ($date1 >= $_10_pm && $date1 <= $_11_pm){
   echo(rand(05,10));
  }elseif ($date1 >= $_11_pm && $date1 <= $_12_pm){
    echo(rand(05, 10));
  }else{
   echo(rand(05,10));
  }
}
?>
