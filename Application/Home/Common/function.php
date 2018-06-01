<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 2018/6/1
 * Time: 下午2:14
 */
function collect_id() {
    $newString = strstr($_SERVER['PATH_INFO'], '/');
    $length = strlen('/');
    $idArray = (array_values(array_filter((explode(",",substr($newString, $length))))));
    return $idArray;
}