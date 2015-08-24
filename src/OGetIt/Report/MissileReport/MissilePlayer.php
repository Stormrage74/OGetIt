<?php
/*
 * Copyright © 2015 Klaas Van Parys
 *
 * This file is part of OGetIt.
 *
 * OGetIt is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OGetIt is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with OGetIt.  If not, see <http://www.gnu.org/licenses/>.
 */
namespace OGetIt\Report\MissileReport;

use OGetIt\Report\Report;
use OGetIt\Report\ReportPlayer;
use OGetIt\Technology\State\StateCombatWithLosses;
use OGetIt\Common\Value\ChildValueAndLosses;
use OGetIt\Common\Resources;

class MissilePlayer extends ReportPlayer {

	use ChildValueAndLosses;
	
	/**
	 * @var StateCombatWithLosses[]
	 */
	private $_defence = array();
	
	/**
	 * @param StateCombatWithLosses $entityState
	 */
	public function addLostDefence(StateCombatWithLosses $entityState) {
	
		$this->_defence[$entityState->getTechnology()->getType()] = $entityState;
	
	}
	
	/**
	 * @return StateCombatWithLosses[]
	 */
	public function getLostDefence() {
	
		return $this->_defence;
	
	}
	
	/**
	 * @return Resources
	 */
	public function getValue() {
		
		return $this->getChildrenValue($this->_defence);
		
	}
	
	/**
	 * @return Resources
	 */
	public function getLosses() {
		
		return $this->getChildrenLosses($this->_defence);
		
	}
	
}