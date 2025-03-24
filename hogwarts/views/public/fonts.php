<?php
$file = __DIR__ . '/fonts/HarryP-MVZ6w.ttf';

if (file_exists($file)) {
    header('Content-Type: font/ttf');
    readfile($file);
    exit;
} else {
    http_response_code(404);
    echo "Font not found";
}
?>