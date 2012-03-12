<?php
class Human
{ 
var $civil;
var $lucky;
var $xp;
var $pocket;
var $stamina;


function beborn($civ=true, $luck=3, $x=0, $stamina=5)
{
	$this->civil=civ;
	$this->lucky=luck;
	$this->xp=x;
	
}

function fillpocket($matchboxes=3)
{
	$this->pocket=array();
	$counter=0;
	while ($matchboxes>counter) {
		$this->pocket[counter]=add(new MatchBox());
		$counter++;
	} 
}

function ignite() {
$this->stamina-=0.1;

}


}