<?php
/* GNUkebox -- a free software server for recording your listening habits

   Copyright (C) 2009, 2011 Free Software Foundation, Inc

   This program is free software: you can redistribute it and/or modify
   it under the terms of the GNU Affero General Public License as published by
   the Free Software Foundation, either version 3 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU Affero General Public License for more details.

   You should have received a copy of the GNU Affero General Public License
   along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/

header('Content-type: text/html; charset=utf-8');
require_once('database.php');
require_once('utils/human-time.php');
require_once('temp-utils.php');
require_once('version.php');

?>
<!DOCTYPE html>
<html>
<head>
   <title>GNUkebox</title>
</head>
<body>
       <h2>Recent tracks</h2>

     <?php

	$adodb->SetFetchMode(ADODB_FETCH_ASSOC);

	try {

	$res = $adodb->CacheGetAll(300, 'UPDATE users SET active = 1 WHERE active = 0');

	} catch (Exception $e) {
		die($e->getMessage());
	}

	echo "<ul>\n";

			foreach ($res as &$row){

			echo "<li>" . $row['username']. "</li>\n";

			}
			?>

	</ul>

<p>This server is powered by <a href="https://gitorious.org/foocorp/gnu-fm">GNU FM</a> version <?php echo $version; ?></p>

</body>
</html>
