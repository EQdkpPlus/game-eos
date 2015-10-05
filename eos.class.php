<?php
/*	Project:	EQdkp-Plus
 *	Package:	Skyforge game package
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

if(!class_exists('eos')) {
	class eos extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '0.1.0';
		protected $this_game		= 'eos';
		public $author				= "Anykan";
		protected $types			= array('classes','roles', 'skills');
		protected $classes			= array();
		protected $races			= array();
		public $langs				= array('german','english');

		protected $class_dependencies = array(
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
				'name'		=> 'skill',
				'type'		=> 'skills',
				'admin'		=> false,
				'decorate'	=> false,
				'recruitment' => true,
				'roster'	=> true,
				'parent'	=> array(
					'class' => array(
						0 	=> array(0),
						1 	=> array(1,2),
						2 	=> array(3,4),
						3 	=> array(5,6),
						4 	=> array(7,8),
						5 	=> array(9,10),
					),
				),
			),
			
		);
		
		public $default_roles = array(
			1	=> array(2,3),			#Tank
			2	=> array(1,2,3,4,5), 	#Damage
			3	=> array(4),			#Support
			4	=> array (1,2,3,4,5),	#PVP
		);
		
		protected $class_colors = array(
			0	=> '#ff7fff',
			1	=> '#05e6fa',
			2	=> '#7d7d7d',
			3	=> '#741bd4',
			4	=> '#fc9b00',
			5	=> '#f7ff00',
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= false;
		public $lang			= false;
		
		protected function load_filters($langs){
		}
		public function install($blnEQdkpInstall=false){

			$arrEventIDs = array();
			$arrEventIDs[] = $this->game->addEvent($this->glang('dryadenwald'), 0, "2.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('hc_dryadenwald'), 0, "3.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tr_dryadenwald'), 0, "1.png");
		}
		public function decorate_classes($class_id, $profile=array(), $size=16, $pathonly=false) {
			$big = ($size > 40) ? '_b' : '';
			if(is_file($this->root_path.'games/'.$this->this_game.'/icons/classes/'.$class_id.$big.'.png')){
				$icon_path = $this->server_path.'games/'.$this->this_game.'/icons/classes/'.$class_id.$big.'.png';
				return ($pathonly) ? $icon_path : '<img src="'.$icon_path.'" height="'.$size.'" alt="class '.$class_id.'" class="'.$this->this_game.'_classicon classicon'.'" title="'.$this->game->get_name('classes', $class_id).'" />';
			}
		return false;
		}

		public function profilefields(){
			$this->load_type('professions', array($this->lang));
			$this->load_type('professions2', array($this->lang));
			$fields = array(
				'level'	=> array(
					'type'			=> 'spinner',
					'category'		=> 'character',
					'lang'			=> 'uc_level',
					'max'			=> 60,
					'min'			=> 1,
					'undeletable'	=> true,
					'sort'			=> 1,
				),
				'prof1_name'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'profession',
					'lang'			=> 'uc_prof1_name',
					'options'		=> $this->professions[$this->lang],
					'undeletable'	=> true,
					'image'			=> "games/eos/profiles/professions/{VALUE}.png",
					'options_lang'	=> "professions",
					'sort'			=> 2,
				),
				'prof1_value'	=> array(
					'type'			=> 'int',
					'category'		=> 'profession',
					'lang'			=> 'uc_prof_value',
					'size'			=> 4,
					'undeletable'	=> true,
					'sort'			=> 3,
				),
				'prof2_name'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'profession',
					'lang'			=> 'uc_prof2_name',
					'options'		=> $this->professions2[$this->lang],
					'undeletable'	=> true,
					'image'			=> "games/eos/profiles/professions/{VALUE}.png",
					'options_lang'	=> "professions2",
					'sort'			=> 4,
				),
				'prof2_value'	=> array(
					'type'			=> 'int',
					'category'		=> 'profession',
					'lang'			=> 'uc_prof_value',
					'size'			=> 4,
					'undeletable'	=> true,
					'sort'			=> 5,
				),
				'prof3_name'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'profession',
					'lang'			=> 'uc_prof2_name',
					'options'		=> $this->professions2[$this->lang],
					'undeletable'	=> true,
					'image'			=> "games/eos/profiles/professions/{VALUE}.png",
					'options_lang'	=> "professions2",
					'sort'			=> 5,
				),
				'prof3_value'	=> array(
					'type'			=> 'int',
					'category'		=> 'profession',
					'lang'			=> 'uc_prof_value',
					'size'			=> 4,
					'undeletable'	=> true,
					'sort'			=> 6,
				),
			);
			return $fields;
		}
	}
}
?>