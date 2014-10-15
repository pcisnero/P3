
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lorem Ipsum Generator/Random User Generator</title>
    
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/journal/bootstrap.min.css" rel="stylesheet">
    
   <link rel="stylesheet" href="{{ URL::asset('/') }}css/mystyle.css" />.
	
	<style>
		a:link {
			text-decoration:underline;
		}
	</style>
	
		

	<style>
	
		
	</style>

    
    
</head>
    
<body>
    <div id="header">
<h1 id="text">Developer´s Best Friend</h1>
</div>
    
<div class='container'>

	



<h2 id="text">Lorem Ipsum Generator</h2>
<blockquote >
	Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. While lorem ipsum's still resembles classical Latin, it actually has no meaning whatsoever.
</blockquote>
	
	Number of Paragraphs.
    
   <hr>
	
	<form method='POST'>
	
		<input name="_token" type="hidden" value="pmJyVtgim9YsTFaorfA9Jn6HUPIfGz25kF2YuJwx">	
		<label id=text for="paragraphs">Paragraphs</label>				
		<input maxlength="2" name="paragraphs" type="text" value="10" id="paragraphs"> Max 10
		
		<br><br>
	<hr>		
		<input type="submit" value="CREATE">    
    </form>


<br>

<h2 id= "text">Random User Generator</h2>

<p>Random user Data.
    </p>

		<hr>		
	<form method="POST" action="PENDIENTE" accept-charset="UTF-8"><input name="_token" type="hidden" value="pmJyVtgim9YsTFaorfA9Jn6HUPIfGz25kF2YuJwx">	
	
        <label id=text for="users">How many users?</label>		<input maxlength="2" name="users" type="text" value="10" id="users"> Max 10
		<br>
		
		<br>
        <input name="telephone" type="checkbox">		<label id=text for="telephone">Telephone</label>		<br>
        
		<input name="birthdate" type="checkbox">		<label id=text for="birthdate">Birthdate</label>		<br>
			<hr>	
		<input type="submit" value="CREATE">    
    </form>
    

	
</div>

<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
<script src='//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>



  

@yield('content')
    
    <div id="footer">

</div>
    
</body>

</html>

