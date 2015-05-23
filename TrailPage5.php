<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" type="text/css" href="TrailStyle.css">
<!--INCLUDE apiKey.php -->
</head>
<body>

<ul class="vnavbar"
	<li><a href="http://web.engr.oregonstate.edu/~mcconner/TrailIntro.php">Home</a></li>
	<li><a href="http://web.engr.oregonstate.edu/~mcconner/TrailGettingStarted.php">Getting Started</a></li>
	<li><a href="http://web.engr.oregonstate.edu/~mcconner/TrailPage3.php">Accessing Data From the API</a></li>
	<li><a href="http://web.engr.oregonstate.edu/~mcconner/TrailPage4.php">Searching Using Parameters</a></li>
	<li><a href="http://web.engr.oregonstate.edu/~mcconner/TrailPage5.php">Using PHP and cURL</a></li>
	<li><a href="http://web.engr.oregonstate.edu/~mcconner/TrailPage6.php">Putting it All Together</a></li>
	<li><a href="http://web.engr.oregonstate.edu/~mcconner/TrailPage7.php">More Information</a></li>
</ul>

<div>
<h1>Trail API: Using PHP and cURL</h1>
<hr>
</div>

<div>
<p>Now that you know how to search using the parameters as key value pairs, cURL is a great tool to use. It allows you to make
calls to other servers using PHP.</p>
<p>Here is the code that you will need (the numbers are just for reference):</p>
</div>
<p class="output">
1. $curl = curl_init();<br>
2. curl_setopt($curl, CURLOPT_URL, "https://outdoor-data-api.herokuapp.com/api.json?api_key=APIKey");<br>
3. curl_setopt($curl, CURLOPT_POST, 1);<br>
4. curl_setopt($curl, CURLOPT_POSTFIELDS, <b>'***PARAMETERS GO HERE***'</b>);<br>
5. curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);<br>
6. $result = json_decode(curl_exec($curl));<br>
7. curl_close($curl);<br>
</p>

<p>I will explain what each line does:
<ol>
	<li>Initialize the request</li>
	<li>Set option: Url to fetch (make sure you replace APIKey with your API Key, or the variable that you created to store your API key)</li>
	<li>Set option: POST request</li>
	<li>Set option: Add parameters</li>
	<li>Set option: Returns the transfer as a string</li>
	<li>Store result in a variable (my variable is called $result)</li>
	<li>Close the request</li>
</ol>

<p>For example, if I wanted to search the API for 1 activity in San Ramon, California, the only line I need to change is line 4. Line 4 is where
the parameters for the search are entered. The next page will show how to take user input to create a variable to hold the parameters for the search.
If you know exactly what you want to search for, you can directly input the parameters (as key/value pairs) as seen here:</p>
<p class="output">
4. curl_setopt($curl, CURLOPT_POSTFIELDS, 'q[city_eq]=San+Ramon&q[state_eq]=California&limit=1');<br>
</p>
<p>
You can set other options as well. See the <a class="test" href="http://php.net/manual/en/function.curl-setopt.php">PHP website</a> for more details.
</p>


<p>At this point, you can access specific parameters that you are interested in viewing. Here are some examples of how to access parameters:<br>
<p class="output">$result->places[0]->name;<br>
$result->places[0]->activities[0]->description;<br>
$result->places[0]->city;</p>
<p>These calls access the name of the result, the description, and the city, respectively. Name is nested under places. Description is also nested
 under places, and then under activities. City is nested under places.</p>
<p>All parameters can be accessed this way. If you are unsure of how to access a specific parameter, view the entire result by using:</p>
<p class="output">var_dump($result)</p>

<p>Now, let's create a form so that users can easily search for the information they want to see.</p>
<br>

<ul class="hnavbar">
	<li><a href="http://web.engr.oregonstate.edu/~mcconner/TrailPage4.php">< Back</a></li>
	<li><a href="http://web.engr.oregonstate.edu/~mcconner/TrailPage6.php"> Next ></a></li>
</ul>
</body>
</html>