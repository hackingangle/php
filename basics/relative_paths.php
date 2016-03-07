<?php
/**
 * relative paths
 */

function getRelativePath($from, $to)
{
    $ret = '';
    $froms = explode('/', $from);
    $tos = explode('/', $to);
    $fromsSize = count($froms);
    $toSize = count($tos);
    $minSize = $fromsSize > $toSize ? $toSize : $fromsSize;
    $matchNum = 0;
    for ($i=0; $i < $minSize; $i++) { 
        if ($froms[$i] == $tos[$i]) {
            $matchNum++;
        } else {
            break;
        }
    }
    for ($i=0; $i < $fromsSize - $matchNum - 1; $i++) { 
        $ret .= '../';
    }
    for ($i=0; $i < $matchNum; $i++) { 
        unset($tos[$i]);
    }
    $ret .= implode('/', $tos);
    return $ret;
}

$from = '/usr/local/bin/stats/.bashes/memcached.sh';
$from = '/usr/hi.sh';
$to = '/usr/local/stats/view.sh';
// $to = '/hi.sh';
var_dump(getRelativePath($from, $to));
