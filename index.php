<?php 
// include the class has a class
require_once('calc.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
     // object 
    $calcutor = new calc();

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $oper = $_POST['operator'];
    $result = '';

    if($oper === '+'){
       $result = $calcutor->add($num1 , $num2);
    }elseif($oper  === '-'){
        $result = $calcutor->sub($num1 , $num2);
    }elseif($oper  === '/'){
        $result =  $calcutor->div($num1 , $num2);
    }elseif($oper  === '*'){
        $result =  $calcutor->mul($num1 , $num2);
    }else{
        echo 'No';
    }

    }
    
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Calculator</title>
    <style>
     .container{
         width: 600px;
         margin: 100px auto;
         background-color: #DDD;
         padding: 10px 10px 20px 
     }
     h3{
         font-weight: bold;
         font-size: 30px;
         margin: 20px 0;
         text-align: center
     }
     input{
         width: 40%;
         padding: 10px
     }
     select{
         width: 10%;
         padding: 10px
     }
     button{
       width: 70px;
       display: block;
       margin: 40px auto;
       font-weight: bold;
       font-size: 20px;
       background-color:#00bcd4; 
       color: #FFF;
       cursor: pointer;
       border: none
       
     }
     .result{
         font-weight: bold;
         margin: 30px auto;
         background-color: #FFF;
         padding: 10px
     }
    </style>
  </head>
  <body>
      <div class="container">
        <h3>Calculator</h3>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

          <input type="numteber" name="num1" placeholder="Type a Number">
          <select name="operator" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
          </select>

          <input type="number" name="num2" placeholder="Type a Number">
          <button type="submit">=</button>
        </form>
        <div class="result"><?php if(isset($result)){echo 'The last result is : ' . $result ;} ?></div>
      </div>
  </body>
</html>