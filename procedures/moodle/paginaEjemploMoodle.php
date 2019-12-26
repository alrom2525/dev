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
* Displays some overview statistics for the site
*
* @package     report_overviewstats
* @copyright   2013 
* @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
*/
// https://docs.moodle.org/dev/lib/formslib.php_Usage
// Documentation at https://docs.moodle.org/dev/Page_API
// https://fr.slideshare.net/samhemelryk/moodle-output-library
// https://docs.moodle.org/dev/Output_API

require(__DIR__.'/../../config.php');
require_once($CFG->libdir.'/adminlib.php');
require_once($CFG->dirroot.'/report/overviewstats/locallib.php');
require_login();

admin_externalpage_setup('overviewstats', '', null, '', array('pagelayout'=>'report'));
$PAGE->set_context(context_system::instance());
$context = context_system::instance();

defined('MOODLE_INTERNAL') || die();

// Header
$PAGE->set_pagelayout('report');
$PAGE->set_url('/report/overviewstats/testpage.php');
	$mynavbar = "Test page";
$PAGE->navbar->add($mynavbar);
	$mytitle = "My Testing page";
$PAGE->set_title($mytitle);
	$myheading = "This is my heading";
$PAGE->set_heading($myheading);
	
$output = $PAGE->get_renderer('report_overviewstats');
echo $output->header();
echo $output->footer();