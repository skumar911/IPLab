<?php
//################## CALCULATOR BEGINS #################
if(isset($_POST['sub']))
{
  	$txt1=$_POST['n1'];
  	$txt2=$_POST['n2'];
  	$oprnd=$_POST['sub'];

  	if($oprnd=="+")
  	$res=$txt1+$txt2;
  	else if($oprnd=="-")
  		$res=$txt1-$txt2;
  		else if($oprnd=="x")
  		$res=$txt1*$txt2;
  		else if($oprnd=="/")
  			$res=$txt1/$txt2;
}
//################## CALCULATOR ENDS ####################

//################## POS,NEG,ZERO BEGINS ################
$pos=0;
$neg=0;
$zer=0;
foreach ($_POST['nos'] as $value) {

  if($value > 0)
    $pos++;
  elseif ($value < 0)
    $neg++;
  elseif ($value == 0)
    $zer++;
}
//################## POS,NEG,ZERO ENDS ##################



?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
        <style>
            #calc{
              border-style: solid;
              width:200px;
              height:220px;
              margin-left: 80px;
              display: inline-flex;
              flex-direction: column;
              text-align: center;
            }
            #count{
              border-style: solid;
              width:475px;
              height:220px;
              margin-left: 10px;
              display: inline-flex;
              flex-direction: column;
              text-align: center;
            }
            #evenodd{
              border-style: solid;
              width:200px;
              height:220px;
              margin-left: 10px;
              display: inline-flex;
              flex-direction: column;
              text-align: center;
            }
            #fibo{
              border-style: solid;
              width:300px;
              height:auto;
              margin-left: 10px;
              display: inline-flex;
              flex-direction: column;
              text-align: center;
            }
            #maxno{
              border-style: solid;
              width:200px;
              height:180px;
              margin-left: 80px;
              display: inline-flex;
              flex-direction: column;
              margin-top: 10px;
              text-align: center;
            }
            #sumOfDigits{
              border-style: solid;
              width:200px;
              height:180px;
              margin-left: 10px;
              display: inline-flex;
              flex-direction: column;
              margin-top: 10px;
              text-align: center;
            }
            #swap{
              border-style: solid;
              width:200px;
              height:180px;
              margin-left: 10px;
              display: inline-flex;
              flex-direction: column;
              margin-top: 10px;
              text-align: center;
            }
        </style>
    </head>
    <body>
      <div id="container">
          <div id="calc">
              <h2>Calculator</h2>
              <form method="post" action="">      <br>
              Value 1  <input name="n1" value="<?php echo $txt1; ?>"> <br>
              Value 2  <input name="n2" value="<?php echo $txt2; ?>"> <br><br>
              <input type="submit" name="sub" value="+">
              <input type="submit" name="sub" value="-">
              <input type="submit" name="sub" value="x">
              <input type="submit" name="sub" value="/"> <br><br>
              Result <input name="res" value="<?php echo $res; ?>">
              </form>
          </div>

          <div id="count">
              <h2>Enter 3 Numbers</h2>
              <form method="post" action="">
              <input type="number" name="nos[]" placeholder="Value 1">
              <input type="number" name="nos[]" placeholder="Value 2">
              <input type="number" name="nos[]" placeholder="Value 3">
              <input type="submit" value="submit">
              </form>
              Entered array: <?php foreach ($_POST['nos'] as $value) {
                print $value;
                print(' ');
              }?>
              <?php print "<br><br>Positive:" . $pos . "<br>Negative:" . $neg . "<br>Zeros:" . $zer; ?>
          </div>

          <div id="evenodd">
            <h2>Even Odd Check</h2>
            <form method="post" action="">
            <input type="number" name="num" placeholder="Enter a Number">
            <input type="submit" value="submit">
            <br><br><br><br>
          <?php
          //################## EVEN ODD BEGINS ####################
          $n=$_POST['num'];
          if($n == 0)
            echo "<b>Zero</b>";
          else if ($n%2==0)
            echo "Entered number is <b>Even</b>";
          else
            echo "Entered number is <b>Odd</b>";
          //################## EVEN ODD ENDS ######################
          ?>
          </div>

          <div id="fibo">
            <h2>Fibonacci series</h2>
            <h3>Enter the limit:</h3>
            <form method="post">
              <input type="number" name="limit"/>
              <button name="fibosubmit" type="submit">Print Fibonacci Series</button>
            </form>
            <br />
            <?php
            //################## FIBONACCI BEGINS ###################
            	if(isset($_POST['fibosubmit'])){

            	  $limit = 0;
            	  if(isset($_POST['limit'])){
            		$limit = $_POST['limit'];
            	  }
                  $first_num = 0;
            	  $second_num = 1;
            	  $next_num = 0;
                  if($limit > 0){
                    print "<br>" . $first_num . " ";
                  }else{
                    print "Value should be greater than 0";
                  }
                  if($limit > 1){
                    print $second_num . " ";
                  }
                  while($limit > 2)
                    {
                       $next_num   = $first_num + $second_num;
                       $first_num  = $second_num;
                       $second_num = $next_num;
                       print $next_num . " ";
                       $limit--;
                    }
            	}
            //################## FIBONACCI ENDS #####################
              ?>
          </div>

          <div id="maxno">
            <h2>Max of 3 Nos</h2>
            <!-- ################# MAX OF 3 NOS BEGINS ################# -->
            <?php
            $a = 1;
            $b = 4;
            $c = 3;
            echo "A = " . $a . "<br>";
            echo "B = " . $b . "<br>";
            echo "C = " . $c . "<br>";
            if($a > $b)
            {
              if($a > $c)
              echo "<b>Maximum Num A = $a</b>";
              else
              echo "<b>Maximum Num C = $c</b>";
            }
            else
            {
              if($c > $b)
              echo "<b>Maximum Num C = $c</b>";
              else
              echo "<b>Maximum Num B = $b</b>";
            }
            ?>
            <!-- ################# MAX OF 3 NOS ENDS ################# -->
          </div>

          <div id="sumOfDigits">
              <h2>Sum of Digits</h2>
              <form method="post" action="">
              <input type="number" name="no" placeholder="Enter a Number">
              <input type="submit" value="submit">
              <!-- ############## SUM OF DIGITS BEGINS ############### -->
              <?php
              $num_sum=$_POST['no'];
              $sum=0;
              while($num_sum>0)
              {
                $r=$num_sum%10;
                $sum=$sum+$r;
                $num_sum=$num_sum/10;
              }
              echo "<br><br>Sum of the digits is = $sum" ;
              ?>
              <!-- ############### SUM OF DIGITS ENDS ################ -->
          </div>

          <div id="swap">
              <h2>Swap 2 Numbers</h2>
              <?php
              $a = 10;
              $b = 20;
              echo "Before Swapping<br>a = $a"."<br>"."b = $b"."<br>";
              $a = $a + $b;
              $b = $a - $b;
              $a = $a - $b;
              echo "<b>After Swapping"."<br>"." a = $a"."<br>"."b = $b<b>";
              ?>
          </div>
        </div>
    </body>
    </html>
