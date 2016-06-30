<!-- Stephanie Imperial,
  in web browser enter localhost/as7/indexnew.php
  compute.php  function.php  index.php  indexnew.php  rectangle.php -->
<?php
print<<<HERE
<form action='Compute.php'>
		Rectangle 1:
		    Length:<input type='text' name='length1' size='6'>
		    Width: <input type='text' name='width1' size='6'>
		    <br>
		Rectangle 2:
		    Length:<input type='text' name='length2' size='6'>
		    Width: <input type='text' name='width2' size='6'>
		    <br>
		Rectangle 3:
		    Length:<input type='text' name='length3' size='6'>
		    Width: <input type='text' name='width3' size='6'>
		   <br>
		<input type='checkbox' name='op[]' value='LargestArea'>
		    Largest Area
		<input type='checkbox' name='op[]' value='LargestPerim'>
		    Largest Perim
		<input type='checkbox' name='op[]' value='LargestArea>
		    Largest Area
		<input type='checkbox' name='op[]' value='LargestDiag'>
		    Largest Diag
		<input type='checkbox' name='op[]' value='DisplayAll'>
		    Display All
		<br>
		<input type= 'Submit' name='Submit' value='compute'>
</form>
HERE;

?> 
