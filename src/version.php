<?php
// This file is part of a plugin written to be used on the free teaching platform : Moodle
// Copyright (C) 2019 recit
// 
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
// 
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
// 
// You should have received a copy of the GNU General Public License
// along with this program.  If not, see <https://www.gnu.org/licenses/>.
//
// @package    theme_recit_anglais
// @subpackage RECIT
// @copyright  RECIT {@link https://recitfad.ca}
// @author     RECIT {@link https://recitfad.ca}
// @license    {@link http://www.gnu.org/licenses/gpl-3.0.html} GNU GPL v3 or later
// @developer  Studio XP : {@link https://www.studioxp.ca}
 
// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();                                                                                                
 
// This is the version of the plugin.                                                                                               

$plugin->version = 2022100100;

// This is the named version.
$plugin->release = 'v2.0.1-stable';  

$plugin->supported = [39, 311];      //  Moodle 3.9.x, 3.10.x and 3.11.x are supported.

// This is a stable release.
$plugin->maturity = MATURITY_STABLE;
 
// This is the version of Moodle this plugin requires.                                                                              
$plugin->requires = 2020061500.00; // Moodle 3.9.0

// This is the component name of the plugin - it always starts with 'theme_'                                                        
// for themes and should be the same as the name of the folder.                                                                     
$plugin->component = 'theme_recit_anglais';

// This is a list of plugins, this plugin depends on (and their versions).                                                          
$plugin->dependencies = [                                                
    'theme_recit2' => 2022100100              
];