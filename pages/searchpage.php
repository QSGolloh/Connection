<html>
<head>
	<title>Search Page</title>
</head>
<body>

	<form> 
		<input type="radio" name="searchTerm" value="major"> Major<br>
		<input type="radio" name="searchTerm" value="year"> Year<br>
		<input type="radio" name="searchTerm" value="name"> Name
	</form>

	<label>Enter search term:</label>
	<input type="text" id="search">
	<button id="searchButton" onclick="checkSearchTerm()">Search</button>
	<p id="searchResults"></p>

<!--
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

