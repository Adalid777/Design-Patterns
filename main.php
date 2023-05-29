
<?php include("singleton.php");?>
<?php include("nosingleton.php");?>
<?php 
$objSingleton1 = new singleton();
$objSingleton2 = new singleton();

echo "".$objSingleton1 ->getInstance();
echo "".$objSingleton2 ->getInstance();;
?>