<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.artistalbums.php
 * Type:     function
 * Name:     artistalbums
 * Purpose:  outputs an array of albums by $artist
 * -------------------------------------------------------------
 */
function smarty_function_artistalbums($params, $template) {

/**
 * Retrieves a list of albums
 *
 * @param string $artist The name of the artist
 * @return array artistalbums
 */
	global $adodb;
	$artist = $params['artist'];

	$query = 'SELECT a.name as album, a.artist_name as artist, a.image, MAX(t.streamable) as streamable, COALESCE(MAX(a.releasedate), 0) as releasedate FROM Album a LEFT JOIN Track t ON (a.name=t.album_name AND a.artist_name=t.artist_name) WHERE a.artist_name=? GROUP BY a.name, a.artist_name, a.image ORDER BY releasedate DESC, a.name ASC';
	$qparams = array($artist);

	$data = $adodb->CacheGetAll(600, $query, $qparams);
	foreach($data as &$item) {
		if (!$item['image']) {
			$item['image'] = $default_album_image;
		} else {
			$item['image'] = resolve_external_url($item['image']);
		}
		$item['albumurl'] = Server::getAlbumURL($artist, $item['album']);
		$item['timehuman'] = $item['releasedate'] ? strftime("%F", $item['releasedate']) : null;
	}
	
	$template->assign(artistalbums, $data);
}
	
?>
