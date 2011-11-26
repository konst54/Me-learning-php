<?php
class MatchBox
{
	/**
	 *
	 * Matches in the box quantity
	 * @var Array of Match
	 */
	var $matches;
	var $Weight_Max;
	/**
	 *
	 * Filling the MatchBox
	 */
	function __construct($empty=FALSE,$max=4){
		$this->Weight_Max=$max;
		$this->matches=array();
		if ($empty) return;
		
		while ($this->add(new Match())){}
		
	}
/**
 * 
 * Enter description here ...
 * @param Match $thing
 */
	function add($thing){
		if (!is_a($thing, 'Match')) {
			return FALSE;
		}
	/*	if (is_array($this->$thing)) {
			add($this->$thing[0]);
			add($this->$thing[1]);
		}
		*/
		$cw=$this->current_weight();
		$max=$this->Weight_Max;
		$nw=$cw+$thing->weight;
		if ( $max>$nw ) {
			array_push($this->matches, $thing);
			return TRUE;
		}
		return FALSE;
	}

	function current_weight(){
		$count=0;
		foreach ($this->matches as $match){
			$count+=$match->weight;
		}
		return $count;
	}
	
	/**
	 * 
	 * Get random match out of box
	 * @return Match
	 */
	function get() {
		$match_num=array_rand($this->matches);
		$match=$this->matches[$match_num];
		unset($this->matches[$match_num]);
		return $match;
	}
	
	
}