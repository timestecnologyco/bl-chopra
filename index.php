<?php
$ip = $_SERVER['REMOTE_ADDR']; // Or any IP you want to check
$access_token = 'YOUR_TOKEN_HERE'; // optional for free tier

$url = "https://ipinfo.io/{$ip}/json?token={$access_token}";

// Get JSON response
$response = file_get_contents($url);

// Decode JSON to PHP array
$data = json_decode($response, true);

echo "IP: " . $data['ip'] . "\n";
echo "City: " . $data['city'] . "\n";
echo "Region: " . $data['region'] . "\n";
echo "Country: " . $data['country'] . "\n";
echo "Location (lat,lng): " . $data['loc'] . "\n";
echo "ISP / Org: " . $data['org'] . "\n";
?>
