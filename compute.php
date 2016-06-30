<!-- Stephanie Imperial,
  in web browser enter localhost/as7/indexnew.php
  compute.php  function.php  index.php  indexnew.php  rectangle.php -->
  
<?php 
include_once 'Rectangle.php';
include_once 'Function.php';
$length1=$_GET['length1'];
$width1=$_GET['width1'];
$length2=$_GET['length2'];
$width2=$_GET['width2'];
$length3=$_GET['length3'];
$width3=$_GET['width3'];
$rec1=new Rectangle($length1, $width1);
$rec2=new Rectangle($length2, $width2);
$rec3=new Rectangle($length3, $width3);

displayAll($rec1, $rec2, $rec3);

?>

