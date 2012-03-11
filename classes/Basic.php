<?php

class Basic {
	
function add($thing){
	if (is_array($thing) and (is_a(array_rand($thing), Match))) {
		foreach ($thing as $t) {
			$this->add($t);
			$this->add($t);
		}
		return;
	}
	
	if (is_array($thing) and (is_a(array_rand($thing), MatchBox))) {
	
	}
	
	if (!is_a($thing, 'Match')) {
		return FALSE;
	}
	$cw=$this->current_weight();

	$max=$this->Weight_Max;
	$nw=$cw+$thing->weight;
	if ( $max>$nw ) {
		array_push($this->matches, $thing);
		return TRUE;
	}
	return FALSE;
}
}