<?php
/*	Project:	EQdkp-Plus
 *	Package:	Dummy game package
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

if(!class_exists('akd')) {
	class akd extends game_generic {#
		protected static $apiLevel	= 20;
		public $version				= '0.0.1';
		protected $this_game		= 'akd';
		public $author				= "Anykan";
		protected $types			= array('classes', 'secondclass', 'races', 'roles', 'eidolons','eidolons2','eidolons3',);						// which information are stored?
		protected $classes			= array();
		protected $roles			= array();						// for each type there must be the according var
		protected $factions			= array();						// and the according function: load_$type
		protected $filters			= array();
		protected $realmlist		= array();
		protected $professions		= array();
		public $langs				= array('english', 'german');	// in which languages do we have information?

		protected $class_dependencies = array(
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin' 	=> false,
				'decorate'	=> false,
				'parent'	=> false,
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> false,
				),
			array(
				'name'		=> 'class2',
				'type'		=> 'secondclass',
				'admin'		=> false,
				'decorate'	=> false,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> array(
						'class' => array(
						0 	=> array(0),
						1 	=> array(2,3,4,5,6,7,8,9,10,11,12,13),
						2 	=> array(1,3,4,5,6,7,8,9,10,11,12,13),
						3 	=> array(1,2,4,5,6,7,8,9,10,11,12,13),
						4 	=> array(1,2,3,5,6,7,8,9,10,11,12,13),
						5 	=> array(1,2,3,4,6,7,8,9,10,11,12,13),
						6 	=> array(1,2,3,4,5,7,8,9,10,11,12,13),
						7 	=> array(1,2,3,4,5,6,8,9,10,11,12,13),
						8 	=> array(1,2,3,4,5,6,7,9,10,11,12,13),
						9	=> array(1,2,3,4,5,6,7,8,10,11,12,13),
						10	=> array(1,2,3,4,5,6,7,8,9,11,12,13),
						11	=> array(1,2,3,4,5,6,7,8,9,10,12,13),
						12	=> array(1,2,3,4,5,6,7,8,9,10,11,13),
						13	=> array(1,2,3,4,5,6,7,8,9,10,11,12),
					),
				),
			),
			array(
				'name'		=> 'eidolon',
				'type'		=> 'eidolons',
				'admin' 	=> false,
				'decorate'	=> false,
				'parent'	=> false,
				'roster'	=> false,
				'recruitment' => true,
			),
			array(
				'name'		=> 'eidolon2',
				'type'		=> 'eidolons2',
				'admin' 	=> false,
				'decorate'	=> false,
				'parent'	=> false,
				'roster'	=> false,
				'recruitment' => true,
			),
			array(
				'name'		=> 'eidolon3',
				'type'		=> 'eidolons3',
				'admin' 	=> false,
				'decorate'	=> false,
				'parent'	=> false,
				'roster'	=> false,
				'recruitment' => true,
			),
		);

		public $default_roles = array( 
			1 => array(1),
			2 => array(11),
			3 => array(6, 7, 8, 9, 10, 12),
			4 => array(2, 3, 4, 5, 13)
		);
		protected $class_colors = array(
			1	=> '#6ce31c',
			2	=> '#38a450',
			3	=> '#af6b1d',
			4	=> '#ebed5c',
			5	=> '#308fa1',
			6	=> '#284fb8',
			7	=> '#c72d35',
			8	=> '#896ccb',
			9	=> '#6ce31c',
			10	=> '#38a450',
			11	=> '#af6b1d',
			12	=> '#ebed5c',
			13	=> '#ebed5c',
		);
		protected $glang			= array();
		protected $lang_file		= array();
		protected $path				= '';
		public $lang				= false;

		public function __construct() {
			parent::__construct();
		}

		public function install($install=false){
			//config-values
			$info['config'] = array();
			return $info;
		}
		
		public function load_filters($langs){
			return array();
		}

		public function profilefields(){
			$fields = array(
				'level'	=> array(
					'type'			=> 'spinner',
					'category'		=> 'character',
					'lang'			=> 'uc_level',
					'max'			=> 55,
					'min'			=> 1,
					'undeletable'	=> true,
					'sort'			=> 1,
				),
			);
			return $fields;
		}

		public function admin_settings() {
			// array with admin fields
		}

	}#class
}
?>