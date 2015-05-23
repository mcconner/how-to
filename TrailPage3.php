<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" type="text/css" href="TrailStyle.css">
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
<h1>Trail API: Accessing Data From the API</h1>
<hr>
</div>

<h3>URL</h3>
<p>Each query to the API must contain the same starting URL. The URL is: </p>
<p class="output">https://outdoor-data-api.herokuapp.com/api.json?</p>
Next, you must append your api key as an attribute. You can either paste your API key each time you make a call,
or you can save your API key in a variable and use the variable instead. I recommend saving it in a variable because the API key is 
long and this will help you to avoid errors. It will look like this: </p>

<p class="output">https://outdoor-data-api.herokuapp.com/api.json?api_key=YOUR_API_KEY_HERE</p>
<p>You will put your API key variable or actual API key where it says 'YOUR_API_KEY_HERE'.</p>
<h3>Parameters</h3>
<p>For most search parameters, you can do a "like" search or an "equal" search.</p>

<ul>
	<li>Like search parameters end with _cont</li>
	<li>Equal search parameters end with _eq</li>
</ul>	

<div>
<p>Here is a complete list of search parameters:</p>
<table border="1" align="center">
	<tr><th>Parameter</th><th>Use</th></tr>
	<tr><td>q[city_eq]<br>q[city_cont]</td><td>Search for city</td></tr>
	<tr><td>q[state_eq]<br>q[state_cont]</td><td>Search for state</td></tr>
	<tr><td>q[country_eq]<br>q[country_cont]</td><td>Search for country</td></tr>
	<tr><td>q[name_eq]<br>q[name_cont]</td><td>Search for name</td></tr>
	<tr><td>radius</td><td>Search for search radius (based on longitude & latitude)</td></tr>
	<tr><td>lat</td><td>Search for latitude value</td></tr>
	<tr><td>lon</td><td>Search for longitude value</td></tr>
	<tr><td>limit</td><td>Limits the number of results</td></tr>
	<tr><td>q[activities_activity_type_name_eq]<br>q[activities_activity_type_name_cont]</td><td>Search for an activity type name (ie. hiking, mountain biking, etc.)</td></tr>
	<tr><td>q[children_activities_activity_type_name_eq]<br>q[children_activities_activity_type_name_cont]</td><td>Search for a children's activity type name</td></tr>
	<tr><td>q[activities_activity_name_eq]<br>q[activities_activity_name_cont]</td><td>Search for an item name (ie. Himalayan trail, Heavenly ski resort, etc.)</td></tr>
	<tr><td>q[activities_length_gteq]</td><td>Search for length (greater than or equal)</td></tr>
	<tr><td>q[activities_length_lteq]</td><td>Search for length(less than or equal)</td></tr>	
</table>

<p> Valid activities include:
<ul>
	<li>hiking</li>
	<li>camping</li>
	<li>mountain biking</li>
	<li>caving</li>
	<li>trail running</li>
	<li>snow sports</li>
	<li>horseback riding</li>
	<li>atv</li>
	<li>water sports</li>
</ul></p>

<p>Continue to the next page to see how to use these parameters to access data.</p>
<br>

<ul class="hnavbar">
	<li><a href="http://web.engr.oregonstate.edu/~mcconner/TrailGettingStarted.php">< Back</a></li>
	<li><a href="http://web.engr.oregonstate.edu/~mcconner/TrailPage4.php">Next ></a></li>
</ul>

</div>

</body>
</html>