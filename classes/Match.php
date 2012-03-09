<?php
class Match {
	var $weight;
	var $burned;
	var $headresource;
	function __construct() {
		$this->weight=0.1+rand(-3, 3)/100;
		$this->headresource=rand(0,5);
		$this->burned=FALSE;
	}
	/**
	 * 
	 * Burn match
	 * @param Int $t
	 * @return Float 
	 */
	function burn($t=10) {
		if ($this->burned) {return 0;}
		$fate=rand(0, 10);
		if ($fate<$t) {
			$t=$fate;
		}
		//TODO Stiranie golovki so snizheniem veroyatnosti podzhiganiya
		$delta_weight=$t*0.01;
		$energy=$t*0.1;
		$this->weight-=$delta_weight;
		$this->burned=TRUE;
		return $energy;
	}
	
	function break_match() {
	if ($this->burned) {return $this->weight;}
	if (rand(0, 9)>8)
	{
		$breaked=array();
		$breaked[0]=$this->weight/100*rand(10,90);
		$breaked[1]=$this->weight-$breaked[0];
		return $breaked;
	}

	}
	
}