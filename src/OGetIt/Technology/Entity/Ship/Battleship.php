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
namespace OGetIt\Technology\Entity\Ship; 

use OGetIt\Technology\TechnologyCombatFlyable;

class Battleship extends TechnologyCombatFlyable {

	const TYPE = 207;
	
	const METAL = 45000, CRYSTAL = 15000, DEUTERIUM = 0;
	
	const ARMOR = 60000, SHIELD = 200, WEAPON = 1000;
	
	const SPEED = 10000, CARGO_CAPACITY = 1500, FUEL_USAGE = 500;
	
	public static $RAPIDFIRE_FROM = array(
			Battlecruiser::TYPE => 7,
			Deathstar::TYPE => 30
	);
		
	public static $RAPIDFIRE_AGAINST = array(
			EspionageProbe::TYPE => 5,
			SolarSatellite::TYPE => 5
	);
	
	public function __construct() {
		
		parent::__construct(self::TYPE, self::METAL, self::CRYSTAL, self::DEUTERIUM, self::ARMOR, self::SHIELD, self::WEAPON, self::SPEED, self::CARGO_CAPACITY, self::FUEL_USAGE);
		
	}
	
}