<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>You wanna join ?</title>
	<link rel="icon" type="image/icon" href="images/chat.png">
	<link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/animation.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
			$(document).ready(function(){
			  $("#myBtn").click(function(){
			    window.open("chatroom.php","_self");
			    return false;
			  });
			});
</script>
</head>
<body>
	<div class="container main-container">
	   <h1 class="brand">Live Chat <sub>room</sub></h1>

	   <div id="demo" class="carousel slide mt-5" data-ride="carousel">
		  <!-- Indicators -->
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		  </ul>
		  
		  <!-- The slideshow -->
		  <div class="carousel-inner row">
		    <div class="carousel-item active">
		      <p class="text info1">Life is not too easy. Sharing your problems with people, makes your life easier...</p>
		    </div>
		    <div class="carousel-item">
		      <p class="text info1">Life is really simple, but we insist on making it complicated.</p>
		    </div>
		    <div class="carousel-item">
		      <p class="text info1">In every life we have some trouble, but when you worry you make it double.</p>
		    </div>
		  </div>
		</div>

        <div class="container col-sm-6">
        	<p class="text info2">Want any solution ? your probs bothered you ? Don't worry! join live chat...talk with someone who you better know.</p>
        </div>

	   <div class="container col-sm-7 join-info">
	   	   <p class="text info3"> Wanna join ?
	   	   <button type="button" class="btn btn-info" id="myBtn">Let's Go</button>
	   	   </p>
	   </div>
	</div>
</body>
</html>