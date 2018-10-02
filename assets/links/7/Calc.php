<?php
$ch=0;
$i=0;
$j=0;
do
{
printf("\nPlease enter your choice\n");
printf("1:Multiply\n");
printf("2:Divide\n");
printf("3:Add\n");
printf("4:Substract\n");
printf("5.exit");

$ch=fgets(STDIN);

switch($ch)
{
case 1:
printf("Please enter two nos\n");
$i=fgets(STDIN);
$j=fgets(STDIN);
echo "Result is";
echo ($i*$j); break;

case 2:
printf("Please enter two nos\n");
$i=fgets(STDIN);
$j=fgets(STDIN);
echo "Result is";
echo ($i/$j); break;

case 3:
printf("Please enter two nos\n");
$i=fgets(STDIN);
$j=fgets(STDIN);
echo "Result is"; echo ($i+$j); break;

case 4:
printf("Please enter two nos\n");
$i=fgets(STDIN);
$j=fgets(STDIN);
echo "Result is"; echo ($i-$j); break;

case 5:
printf("Exiting\n");
break;

default:
echo ("Invalid Choice");

}
}while($ch!=5);

?>
