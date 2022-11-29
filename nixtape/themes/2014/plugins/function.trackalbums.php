<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.trackalbums.php
 * Type:     function
 * Name:     trackalbums
 * Purpose:  outputs an array of albums by $artist and $track
 * -------------------------------------------------------------
 */
function smarty_function_trackalbums($params, $template) {

/**
 * Retrieves a list of albums
 *
 * @param string $artist The name of the artist (required)
 * @param string $track The name of the track (required)
 * @return array trackalbums
 */
	global $adodb;
	$artist = $params['artist'];
	$track = $params['track'];

	$query = 'SELECT a.artist_name as artist, a.name as album, a.image, MAX(t.streamable) as streamable, COALESCE(MAX(a.releasedate), 0) as releasedate FROM Track t LEFT JOIN Album a ON (a.name=t.album_name AND a.artist_name=t.artist_name) WHERE t.artist_name=? AND t.name=? GROUP BY a.name, a.artist_name, a.image ORDER BY releasedate DESC, a.name ASC';
	$qparams = array($artist, $track);

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
	
	$template->assign(trackalbums, $data);
}
	
?>
