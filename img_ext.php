<?php
/**
 * MantisBT - A PHP based bugtracking system
 *
 * MantisBT is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * MantisBT is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with MantisBT.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @copyright Copyright (C) 2002 - 2012  MantisBT Team - mantisbt-dev@lists.sourceforge.
 */

/**
 * Generate a thumbnail image for an unknown file extension
 *
 * @todo use imagettftext to do 45degree angled text based on mantis ttf font setting
 *
 * @package MantisBT
 * @copyright Copyright (C) 2002 - 2012  MantisBT Team - mantisbt-dev@lists.sourceforge.net
 * @link http://www.mantisbt.org
 *
 * @uses core.php
 */
require_once( 'core.php' );

$im = imagecreatefrompng( 'themes/' . config_get( 'theme' ) . '/images/fileicons/generic.png' );
$textcolor = imagecolorallocate($im, 0, 0, 0);
imagestring($im, 1, 0, 4, gpc_get_string('ext', ''), $textcolor);
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);