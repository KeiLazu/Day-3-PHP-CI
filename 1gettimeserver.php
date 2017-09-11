<?php
    header('Content-type: text/event-stream');
    header('Cache-Control: no-cache');

    date_default_timezone_set('Asia/Jakarta');
    $keiTime = date('H:i');
    echo "data: {$keiTime}\n\n";
    flush();

?>