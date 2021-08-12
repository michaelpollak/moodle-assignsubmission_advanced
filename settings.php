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
 * This file defines the admin settings for this plugin
 *
 * @package     assignsubmission_advanced
 * @copyright   2021 michael pollak <moodle@michaelpollak.org>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


// Note: This is on by default.
$settings->add(new admin_setting_configcheckbox('assignsubmission_advanced/default',
                new lang_string('default', 'assignsubmission_advanced'),
                new lang_string('default_help', 'assignsubmission_advanced'), 1));

// Maxwidth in pixels.
$settings->add(new admin_setting_configtext('assignsubmission_advanced/maxwidth',
                new lang_string('maxwidth', 'assignsubmission_advanced'),
                new lang_string('maxwidth_help', 'assignsubmission_advanced'), 1024, PARAM_INT));

// Allow teachers to overrule maxwidth.
$settings->add(new admin_setting_configcheckbox('assignsubmission_advanced/forcemaxwidth',
                new lang_string('forcemaxwidth', 'assignsubmission_advanced'),
                new lang_string('forcemaxwidth_help', 'assignsubmission_advanced'), 0));

// Maxheight in pixels.
$settings->add(new admin_setting_configtext('assignsubmission_advanced/maxheight',
                new lang_string('maxheight', 'assignsubmission_advanced'),
                new lang_string('maxheight_help', 'assignsubmission_advanced'), 1024, PARAM_INT));

// Allow teachers to overrule maxwidth.
$settings->add(new admin_setting_configcheckbox('assignsubmission_advanced/forcemaxheight',
                new lang_string('forcemaxheight', 'assignsubmission_advanced'),
                new lang_string('forcemaxheight_help', 'assignsubmission_advanced'), 0));

// Maxfilesize in megabyte.
$name = new lang_string('maxfilesize', 'assignsubmission_advanced');
$description = new lang_string('maxfilesize_help', 'assignsubmission_advanced');

$choices = array(209716 => '200kB', 524288 => '500kB', 1048576 => '1MB', 2097152 => '2MB', 5242880 => '5MB');
$element = new admin_setting_configselect('assignsubmission_advanced/maxfilesize',
                                          $name,
                                          $description,
                                          1048576,
                                          $choices);
$settings->add($element);

// Allow only smaller filesizes.
$settings->add(new admin_setting_configcheckbox('assignsubmission_advanced/allowonlysmaller',
                new lang_string('allowonlysmaller', 'assignsubmission_advanced'),
                new lang_string('allowonlysmaller_help', 'assignsubmission_advanced'), 0));

// Allow teachers to overrule maxfilesize.
$settings->add(new admin_setting_configcheckbox('assignsubmission_advanced/forcemaxfilesize',
                new lang_string('forcemaxfilesize', 'assignsubmission_advanced'),
                new lang_string('forcemaxfilesize_help', 'assignsubmission_advanced'), 0));

$settings->add(new admin_setting_filetypes('assignsubmission_advanced/filetypes',
               new lang_string('acceptedfiletypes', 'assignsubmission_advanced'),
               new lang_string('acceptedfiletypes_help', 'assignsubmission_advanced'), ''));

$settings->add(new admin_setting_configtext('assignsubmission_advanced/maxfiles',
               new lang_string('maxfiles', 'assignsubmission_advanced'),
               new lang_string('maxfiles_help', 'assignsubmission_advanced'), 20, PARAM_INT));

if (isset($CFG->maxbytes)) {
    $name = new lang_string('maxbytes', 'assignsubmission_advanced');
    $maxbytes = get_config('assignsubmission_advanced', 'maxbytes');
    $element = new admin_setting_configselect('assignsubmission_advanced/maxbytes',
            $name, '', $CFG->maxbytes, get_max_upload_sizes($CFG->maxbytes, 0, 0, $maxbytes));
    $settings->add($element);
}
