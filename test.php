<?php
$is_refreshed = (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL']) == 'max-age=0';
if ($is_refreshed) {    echo "page refresh";
}
else {    echo "page nn refresh";
}
?>
