<?php

// Initialize a cURL handle
$ch = curl_init();

// Set the API endpoint URL
$url = 'https://likhowithpride.com/blogs-api/';

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Make the request to the API
$resp = curl_exec($ch);

// Check for errors
if($e = curl_error($ch)){
    echo $e;
}else{
    // Decode the JSON response
    $decoded = json_decode($resp , true);
    //print_r($decoded);
}

// Iterate over the blog posts and display them
foreach ($decoded['blogs_list'] as $post) {
    echo '<h2>' . $post['title'] . '</h2>';
    echo '<p>By ' . $post['writer_title'] . '</p>';
    echo '<p>' . $post['posting_date'] . '</p>';
    echo '<hr>';
  }
  
// Close the cURL handle
curl_close($ch);

?>
