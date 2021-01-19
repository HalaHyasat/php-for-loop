<?php

//Question number 1
echo "Q(1): ";
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 echo "$x-";
 else echo "$x"."<br>";
}

//Question number 2
$sum = 0;
for($i=1; $i<=30; $i++)
{
$sum += $x;
}
echo "Q(2): The sum of the numbers is: ".$sum."<br>";


//Question number 3
echo "Q(3): b) <br>";
for ($row3a=0; $row3a<5; $row3a++)
{
  for ($column3a=0; $column3a<=4; $column3a++)
	{
     if (($column3a == 0 && $row3a != 4) || ($row3a == 0) || ($column3a == 1 && $row3a == 1) || ($column3a == 2 && $row3a == 1) || ($column3a == 1 && $row3a == 2))
            echo "1 ";    
      elseif (($column3a == 3 && $row3a == 1) || ($column3a == 4 && $row3a == 1))
      echo "2 ";
      elseif (($column3a == 2 && $row3a == 2) || ($column3a == 3 && $row3a == 2) || ($column3a == 4 && $row3a == 2))
      echo "3 ";
elseif ( $row3a == 4)
echo "5 ";

      else 
      echo "4 ";
	}        
  echo "<br>";
}


echo "Q(3): c) <br>";
for ($row3a=0; $row3a<5; $row3a++)
{
  for ($column3a=0; $column3a<=4; $column3a++)
	{
     if (($column3a == 0 && $row3a != 4) || ($row3a == 0) || ($column3a == 1 && $row3a == 1) || ($column3a == 2 && $row3a == 1) || ($column3a == 1 && $row3a == 2))
            echo "A ";    
      elseif (($column3a == 3 && $row3a == 1) || ($column3a == 4 && $row3a == 1))
      echo "B ";
      elseif (($column3a == 2 && $row3a == 2) || ($column3a == 3 && $row3a == 2) || ($column3a == 4 && $row3a == 2))
      echo "C ";
elseif ( $row3a == 4)
echo "E ";

      else 
      echo "D ";
	}        
  echo "<br>";
}

//Question number 4
echo "Q(4): <br>";
$i =1;
for ($row3a=0; $row3a<5; $row3a++)
{
  for ($column3a=0; $column3a<=4; $column3a++)
	{
     if ($column3a ==  $row3a ){
            echo "$i "; 
            $i++;   }
      else 
      echo "0 ";
	}        
  echo "<br>";
}

//Question number 5
$d = 5;
$f = 1;
for($i=1;$i<=$d-1;$i++)
{
 $f*=($i+1); 
}
echo "Q(5): Factorial of  $d = $f"."<br>";

//Question number 6
// if && else if to generate first two numbers 
$n = 9;
$num1 = 0; 
$num2 = 1; 

$counter = 0; 
echo "Q(6): ";
while ($counter < $n){ 
    echo ' '.$num1; 
    $num3 = $num2 + $num1; 
    $num1 = $num2; 
    $num2 = $num3; 
    $counter = $counter + 1; 
} 
echo "<br>";

//Question number 7
$text="OrangeAcademy";
$search_char="c";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo "Q(7): ".$count."<br>";

//Question number 8
echo "Q(8): <table border =\"1\" style='border-collapse: collapse'>";
for ($row=1; $row <= 10; $row++) {
echo "<tr> \n";
for ($col=1; $col <= 10; $col++) {
$p = $col * $row;
echo "<td>$p</td> \n";
}
echo "</tr>";
}
echo "</table>"?>


<!-- //Question number 9 -->
<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
   <table width="270px" cellspacing="0px" cellpadding="0px" border="1px" style='display: block ; border : none'>
   <!-- cell 270px wide (8 columns x 60px) -->
      <?php

echo "Q(9): ";
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }

          ?>
  </table>
  </body>
  </html>

<?php 
    echo "Q(10): <br>";

?>
<!-- //Question number 10 -->
<!DOCTYPE html>
<html>
<body>
<table  align="left" border="1" cellpadding="3" cellspacing="0" >
<?php
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
?>
</table>
</body>
</html>


  <?php

 //Question number 11 
