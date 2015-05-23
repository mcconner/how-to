<!--Rachael McConnell
CS290 Spring 2015, How-To Assignment -->

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

<h1>Trail API: Searching Using Parameters</h1>
<hr>

<div>
<h3>Example Searches</h3>
<p> Here are three example searches. In each search, the first part of the URL (up to the API key) is the same. Next, we append the parameters to the end of the URL, 
using key/value pairs. An ampersand (&) separates each key/value pair and the plus sign(+) is used to separate values that are more than one word long (ex. San Francisco = San+Francisco).
 The "key" is shown in <font color=blue>blue</font>. The "value" is shown in <font color=green>green</font>. 
<h4>Example 1: Find trails for hiking in Corvallis, Oregon.</h4>
<p class="output">https://outdoor-data-api.herokuapp.com/api.json?<font color=blue>api_key</font>=<font color=green>APIKey</font>&<font color=blue>q[city_eq]</font>=<font color=green>Corvallis</font>&<font color=blue>q[state_eq]</font>=<font color=green>Oregon</font>&<font color=blue>q[activities_activity_type_name_eq]</font>=<font color=green>hiking</font></p> 
<br>
To limit this search to only show one search result, add &limit=1 to the end of the search.<br>
<p class="output">https://outdoor-data-api.herokuapp.com/api.json?<font color=blue>api_key</font>=<font color=green>APIKey</font>&<font color=blue>q[city_eq]</font>=<font color=green>Corvallis</font>&<font color=blue>q[state_eq]</font>=<font color=green>Oregon</font>&<font color=blue>q[activities_activity_type_name_eq]</font>=<font color=green>hiking</font>&<font color=blue>limit</font>=<font color=green>1</font></p>

This search uses four parameters:
<ul>
	<li>q[city_eq]: to search for the city (Corvallis)</li>
	<li>q[state_eq]: to search for the state (Oregon)</li>
	<li>q[activities_activity_type_name_eq]: to search for the activity type (hiking)</li>
	<li>limit: to limit the number of search results that appear (1)</li>
</ul>

Here is the result that we receive when we limit the response to 1:<br>

<img src= "http://web.engr.oregonstate.edu/~mcconner/TrailSearchResult2.jpg" height="70%" width="70%">
<!--{"places":[{"city":"Corvallis","state":"Oregon","country":"United States","name":"Dans Trail","parent_id":null,"unique_id":3051,"directions":"&quot;From Corvallis, Hwy 34, Rt on 99W, this will be north, to the first BP Station you come to. You will have a Stop light.  Turn Right.  Continue until you see the sign for Crescent Valley High School, turn left.  Continue until you see the sign for Chip Ross Park, turn right and follow it to the end.  Start Riding.","lat":44.60618,"lon":-123.27954,"description":null,"date_created":null,"children":[],"activities":[{"name":"Dans Trail","unique_id":"1-402","place_id":3051,"activity_type_id":5,"activity_type_name":"mountain biking","url":"http://www.singletracks.com/item.php?c=1&i=402","attribs":{"\"length\"":"\"4\"","\"nightride\"":"1"},"description":"McDonald Dunn Forest offers and incredible variety of terrain, ranging from short and steep, to long and rolling. Dans' Trail, is one of the newer trails to be added to the area.  It is approximately 4miles long from top to bottom.  Smooth, and insanely fast in sections.  The beauty of McDonald Forest is the fact that you have numerous other trails to choose from (Horse Trail, Extendo, Alien, and a host of others).  Most trails drop you off onto gravel roads that you can follow to the next trail.  Some of the climbing is intense, and some of the rooted trails require a rider to seriously focus, otherwise, you will get beat up by the trail, or worse.  If you can pick your lines though, it is an absolute blast.  I can not say enough about the area.  I am not going to say it is the greatest place ever, simply because my experiance is limited, but out of the place I have ridden, including the McKenzie River Trail, east of Eugene, McDonald can not be beat.  The roads are numbered and you can pick up a map in the area.  Also, the legal trails are all marked as well.  If you are in the Corvallis Area, you should check it out.  The scenery and trails are great.  ","length":4.0,"activity_type":{"created_at":"2012-08-15T16:12:35Z","id":5,"name":"mountain biking","updated_at":"2012-08-15T16:12:35Z"},"thumbnail":"http://images.singletracks.com/2009/02/Terry-GiveMeADay-0.jpg","rank":null,"rating":4.22},{"name":"Dans Trail","unique_id":"2-346","place_id":3051,"activity_type_id":2,"activity_type_name":"hiking","url":"http://www.tripleblaze.com/trail.php?c=3&i=346","attribs":{"\"length\"":"\"4\""},"description":"Dans Trail features 4 miles of hiking trails near Corvallis, OR.","length":4.0,"activity_type":{"created_at":"2012-08-15T16:12:21Z","id":2,"name":"hiking","updated_at":"2012-08-15T16:12:21Z"},"thumbnail":null,"rank":null,"rating":0.0}]}]}-->
<br><br>
<h4>Example 2: Find mountain biking trails with a length greater than or equal to 1000 miles.</h4>
<p class="output">https://outdoor-data-api.herokuapp.com/api.json?<font color=blue>api_key</font>=<font color=green>APIKey</font>&<font color=blue>q[activities_activity_type_name_eq]</font>=<font color=green>mountain+biking</font>&<font color=blue>q[activities_length_gteq]</font>=<font color=green>1000</font></p>

