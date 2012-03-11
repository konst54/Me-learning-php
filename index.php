<?php
include 'classes/Match.php';
include 'classes/MatchBox.php';
include 'classes/Room.php';
include 'classes/Human.php';
include 'classes/Basic.php';
//TODO Класс исполнитель (поджигатель), xp points, культурность
//TODO  Класс комната (температура поднимается от сжигания спичек)
$place=new Environment();
$firestarter=new Human();  
$box=new MatchBox();
$emptybox=new MatchBox(TRUE);
$energy=10;
for ($i = 0; $i < 20; $i++) {
	$match=$box->get();
	$energy-=0.1;
	$de=$match->burn(7);
	$energy+=$de;
	//$box->add($match);
	echo "<div>Energy: $energy $de</div>";
	//echo "<pre>".print_r($box,1)."<pre>";
}
