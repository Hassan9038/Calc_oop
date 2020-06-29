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
    </style>
  </head>
  <body>
      <div class="container">
        <h3>Calculator</h3>
        <form action="calc.php" method="post">
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
      </div>
  </body>
</html>