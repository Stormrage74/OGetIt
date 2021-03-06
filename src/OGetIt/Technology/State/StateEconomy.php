<?php
/*
 * OGetIt, a open source PHP library for handling the new OGame API as of version 6.
 * Copyright (C) 2015  Klaas Van Parys
 * 
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 */
namespace OGetIt\Technology\State;

use OGetIt\Technology\Technology;
use OGetIt\Common\Resources;
use OGetIt\Common\Value;
use OGetIt\Technology\TechnologyEconomy;

class StateEconomy extends State {
	
	/**
	 * @var integer
	 */
	private $level;
	
	/**
	 * @param TechnologyCombat $technology
	 * @param integer $level
	 */
	public function __construct(TechnologyEconomy $technology, $level) {
		
		parent::__construct($technology);
		
		$this->level = $level;
		
	}
	
	/**
	 * @return integer
	 */
	public function getLevel() {
		
		return $this->level;
		
	}
	
	/**
	 * @return Resources
	 */
	public function getValue() {
				
		return $this->getTechnology()->getCosts($this->level);
		
	}
	
	/* (non-PHPdoc)
	 * @see JsonSerializable::jsonSerialize()
	 */
	public function jsonSerialize() {
		return array_merge(array(
			'level' => $this->level
		), parent::jsonSerialize());
	}
	
}