This search uses two parameters:
<ul>
	<li>q[activities_activity_type_name_eq]: to search for the activity (mountain biking)</li>
	<li>q[activities_length_gteq]: to search for the distance (> 1000)</li>
</ul>
Here is the result that we receive from this search:<br>
<img src = "http://web.engr.oregonstate.edu/~mcconner/TrailSearchResult.jpg" height="70%" width="70%">
<!--{"places":[{"city":"Nepal","state":null,"country":"Nepal","name":"The Great Himalaya Trail","parent_id":null,"unique_id":27732,"directions":"Dharchula, Nepal","lat":0.0,"lon":0.0,"description":null,"date_created":null,"children":[],"activities":[{"name":"The Great Himalaya Trail","unique_id":"1-10219","place_id":27732,"activity_type_id":5,"activity_type_name":"mountain biking","url":"http://www.singletracks.com/item.php?c=1&i=10219","attribs":{"\"length\"":"\"1800\"","\"nightride\"":"null"},"description":"Nepal's Great Himalaya Trail&lt;br /&gt;<br />The Great Himalaya Trail is a network of existing treks and trails which together form one of the longest and highest walking trails in the world. Winding beneath the world's highest peaks and visiting some of the most remote communities on earth, it passes through lush green valleys, arid high plateaus and incredible landscapes. Nepal's GHT has 10 sections comprising a network of upper and lower routes (see this map of Nepal), each offering you something different, be it adventure and exploration, authentic cultural experiences, or simply spectacular Himalayan nature.","length":1800.0,"activity_type":{"created_at":"2012-08-15T16:12:35Z","id":5,"name":"mountain biking","updated_at":"2012-08-15T16:12:35Z"},"thumbnail":"http://images.singletracks.com/2015/01/DSC08366.jpg","rank":null,"rating":5.0}]}]}-->

<h4>Example 3: Search for any activities within a 10 mile radius of San Diego, California, using latitude and longitude. [lon(-117.06816) and lat(33.0663)]</h4>
<p class="output">https://outdoor-data-api.herokuapp.com/api.json?<font color=blue>api_key</font>=<font color=green>APIKey</font>&<font color=blue>lat</font>=<font color=green>33.06634</font>&<font color=blue>lon</font>=<font color=green>-117.06816</font>&<font color=blue>radius</font>=<font color=green>10</font></p>

This search uses three parameters:
<ul>
	<li>lat: to search for the latitude (-117.06816)</li>
	<li>lon: to search for the longitude (33.0663)</li>
	<li>radius: to search for radius (10)</li>
</ul>
This search returns many results so I won't show it. Feel free to copy the link into a browser (substituting your api key for the api_key value) to test it out!
Press Next to learn how to use PHP to access the API, or Back to review information about the parameters.<br><br>
<br>
<ul class="hnavbar">
	<li><a href="http://web.engr.oregonstate.edu/~mcconner/TrailPage3.php">< Back</a></li>
	<li><a href="http://web.engr.oregonstate.edu/~mcconner/TrailPage5.php">Next ></a></li>
</ul>
</div>

</body>
</html>