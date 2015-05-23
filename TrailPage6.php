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

<h1>Trail API: Putting it All Together</h1>
<hr>
<h3>Creating a Form</h3>
<p>You will probably want your users to be able to enter the parameters that they want to search for. One way to do this is 
by using a form. We can create a simple html form with this code:</p>

<xmp>
<!DOCTYPE>
<html>
<body>
	<form method="POST" action="newpage.php">
	<table>
		<tr><td class="right">Name:</td><td class="left"><input type="text" name="name" size="30" maxlength="30"></td></tr>
		<tr><td class="right">City:</td><td class="left"><input type="text" name="city" size="30" maxlength="30"></td></tr>
		<tr><td class="right">State:</td><td class="left"><input type="text" name="state" size="15" maxlength="15"></td></tr>
		<tr><td class="right">Country:</td><td class="left"><input type="text" name="country" size="30" maxlength="30"></td></tr>
		<tr><td class="right">Latitude:</td><td class="left"><input type="number" name="latitude" step="0.0001"></td></tr>
		<tr><td class="right">Longitude:</td><td class="left"><input type="number" name="longitude" step="0.0001"></td></tr>
		<tr><td class="right">Activity Name:</td><td><input type="text" name="activityName" size="20" maxlength="20"></td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Submit"></td></tr>
	</table>
	</form>
</body>
</html>
</xmp>

<p>**The classes simply align the text to the left or right.<br>
**You can change the "action" to the name of the page that you would like the result to post to.</p>

<p>Here is what the form looks like:</p>
<form method="POST" action="newpage.php">
<table>
	<tr><td class="right">Name:</td><td class="left"><input type="text" name="name" size="30" maxlength="30"></td></tr>
	<tr><td class="right">City:</td><td class="left"><input type="text" name="city" size="30" maxlength="30"></td></tr>
	<tr><td class="right">State:</td><td class="left"><input type="text" name="state" size="15" maxlength="15"></td></tr>
	<tr><td class="right">Country:</td><td class="left"><input type="text" name="country" size="30" maxlength="30"></td></tr>
	<tr><td class="right">Latitude:</td><td class="left"><input type="number" name="latitude" step="0.0001"></td></tr>
	<tr><td class="right">Longitude:</td><td class="left"><input type="number" name="longitude" step="0.0001"></td></tr>
	<tr><td class="right">Activity Name:</td><td><input type="text" name="activityName" size="20" maxlength="20"></td></tr>
	<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Submit"></td></tr>
</table>
</form>

<h3>What happens once the user enters data and clicks the submit button?</h3>
<p>We need to be able to use that data to search the API. The following PHP code first initializes a variable ($parameters). This variable
 will be passed in as the POSTFIELDS in the cURL code from the previous page. Next, it checks if a POST request has been made. If so,
 it checks for each of the form items. If they have been set, then it assigns the value to a variable, replaces any spaces with "+", 
 assigns the key to a variable, and lastly, appends the new parameters to the search string ($parameters).<br><br>
 Here is what the PHP code looks like for the first two inputs (Name and City). The same code could be created for the other inputs.</p>

<p class="output">
$parameters = '';<br>
if($_SERVER['REQUEST_METHOD'] === 'POST'){<br>
	&nbsp;if(isset($_POST['name']) && !empty($_POST['name'])){<br>
		&nbsp;&nbsp;$name = $_POST['name'];<br>
		&nbsp;&nbsp;$nameKey = 'q[name_eq]';<br>
		&nbsp;&nbsp;$parameters .= '' . $nameKey . '=' . $name;<br>
	&nbsp;}<br>
	&nbsp;if(isset($_POST['city']) && !empty($_POST['city'])){<br>
		&nbsp;&nbsp;$city = $_POST['city'];<br>
		&nbsp;&nbsp;$city = str_replace(' ', '+', $city);<br>
		&nbsp;&nbsp;$cityKey = 'q[city_eq]';<br>
		&nbsp;&nbsp;$parameters .= '' . $cityKey . '=' . $city . '&';<br>
	&nbsp;}<br>
}
</p>

<p>Let's look at an example. Say I entered "Bishop Ranch Open Space" in the name field, and "San Ramon" in the city field, like so:</p>
<table>
	<tr><td class="right">Name:</td><td class="left"><input type="text" name="name" value="Bishop Ranch Open Space" size="30" maxlength="30"></td></tr>
	<tr><td class="right">City:</td><td class="left"><input type="text" name="city" value="San Ramon" size="30" maxlength="30"></td></tr>
</table>
<p>This is what the $parameters variable would be set to, based on the code from above:</p>
<p class="output">$parameters = <b>q[name_eq]=Bishop+Ranch+Open+Space&q[city_eq]=San+Ramon&</b></p>

<p>This $parameters variable is passed in to the cURL code on line 4, like this:</p>
<p class="output">4. curl_setopt($curl, CURLOPT_POSTFIELDS, $parameters);</p>

<p>At this point, you can output all, or some of the results parameters to your user. Look at the previous page for a review on how to do this.</p>
<br>
<ul class="hnavbar">
	<li><a href="http://web.engr.oregonstate.edu/~mcconner/TrailPage5.php">< Back</a></li>
	<li><a href="http://web.engr.oregonstate.edu/~mcconner/TrailPage7.php">Next ></a></li>
</ul>
</body>
</html>