<!-- Stephanie Imperial,
  in web browser enter localhost/as7/indexnew.php
  compute.php  function.php  index.php  indexnew.php  rectangle.php -->
  
<?php
function displayAll($rec1, $rec2, $rec3){
	print "Length:" . $rec1->getLength() . "<br />";
	print "Width:" . $rec1->getWidth() . "<br />";
	print "Area: " . $rec1->findArea() . "<br />";
	print "Perim: " . $rec1->findPerim() . "<br />";
	print "Diag:" . $rec1->findDiag() . "<br>";
	print "<br>";
	
	print "Length:" . $rec2->getLength() . "<br />";
	print "Width:" . $rec2->getWidth() . "<br />";
	print "Area: " . $rec2->findArea() . "<br />";
	print "Perim: " .$rec2->findPerim() . "<br />";
	print "Diag:" . $rec2->findDiag() . "<br>";
	print "<br>";
	
	print "Length:" . $rec3->getLength() . "<br />";
	print "Width:" . $rec3->getWidth() . "<br />";
	print "Area: " . $rec3->findArea() . "<br />";
	print "Perim: " . $rec3->findPerim() . "<br />";
	print "Diag:" . $rec3->findDiag() . "<br>";
	print "<br>";
	
}
				
?>