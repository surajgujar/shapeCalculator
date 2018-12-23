<?php
class Ellipse 
{
	private $a_axis;
	private $b_axis;
	private $pi;

	function __construct()
	{
		$this->pi = acos(-1);
		$this->a_axis;
		$this->b_axis;
	}

	function getArea() 
	{ 
		return ( $this->pi * $this->a_axis * $this->b_axis );
	}

	function setAAxis($r) 
	{
		$this->a_axis = $r;
	}

	function setBAxis($r) 
	{
		$this->b_axis = $r;
	}
}