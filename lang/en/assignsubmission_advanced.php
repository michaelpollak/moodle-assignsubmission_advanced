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
 * Strings for component 'assignsubmission_advanced', language 'en'
 *
 * @package     assignsubmission_advanced
 * @copyright   2021 michael pollak <moodle@michaelpollak.org>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'File Upload with compressed images';
$string['default'] = 'Enabled by default';
$string['default_help'] = 'If set, this submission method will be enabled by default for all new assignments.';
$string['advanced'] = 'File Upload with compressed images';
$string['enabled'] = 'File Upload with compressed images';
$string['enabled_help'] = 'If enabled, students are able to upload files and automatically compress images for their submission.';
$string['advancedforlog'] = 'Files have been uploaded and images have been compressed.';
$string['eventassessableuploaded'] = 'Files have been uploaded and images have been compressed.';
$string['siteuploadlimit'] = 'Site upload limit';

$string['maxwidth'] = 'Maximum width of image';
$string['maxwidth_help'] = 'Larger uploaded images will be scaled to this image width.';
$string['forcemaxwidth'] = 'Force maximum width';
$string['forcemaxwidth_help'] = 'If selected teachers cannot overrule the maximal width of images.';
$string['maxheight'] = 'Maximum height of image';
$string['maxheight_help'] = 'Larger uploaded images will be scaled to this image height.';
$string['forcemaxheight'] = 'Force maximum height';
$string['forcemaxheight_help'] = 'If selected teachers cannot overrule the maximal height of images.';
$string['maxfilesize'] = 'Maximum file size of image';
$string['maxfilesize_help'] = 'Larger uploaded images will be compressed to this image filesize.';
$string['allowonlysmaller'] = 'Allow only smaller filesizes';
$string['allowonlysmaller_help'] = 'If selected teachers cannot set bigger file sizes but smaller.';
$string['forcemaxfilesize'] = 'Force maximum file size';
$string['forcemaxfilesize_help'] = 'If selected teachers cannot overrule the maximal file size of images.';
$string['studentoverride'] = 'I want to upload this file despite not meeting the criteria.';
$string['noforce'] = "Don't force requirements";
$string['noforce_postfix'] = 'Students are allowed to overrule the requirements.';
$string['forcenoforce'] = 'Disable noforce';
$string['forcenoforce_help'] = 'If selected teachers cannot overrule the option to not force requirements.';
$string['prefixscaled'] = "s";
$string['prefixcomp'] = "k";
$string['constraints'] = 'Constraints';
$string['constraintdetails'] = 'Please upload images that fit the following constraints.
We will try to compress them automatically if they don\'t match.
<br>Width: {$a->maxwidth} px<br>Height: {$a->maxheight} px<br>Filesize: {$a->maxfilesize}';
$string['acceptedfiletypes'] = 'Accepted file types';
$string['acceptedfiletypes_help'] = 'Accepted file types can be restricted by entering a list of file extensions.
If the field is left empty, then all file types are allowed.';
$string['maxfiles'] = 'Maximum files per submission';
$string['maxfiles_help'] = 'If file submissions are enabled, each assignment can be set to accept up to this number of files for their submission.';
$string['maxbytes'] = 'Maximum submission size';
$string['maxbytes_help'] = 'Files uploaded by students may be combined of up to this size.';

// Privacy API
$string['privacy:metadata:advancedpurpose'] = 'The files uploaded for this assignment submission';

$string['errorwidthheight'] = 'Sorry, we couldn\'t resize your uploaded image.';
$string['errormaxsize'] = 'Sorry, your image is still too big after compression.
Your file is {$a->filesize} but the maximum filesize is {$a->maxfilesize}.';
$string['errorcompression'] = 'Sorry, we couldn\'t compress your image.';
