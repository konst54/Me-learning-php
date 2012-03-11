<?php
class Human
{ 
var $civil;
var $lucky;
var $xp;
var $pocket;


function beborn($civ=true, $luck=3, $x=0)
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
		pocket[$counter]= 'add(new MatchBox());''
		$counter++;
	} 
}

function ignite() {

}


}