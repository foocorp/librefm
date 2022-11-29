<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.userscrobbles.php
 * Type:     function
 * Name:     userscrobbles
 * Purpose:  outputs an array of recent scrobbles by $userid
 * -------------------------------------------------------------
 */
function smarty_function_userscrobbles($params, $template) {

/**
 * Retrieves a list of tracks
 *
 * @param string $userid User's unique id (required)
 * @return array scrobbles
 */
	global $adodb, $base_url, $default_theme;
	$default_artist_image = $base_url . '/themes/' . $default_theme . '/img/qm160.png';
	$userid = $params['userid'];
	$limit = $params['limit'] ? $params['limit'] : 20;
	$offset = $params['offset'] ? $params['offset'] : 0;
	
	$query = 'SELECT s.artist, s.track, s.time, lt.userid as loved, a.image_small as image, t.streamable FROM Scrobbles s LEFT JOIN Scrobble_Track st ON (s.stid=st.id) LEFT JOIN Track t ON (st.track=t.id) LEFT JOIN Artist a ON (t.artist_name=a.name) LEFT JOIN Loved_Tracks lt ON (s.artist=lt.artist AND s.track=lt.track AND s.userid=lt.userid) WHERE s.userid=?';
	$qparams = array($userid);
		
	$query .= ' ORDER BY time DESC LIMIT ? OFFSET ?';
	$qparams[] = (int) $limit;
	$qparams[] = (int) $offset;

	$adodb->SetFetchMode(ADODB_FETCH_ASSOC);
	$data = $adodb->CacheGetAll(600, $query, $qparams);

	foreach($data as &$item) {
		$item['artisturl'] = Server::getArtistURL($item['artist']);
		$item['trackurl'] = Server::getTrackURL($item['artist'], null, $item['track']);
		$item['timehuman'] = human_timestamp($item['time']);
		if (!$item['image']) {
			$item['image'] = $default_artist_image;
		}
	}

	$template->assign(userscrobbles, $data);
}
?>
