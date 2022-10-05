<?php
function url_dasar()
{
    //$_SERVER['SERVER_NAME'] : alamat website, misalkan websitemu.com
    //$_SERVER['SCRIPT_NAME'] : directory website, websitemu.com/blog/ $_SERVER['SCRIPT_NAME'] : blog
    $url_dasar = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']);
    return $url_dasar;
}
?>