<?php

class calc{

    // Method 

    public function add($n1 , $n2){
        echo ($n1 + $n2) ;
    }

    public function sub($n1 , $n2){
        echo ($n1 - $n2) ;
    }

    public function mul($n1 , $n2){
        echo ($n1 * $n2) ;
    }

    public function div($n1 , $n2){
        echo ($n1 / $n2) ;
    }
}

// object 

$calcutor = new calc();

 $num1 = $_POST['num1'];
 $num2 = $_POST['num2'];
 $oper = $_POST['operator'];

if($oper === '+'){
     $calcutor->add($num1 , $num2);
 }elseif($oper  === '-'){
     $calcutor->sub($num1 , $num2);
 }elseif($oper  === '/'){
     $calcutor->div($num1 , $num2);
 }elseif($oper  === '*'){
     $calcutor->mul($num1 , $num2);
 }else{
     echo 'No';
 }

 echo "<br><a href='index.php'>Back</a>";