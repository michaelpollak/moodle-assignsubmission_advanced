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
 * Strings for component 'assignsubmission_advanced', language 'de'
 *
 * @package     assignsubmission_advanced
 * @copyright   2021 michael pollak <moodle@michaelpollak.org>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Dateiabgabe mit Bildkomprimierung';
$string['default'] = 'Standardmäßig aktiviert';
$string['default_help'] = 'Wenn markiert, werden alle zukünftig angelegten Aufgaben \'Dateiabgabe mit Bildkomprimierung\' als Abgabetyp anbieten. Das heißt Bilddateien (.jpg, .jpeg, .png) werden zur Datenmengenreduktion automatisch skaliert bzw. komprimiert.';
$string['advanced'] =  'Dateiabgabe mit Bildkomprimierung <br>- mit Skalierung und Komprimierung von Bildern<br>- andere Dateitypen bleiben unverändert';
$string['enabled'] = 'Dateiabgabe mit automatischer Bildskalierung und -komprimierung';
$string['enabled_help'] = 'Wenn markiert, können Teilnehmer:innen eine oder mehrere Dateien als Lösung der Aufgabe einreichen. Hochgeladene Bilder werden automatisch auf vorgegebene Maximalwerte für Breite bzw. Höhe skaliert, sowie auf eine maximale Dateigröße komprimiert.';
$string['advancedforlog'] = 'Ein Bild wurde hochgeladen und gegebenenfalls skaliert und komprimiert.';
$string['eventassessableuploaded'] = 'Hochladen sowie Skalierung (Größenanpassung) bzw. Komprimierrung (Datenmengenreduktion)';
$string['siteuploadlimit'] = 'für dieses Moodle maximal erlaubte Dateigröße zum Hochladen';

$string['maxwidth'] = 'max. Breite bei Bildern (in Pixel)';
$string['maxwidth_help'] = 'Breitere Bilder werden automatisch auf das Format skaliert. Das Verhältnis von Breite zu Höhe bleibt erhalten. ';
$string['forcemaxwidth'] = 'max. Breite erzwingen';
$string['forcemaxwidth_help'] = 'Wenn markiert, können Trainer:innen die maximale Breite nicht ändern.';
$string['maxheight'] = 'max. Höhe bei Bildern (in Pixel)';
$string['maxheight_help'] = 'Höhere Bilder werden automatisch auf diese Höhe skaliert. Das Verhältnis von Breite zu Höhe bleibt erhalten.';
$string['forcemaxheight'] = 'max. Höhe erzwingen';
$string['forcemaxheight_help'] = 'Wenn markiert, können Trainer:innen die maximale Höhe nicht ändern.';
$string['maxfilesize'] = 'max. Dateigröße der Bilder nach Verkleinerung (in MB)';
$string['maxfilesize_help'] = 'Bilder mit größerer Dateigröße werden automatisch skaliert bzw. komprimiert.';
$string['allowonlysmaller'] = 'Erlaube nur kleinere Dateien';
$string['allowonlysmaller_help'] = 'Wenn markiert, können Trainer:innen die maximale Dateigröße lediglich verkleinern.';
$string['forcemaxfilesize'] = 'max. Dateigröße erzwingen';
$string['forcemaxfilesize_help'] = 'Wenn markiert, können Trainer:innen die maximale Dateigröße nicht ändern.';
$string['studentoverride'] = 'Ich möchte die unskalierte und unkomprimierte Original-Datei hochladen obwohl sie nicht auf die den Vorgaben entspricht.';
$string['noforce'] = "Vorgaben nicht erzwingen";
$string['noforce_postfix'] = 'Teilnehmer/innen können Abgaben, die trotz Skalierung und Komprimierung nicht auf die vorgegebenen Grenzwerte reduziert werden konnten, dennoch hochladen.';
$string['forcenoforce'] = 'Vorgaben immer erzwingen';
$string['forcenoforce_help'] = 'Wenn markiert, können Trainer:innen die Vorgaben nicht als optional markieren.';
$string['prefixscaled'] = 's';
$string['prefixcomp'] = 'k';
$string['constraints'] = 'Hinweise';
$string['constraintdetails'] = 'Hochgeladene Bilder (.jpg, .jpeg, .png) werden gegebenenfalls auf die folgenden Maximalwerte verkleinert oder komprimiert. Das Verhältnis von Breite zu Höhe bleibt erhalten.
<br>
<br>Breite: {$a->maxwidth} px<br>Höhe: {$a->maxheight} px<br>Dateigröße: {$a->maxfilesize}<br><br>
Andere erlaubte Dateitypen können ebenfalls abgegeben werden. Bei diesen erfolgt keine Skalierung oder Komprimierung.<br>';
$string['acceptedfiletypes'] = 'Akzeptierte Dateitypen';
$string['acceptedfiletypes_help'] = 'Die erlaubten Dateitypen können eingeschränkt werden.';
$string['maxfiles'] = 'Anzahl hochladbarer Dateien';
$string['maxfiles_help'] = 'Es können maximal diese Anzahl an Dateien hochgeladen werden.';
$string['maxbytes'] = 'Maximale Dateigröße';
$string['maxbytes_help'] = 'Alle hochgeladenen Dateien dürfen maximal diese Dateigröße erreichen.';

// Privacy API
$string['privacy:metadata:advancedpurpose'] = 'Dateien, die für Abgaben hochgeladen und komprimiert wurden.';

$string['errorwidthheight'] = 'Das Bild konnte leider nicht skaliert werden.';
$string['errormaxsize'] = 'Trotz Komprimierung ist das Bild größer als die vorgegebene Dateigröße.
Deine Datei ist {$a->filesize} wobei maximal {$a->maxfilesize} erlaubt ist.';
$string['errorcompression'] = 'Fehler bei der Komprimierung. Das Bild konnte leider nicht komprimiert werden.';
