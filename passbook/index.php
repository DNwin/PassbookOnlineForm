<html>
<head>
	<style>
		form { border: 1px solid #61111; width: 400px; 
			   padding: 10x; background: #ccefff; 
			   border-radius: 15px; }
		h1 {font:italic bold 20px/30px Georgia, serif;}
		h2 {font:normal bold 16px/30px Georgia, serif;}
		
	</style>
		
</head>
<body>
	<h1>Free drink bonus program:</h1><br/>
	<form action="getpass.php" method=post>
	<h2>Bonus game question:</h2>
	 
	In which year was Lee's founded?
	<select size="1" name="year">
		<option>1999</option>
		<option>2003</option>
		<option>2009</option>
	</select></br>
	
	<h2>Your data:</h2>
	Your name:
	<input name="name" value="" /><br/>
	
	Your email address:
	<input name="email" value="" /><br/>
	
	Your favorite "Lee's" store:
	<select size="1" name="location">
		<option value="0">Brookhurst</option>
		<option value="1">Bolsa</option>
		<option value="2">Wesminster</option>
		<option value='3'>Asian Garden Mall</option>
	</select>
	
	<br/><br/>
	<input type="submit" value="Participate in the survey" />
	
	
	</form>
	

</body>
</html>