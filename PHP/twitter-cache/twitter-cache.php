<?php

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 2000 06:00:00 GMT');
header('Content-type: application/json');

$user = $_GET['user'];
$count = $_GET['count'];

$feed = "http://api.twitter.com/1/statuses/user_timeline.json?screen_name={$user}&count={$count}&include_rts=1&callback=?";
$cache_file = dirname(__FILE__).'/cache/'.'twitter-cache';
$modified = filemtime($cache_file);
$now = time();
$interval = 600; // Ten minutes

// check the cache file
if ( !$modified || (( $now - $modified ) > $interval) ) {
  $json = file_get_contents($feed);

  if ( $json ) {
    $cache_static = fopen( $cache_file, 'w' );
    fwrite( $cache_static, $json );
    fclose( $cache_static );
  }
}

$json = file_get_contents( $cache_file );

print_r($json);