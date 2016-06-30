<!-- Stephanie Imperial,
  in web browser enter localhost/as7/indexnew.php
  compute.php  function.php  index.php  indexnew.php  rectangle.php -->
<?php

class Rectangle {
	private $length;
	private $width;
	 
	public function __construct ($len,$wid){
		$this->length=$len;
		$this->width=$wid;
	}
	public function getLength(){
		return $this->length;
	}
	public function getWidth(){
		return $this-> width;	 
	}
	public function findArea (){
		$area=$this->length * $this->width;
		return $area;
	}
	public function findPerim(){
		$perim=2 * ($this->length * $this->width);
		return $perim;	 
	}
	public function findDiag(){
		$diag= sqrt(
				($this->length * $this->length) +
		        ($this->width * $this-> width)
               );    
		    return $diag;
	}	 
}
?>