echo "<br> <br> <br> <br> <br> <br> <br> <br> <br> Q(11): <br>";
for ($FizzBuzz = 1; $FizzBuzz <= 100; $FizzBuzz++)
{
  if ( $FizzBuzz%3 == 0 && $FizzBuzz%5 == 0 )
   {
     echo $FizzBuzz . " FizzBuzz"."<br>" ;
   }
  else if ( $FizzBuzz%3 == 0 ) 
   {
     echo $FizzBuzz. " Fizz"."<br>";
   }
     else if ( $FizzBuzz%5 == 0 ) 
   {
     echo $FizzBuzz. " Buzz"."<br>";
   }
     else
   {
     echo $FizzBuzz." ";
   }
 }
 
//Question number 12
echo "Q(12): <br>";
$i = 1;
for($x=1;$x<=5;$x++)
{
for ($y=1;$y<=$x;$y++)
{
echo "$i";
if($y< $x)
$i++;
{
echo " ";
}
}
echo "<br>";
$i++;
}



//Question number 13
echo "Q(13): <br>";
for ($rowA = 0; $rowA <= 10; $rowA++) {
    for ($columnB = 0; $columnB <= 10; $columnB++) {
        if ((($columnB == 1 || $columnB == 10) && $rowA != 0) || (($rowA == 0 || $rowA == 5) && ($columnB > 1 && $columnB < 10))) {
            echo "*";
        } else {
            echo "&nbsp; ";  
        }
    }
    echo "<br>"; 
}
echo "<br>"; 


//Question number 14
echo "Q(14): <br>";
for ($rowB = 0; $rowB < 11; $rowB++) {
    for ($columnB = 0; $columnB <= 11; $columnB++) {
        if ($columnB == 1 || (($rowB == 0 || $rowB == 5 || $rowB == 10) && ($columnB < 10 && $columnB > 1)) || ($columnB == 10 && ($rowB != 0 && $rowB != 5 && $rowB != 10))) {
            echo "*";
        } else {
            echo "&nbsp; ";
        }
    }
    echo "<br>";
}

//Question number 15
echo "Q(15): <br>";
for ($rowC=0; $rowC<7; $rowC++)
{
  for ($columnC=0; $columnC<=7; $columnC++)
	{
     if (($columnC == 1 && ($rowC != 0 && $rowC != 6)) || (($rowC == 0 || $rowC == 6) && ($columnC > 1 && $columnC < 5)) || ($columnC == 5 && ($rowC == 1 || $rowC == 5)))
            echo "*";    
        else  
            echo "&nbsp; ";     
	}        
  echo "<br>";
}

echo "Q(16): <br>";
for ($row=0; $row<=8; $row++)
{
  for ($column=0; $column<=8; $column++)
	{
     if (($column == 0 && $row == 4) || ($column == 1 && $row == 3) || ($column == 1 && $row == 5) || ($column == 2 && $row == 2)  || ($column == 2 && $row == 6)  || ($column == 3 && $row == 1)  || ($column == 3 && $row == 7)  || ($column == 4 && $row == 0)  || ($column == 4 && $row == 8))
            echo "A"; 
            elseif (($column == 2 && $row == 4) || ($column == 3 && $row == 3) || ($column == 3 && $row == 5) || ($column == 4 && $row == 2)  || ($column == 4 && $row == 6)  || ($column == 5 && $row == 1)  || ($column == 5 && $row == 7))
            echo "B"; 
            elseif (($column == 4 && $row == 4) || ($column == 5 && $row == 3) || ($column == 5 && $row == 5) || ($column == 6 && $row == 2)  || ($column == 6 && $row == 6))
            echo "C"; 
            elseif (($column == 6 && $row == 4) || ($column == 7 && $row == 3) || ($column == 7 && $row == 5))
            echo "D"; 
            elseif ($column == 8 && $row == 4)
            echo "E"; 
        else  
            echo "&nbsp; ";     
	}        
  echo "<br>";
}

?>