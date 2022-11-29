<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.artisttracks.php
 * Type:     function
 * Name:     artisttracks
 * Purpose:  outputs an array of tracks by $artist
 * -------------------------------------------------------------
 */
function smarty_function_artisttracks($params, $template) {

/**
 * Retrieves a list of tracks
 *
 * @param string $artist The name of the artist (required)
 * @param string $album The name of the album (optional)
 * @return array artisttracks
 */
	global $adodb;
	$artist = $params['artist'];
	$album = $params['album'];

	$query = 'SELECT MAX(TRIM(t.name)) AS track, MAX(t.artist_name) AS artist, MAX(a.name) AS album, MAX(t.streamable) AS streamable, MAX(a.image) AS image FROM Track t LEFT JOIN Album a ON (t.album_name=a.name AND t.artist_name=a.artist_name) WHERE t.artist_name=?';
	$qparams = array($artist);

	if ($album) {
		$query .= ' AND t.album_name=?';
		$qparams[] = $album;
	}

	$query .= ' GROUP BY LOWER(TRIM(t.name)), LOWER(TRIM(t.artist_name)), a.image, a.name ORDER BY LOWER(TRIM(a.name)), LOWER(TRIM(t.name)) ASC';

	$data = $adodb->CacheGetAll(600, $query, $qparams);
	foreach($data as &$item) {
		$item['trackurl'] = Server::getTrackURL($artist, null, $item['track']);
		if (!$item['image']) {
			$item['image'] = $default_album_image;
		} else {
			$item['image'] = resolve_external_url($item['image']);
		}
	}

	$template->assign(artisttracks, $data);
}
?>
