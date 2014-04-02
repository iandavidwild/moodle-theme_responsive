<?php
// This file is part of Moodle - http://moodle.org/
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
 * This is built using the Clean template to allow for new theme's using
 * Moodle's new Bootstrap theme engine
 *
 *
 * @package   theme_essential
 * @copyright 2013 Julian Ridden
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

global $CFG;

require_once($CFG->dirroot.'/theme/essential/lib.php'); 

function theme_ucl_page_init(moodle_page $page) {
    $page->requires->jquery();
    $page->requires->jquery_plugin('cslider', 'theme_essential');
    $page->requires->jquery_plugin('custom', 'theme_essential'); 
    $page->requires->jquery_plugin('alert', 'theme_essential');
    $page->requires->jquery_plugin('carousel', 'theme_essential');
    $page->requires->jquery_plugin('collapse', 'theme_essential');
    $page->requires->jquery_plugin('modal', 'theme_essential');
    $page->requires->jquery_plugin('scrollspy', 'theme_essential');
    $page->requires->jquery_plugin('tab', 'theme_essential');
    $page->requires->jquery_plugin('tooltip', 'theme_essential');
    $page->requires->jquery_plugin('transition', 'theme_essential');
    $page->requires->jquery_plugin('modernizr', 'theme_essential');  
}