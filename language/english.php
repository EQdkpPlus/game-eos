<?php
/*	Project:	EQdkp-Plus
 *	Package:	Forsaken World game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array =  array(
 'classes' => array (
		0 => 'Unknown',
		1 => 'Rogue',
		2 => 'Warrior',
		3 => 'Guardian',
		4 => 'Archer',
		5 => 'Sorceress'
	),
	'skills'=> array(
		0 	=> 'Unknown', 		
		1 	=> 'Duelist',
		2 	=> 'Assasin',
		3 	=> 'Protector',
		4 	=> 'Berserker',
		5 	=> 'Stormguard',
		6 	=> 'Earthguard',
		7 	=> 'Huntress',
		8 	=> 'Bard',
		9 	=> 'Firemage',
		10 	=> 'Frostmage',
	),

	'races' => array(
		0	=> 'Human',
	),
	'roles' => array(
		1	=> 'Tank',
		2	=> 'Damage',
		3	=> 'Support',
		4	=> 'PVP',
	),
	'professions' => array(
		'0'					=> 'Unkown',
		'juwel'				=> 'Jewelcrafting',
		'collect'			=> 'Collector',
		'alchem'			=> 'Alchemy',
	),
	'professions2' => array(
		'0'					=> 'Unknown',
		'cook'				=> 'Cooking',
		'spirit'			=> 'Soul Expert',
	),
	'lang' => array(
		'eos'				=> 'Echo of Soul',
		'uc_prof1_name'		=> 'Mainprofession',
		'uc_prof_value'		=> 'Value',
		'uc_prof2_name'		=> 'Secondprofession',
		'uc_class'			=> 'Class',
		'uc_skill'			=> 'Skill',
		'uc_level'			=> 'Level',
		'dryadenwald'		=> 'Dryad Forest',
		'hc_dryadenwald'	=> 'Dryad Forest(Hard)',
		'tr_dryadenwald'	=> 'Dryad Forest(Training)',

	),
);

?>