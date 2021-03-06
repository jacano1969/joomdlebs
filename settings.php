<?php
// This file is part of the JoomdleBS theme for Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's Joomdle bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * Settings file for JoomdleBS theme
 *
 * @package   Joomdlebs theme
 * @copyright 2013 Fernando Acedo, http://3-bits.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    


//Body background
    $name = 'theme_joomdlebs/bodybgcolor';
    $title = get_string('bodybgcolor','theme_joomdlebs');
    $description = get_string('bodybgcolordesc', 'theme_joomdlebs');
    $default = '#fdfdfd';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

//Link color
    $name = 'theme_joomdlebs/linkcolor';
    $title = get_string('linkcolor','theme_joomdlebs');
    $description = get_string('linkcolordesc', 'theme_joomdlebs');
    $default = '#0066cc';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

//Link Hover color
    $name = 'theme_joomdlebs/linkhovercolor';
    $title = get_string('linkhovercolor','theme_joomdlebs');
    $description = get_string('linkhovercolordesc', 'theme_joomdlebs');
    $default = '#00cccc';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    
//Menu background color
    $name = 'theme_joomdlebs/menubgcolor';
    $title = get_string('menubgcolor','theme_joomdlebs');
    $description = get_string('menubgcolordesc', 'theme_joomdlebs');
    $default = '#0066cc';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    
    
// Custom CSS   
	$name = 'theme_joomdlebs/customcss';
	$title = get_string('customcss','theme_joomdlebs');
	$description = get_string('customcssdesc', 'theme_joomdlebs');
	$default = '';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$settings->add($setting);

    


}

