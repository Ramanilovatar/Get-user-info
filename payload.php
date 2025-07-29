<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$fields = [
    'OS', 'OSVersion', 'Browser', 'BrowserVersion',
    'CPU', 'Resolution', 'TimeZone', 'Language'
];

$data = [];
foreach ($fields as $field) {
    $data[$field] = isset($_POST[$field]) ? $_POST[$field] : "Not found";
}

// خواندن و آپدیت فایل JSON
$file = "target.json";
$current_data = [];
if (file_exists($file)) {
    $current_data = json_decode(file_get_contents($file), true);
}
$current_data[] = $data;

file_put_contents($file, json_encode($current_data, JSON_PRETTY_PRINT));

echo "Data saved!";
?> 