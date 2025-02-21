<form method="post">
    Enter a string Number:<input type="text" name="t1"><br><br>
    Enter a Ending Number:<input type="text" name="t2"><br><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
function primenumber($MyNum)
{
$n=0;
if($MyNum==2||$MyNum==3)
{
echo $MyNum." ";
}
elseif($MyNum%6==1||$MyNum%6==5)
{
for($i=2;$i*$i<=$MyNum;$i++)
{
if($MyNum%$i==0)
{
$n++;
break;
}
}
if($n==0)
{
echo $MyNum."";
}
}
}
$x=$_POST['t1'];
$y=$_POST['t2'];
echo "prime numbers between ".$x." and ".$y." are:<br>";
for($i=$x;$i<$y+1;$i++)
{
primenumber($i);
}
?>