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


	<script type="text/javascript" src="../js/ajax.js"></script> 
</body>
</html>

