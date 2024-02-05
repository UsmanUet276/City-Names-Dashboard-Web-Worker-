<?php
include('./database.php');

try {
    $query = "SELECT * FROM cities LIMIT 70000";
    $cityNames = db::getRecords($query);

    // Initialize an empty array to store city names
    $names = [];

    // Loop through each city record and add its name to the array
    foreach ($cityNames as $city) {
        $names[] = $city['name'];
    }

    // Check if the array is not empty
    if (!empty($names)) {
        // Manually build the JSON string
        $jsonString = '[' . implode(',', array_map('json_encode', $names)) . ']';

        // Echo the JSON string
        echo $jsonString;
    } else {
        // No data to encode
        throw new Exception('No city names found');
    }

} catch (Exception $e) {
    // Handle errors
    http_response_code(500); // Internal Server Error
    echo json_encode(array('error' => $e->getMessage()));
}
?>
