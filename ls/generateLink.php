<?php
// Check if URL parameter is set
if (isset($_POST['url'])) {
    // Get the URL from the POST data
    $url = $_POST['url'];

    // Generate a random file name
    $fileName = generateRandomString(10) . '.html';

    // Create the HTML content with redirection code
    $htmlContent = "<html><head><meta http-equiv='refresh' content='0;url=" . $url . "'></head><body></body></html>";

    // Write the HTML content to the file
    file_put_contents($fileName, $htmlContent);

    // Return the file name as JSON response
    echo json_encode(array("success" => true, "fileName" => $fileName));
} else {
    // Return error if URL parameter is not set
    echo json_encode(array("success" => false, "message" => "URL parameter is missing."));
}

// Function to generate a random string
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>