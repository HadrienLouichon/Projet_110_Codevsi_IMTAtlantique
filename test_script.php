<?php
// Check if it's a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Access data from the request body
  $rawData = file_get_contents('php://input');

  // Parse the data (assuming it's URL-encoded)
  parse_str($rawData, $data);

  // Check if data is received
  if (isset($data['message']) && !empty($data['message'])) {
    $message = $data['message'];
    echo "Data received successfully! Message: " . $message;
  } else {
    echo "No data received!";
  }
} else {
  echo "Not a POST request!";
}
?>
