<h1>PHP Blog Reader</h1>
<p>This PHP script retrieves a list of blog posts from a given API and displays them on a webpage.</p>

<h3>How it works:</h3>
1. The script initializes a cURL handle using curl_init().
2. It sets the URL of the API endpoint using curl_setopt($ch, CURLOPT_URL, $url), where $ch is the cURL handle and $url is the API URL.
3. It tells cURL to return the response as a string by setting the CURLOPT_RETURNTRANSFER option to true.
4. It makes the request to the API by calling curl_exec($ch), which returns the response as a string.
5. If there was an error making the request, the script echoes the error message.
6. Otherwise, it decodes the JSON response using json_decode($resp, true) and stores it in the $decoded variable.
7. It iterates over the blogs_list array contained in the $decoded variable and prints out the title, writer, and posting date for each blog post.
8. It closes the cURL handle using curl_close($ch).

<h3>Requirements:</h3>
<p>An API endpoint that returns a list of blog posts in JSON format.</p>

<h3>Configuration</h3>
<p>To use this script, you will need to set the $url variable to the URL of your API endpoint. You may also want to customize the HTML output to fit your needs.</p>




