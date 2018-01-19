<html>
<head>
	<title>Search Page</title>
</head>
<body>

// we need to add our radio buttons to the search page over right over
	<form> 
		<input type="radio" name="searchTerm" value="major"> Major<br>
		<input type="radio" name="searchTerm" value="year"> Year<br>
		<input type="radio" name="searchTerm" value="name"> Name
	</form>

	<label>Enter search term:</label>
	<input type="text" id="search">
	<button id="searchButton" onclick="checkSearchTerm()">Search</button>
	<p id="searchResults"></p>

<!-- huhhhhhhhh ve u just seen what i did over loool no, connection was bad...what did you do lol over
	i connected the pages to this page... but the actual search page is the blank-cover page right? over
	yh ...I wanted to tel you so change the blank bla bla to searchpage.php and delete this one...it is a shame 
	i cant spell hmmmmmm  over
	<label>Enter Year Group:</label>
	<input type="text" id="year">
	<button id="yearButton" onclick="findUserByYear()">Search</button>
	<p id="yearResults"></p>

	<label>Enter Name:</label>
	<input type="text" id="name">
	
	<p id="nameResults"></p>
--> 
	<script type="text/javascript" src="../js/ajax.js"></script> 
</body>
</html>

