<?php

$ds = 'time_squeeze';
$unit_text = 'Time Squeeze';
$filename = Rrd::name($device['hostname'], ['app', 'linux_softnet_stat', $app->app_id]);

if (! Rrd::checkRrdExists($filename)) {
    d_echo('RRD "' . $filename . '" not found');
}

require 'includes/html/graphs/generic_stats.inc.php';
