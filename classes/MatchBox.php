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
		
		while (add(new Match())){}
		
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