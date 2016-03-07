<?php
/**
 * usage
 * strchr
 * strrchr
 */
$path = '/usr/local/bin/.bash/memcached.sh';
var_dump(strchr($path, '.'));
var_dump(strrchr($path, '.'));
