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
$german_array =  array(

  'classes' => array (
		0 => 'Unbekannt',
		1 => 'Schurke',
		2 => 'Krieger',
		3 => 'Hüterin',
		4 => 'Waldläuferin',
		5 => 'Magierin'
	),
	'skills'=> array(
		0 	=> 'Unbekannt', 		
		1 	=> 'Duellant',
		2 	=> 'Assasine',
		3 	=> 'Beschützer',
		4 	=> 'Berserker',
		5 	=> 'Sturmruferin',
		6 	=> 'Erdruferin',
		7 	=> 'Schütze',
		8 	=> 'Barde',
		9 	=> 'Pyromantin',
		10 	=> 'Kryomantin',
	),

	'races' => array(
		0	=> 'Mensch',
	),
	'roles' => array(
		1	=> 'Tank',
		2	=> 'Damage',
		3	=> 'Support',
		4	=> 'PVP',
	),
	'professions' => array(
		'0'					=> 'Unbekannt',
		'juwel'				=> 'Juwelier',
		'collect'			=> 'Sammeln',
		'alchem'			=> 'Alchemie',
	),
	'professions2' => array(
		'0'					=> 'Unbekannt',
		'cook'				=> 'Kochen',
		'spirit'			=> 'Spiritist',
	),
	'lang' => array(
		'eos'				=> 'Echo of Soul',
		'uc_prof1_name'		=> 'Hauptberuf',
		'uc_prof_value'		=> 'Stufe',
		'uc_prof2_name'		=> 'Nebenberuf',
		'uc_class'			=> 'Klasse',
		'uc_skill'			=> 'Skill',
		'uc_level'			=> 'Stufe',
		'dryadenwald'		=> 'Dryadenwald',
		'hc_dryadenwald'	=> 'Dryadenwald(Schwer)',
		'tr_dryadenwald'	=> 'Dryadenwald(Training)',

	),
);

?>