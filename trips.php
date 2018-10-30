<!DOCTYPE html>
<html>
<head>
	<title>trips</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet"><!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Pacifico|Signika+Negative" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="animate.css">
 <!-- datepicker -->
 <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/FreddyFY/material-datepicker/master/dist/material-datepicker.css">
  <script type="text/javascript" src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
  <script type="text/javascript" src="https://cdn.rawgit.com/FreddyFY/material-datepicker/master/dist/material-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link rel="stylesheet" type="text/css" href="tripscs.css">


</head>
<style type="text/css">
.paisa{
	font-family: 'Merriweather', serif;
	font-size: 25px;
	font-weight: 600;

}
.kaisa{
	font-family: 'Merriweather', serif;
	font-size: 28px;
	font-weight: 800;
}
.laisa{
	font-family: 'Merriweather', serif;
	font-size: 18px;
	font-weight: 800;
}
	#datea,#dateb
  	{
  		margin-left: 37%;width: 180px;text-align: center;
  	}
</style>
<body>
	
<div class="container-fluid" id="mainpic">
	<nav class="animated jackInTheBox navbar navbar-inverse" >
	  <div class="container-fluid">
	    <div class=" navbar-header">
	      <a class="navbar-brand" href="#">WebSiteName</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Home</a></li>
	      <li><a href="#">Page 1</a></li>
	      <li><a href="#">Page 2</a></li>
	    </ul>
	    <form class="navbar-form navbar-left" action="#">
	      <div class="form-group">
	        <input type="text" class="form-control" placeholder="Search">
	      </div>
	      <button type="submit" class="btn btn-default">Submit</button>
	    </form>
	  </div>
	</nav>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="smarup1.png"></button>


	<div class="container-fluid">
<div class="jumbotron" style="width: 40%; margin:0 auto;margin-top: 10%;">
	<p>Check out best Prices of this season </p>
<label>From</label><input  type="text" class="datepicker" id="datea">

<br>
<label>TO</label><input type="text" class="datepicker" id="dateb">
<button style="" class="btn waves-effect waves-light" type="submit" name="action" onclick="calc()">Check
    <i class="material-icons right">send</i>
  </button>
  <div class="pr">
  	
  </div>
  </div>
 <div class="row">
 
 </div>
		<div class="w3-content w3-display-container" style="width:1200px;height: 551px;">
	 	 <img class="mySlides" src="slsh1.jpg" style="width:100%">
	  <img class="mySlides" src="slsh2.jpg" style="width:100%">
	  <img class="mySlides" src="slsh3.jpg" style="width:100%">
	  <img class="mySlides" src="slsh4.jpg" style="width:100%">
	  <img class="mySlides" src="slsh5.jpg" style="width:100%">
	  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
	 <button class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)" style="border-radius:50%;color:black; background:#86a8e7;">&#10094;</button> 
 <button class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)" style="border-radius:50%;color:black; background:#86a8e7; ">&#10095;
 </button>
	    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
	    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
	    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
	    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
	    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
	  </div>
	</div>
		</div>
		
	</div>
</div>
<div class="container-fluid" id="trip-display">
	<div class="row" id="moods"style="padding: 3%;padding-left: 20%;background-color: white;">

		<h3 style="margin-left: 20%;">A Holiday for Every Mood</h3>
		<div class="col-sm-3">
			<div class="card">
				  <img src="a14.jpg" alt="Avatar" style="width:100%">
				 <div class="texts">Family</div>
				  <div class="cont">
				    <h4><b>Family</b></h4> 
				    <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
				    <p></p> 
			  </div>
			</div>
		</div>
			<div class="col-sm-3">
			<div class="card">
				  <img src="a12.jpg" alt="Avatar" style="width:100%">
				  <div class="texts">Couple</div>
				  <div class="cont">
				    <h4><b>Couple</b></h4> 
				    <p></p> 
			  </div>
			</div>
		</div>
			<div class="col-sm-3">
				<div class="card">
					  <img src="a13.jpg" alt="Avatar" style="width:100%">
					  <div class="texts">Friends</div>
					  <div class="cont">
					    <h4><b>Friends</b></h4> 
					    <p></p> 
				  </div>
				</div>
			</div>

		</div>
	<div class="row" style="padding: 3%;padding-left: 20%;">
		<div class="col-sm-3">
			<div class="card">
				  <img src="a1.jpg" alt="Avatar" style="width:100%">
				  <div class="cont">
				    <h4><b>Great European Holidays</b></h4> 
				    <p class="laisa">Rs 37000</p>
				    <p class="kaisa">Offer Valid till 2 days!!</p> 
			  </div>
			</div>
		</div>
			<div class="col-sm-3">
			<div class="card">
				  <img src="a2.jpg" alt="Avatar" style="width:100%">
				  <div class="cont">
				    <h4><b>Magic Mauritius Moments</b></h4> 
				    <p class="laisa">Rs 17000</p>
				    <p class="kaisa"> Hurry Up!!</p> 
				    
			  </div>
			</div>
		</div>
			<div class="col-sm-3">
				<div class="card">
					  <img src="a4.jpg" alt="Avatar" style="width:100%">
					  <div class="cont">
					    <h4><b>Enjoy Bali Best Packages</b></h4> 
					    <p class="laisa">Rs 17000</p>
				    <p class="kaisa">Limited Period offer!!</p>  
				  </div>
				</div>
			</div>

		</div>
	<div class="row" style="padding: 3%;padding-left: 20%;">
		<div class="col-sm-3">
			<div class="card">
				  <img src="a9.jpg" alt="Avatar" style="width:100%">
				  <div class="cont">
				    <h4><b>Singapore Skyscrappers</b></h4> 
				    <p class="laisa">Rs 7000</p>
				    <p class="kaisa">Grab the chance!!</p> 
			  </div>
			</div>
		</div>
			<div class="col-sm-3">
			<div class="card">
				  <img src="a6.jpg" alt="Avatar" style="width:100%">
				  <div class="cont">
				    <h4><b>Gateway of Mumbai</b></h4> 
				    <p>Exciting trip to Mumbai</p> 
				    <p class="laisa">Rs 7000</p>
				    <p class="kaisa">Limited Period offer!!</p> 
			  </div>
			</div>
		</div>
			<div class="col-sm-3">
				<div class="card">
					  <img src="a5.jpg" alt="Avatar" style="width:100%">
					  <div class="cont">
					    <h4><b>Dubai Fever</b></h4> 
					    <p class="laisa">Rs 22000</p>
				    <p class="kaisa">Valid till 3rd Nov!!</p> 
				  </div>
				</div>
			</div>

		</div>	
	<div class="row" style="padding-left: 2%; background-color: white;">
		<h3>A Holiday for Every Mood</h3>
		<div class=" wow animated pulse col-sm-4">
			<div class="card">
				  <img src="a9.jpg" alt="Avatar" style="width:100%">
				  <div class="cont">
				    <h4><b>Simply Singapore</b></h4> 
				    <p class="kaisa">Explore now!!</p> 
				    <p class="kaisa">5 nights 6 days</p> 
				     <p class="paisa">Rs 27000</p>
			  </div>
			</div>
		</div>
			<div class="wow animated pulse col-sm-4">
			<div class="card">
				  <img src="a8.jpg" alt="Avatar" style="width:100%">
				  <div class="cont">
				    <h4><b>Ellegant Eifel Tower</b></h4> 
				    <p class="kaisa">View the best in paris</p> 
				    <p class="kaisa">4 nights 5 days</p> 
				     <p class="paisa">Rs 64000</p>
			  </div>
			</div>
		</div>
			<div class="wow animated pulse col-sm-4">
				<div class="card">
					  <img src="a7.jpg" alt="Avatar" style="width:100%">
					  <div class="cont">
					    <h4><b>Travelling-divas Exotic Srilanka!</b></h4> 
					    <p class="kaisa">Few slots left </p> 
					    <p class="kaisa">6 nights 7 days</p> 
					    <p class="paisa">Rs 34000</p>
					    
				  </div>
				</div>
			</div>

		</div>
		<div class="row" id="ts">
			<h1 style="text-align: center;">Travel Stories</h1>
			<div class="col-sm-3">
				<div class="card">
					  <img src="ts1.jpg" alt="Avatar" style="width:100%">
					  <div class="cont">
					  	 <img src="bloger1.jpg" alt="Avatar" class="author" width="80px" height=80px>
					  	 <h5 class="author-name">Lauren Claudia</h5>
					    <h4><b>Fine dinning at Australia!</b></h4> 
					   
					    <p style="font-family: 'Signika Negative', sans-serif;">How far will you travel to eat well? How about all the way to the land Down Under? MasterChef Australia has already given us a ‘taste’ of the gorgeous local produce grown there and most 'Aussie' restaurants take pride in serving up dishes that showcase it. Combined with some lovely local wines, Australian restaurants promise to celebrate the good lexperiences in Australia that you . </p> 
				  </div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					  <img src="ts2.jpg" alt="Avatar" style="width:100%">
					  <div class="cont">
					  	<img src="bloger2.jpg" alt="Avatar" class="author" width="80px" height=80px>
					  	<h5 class="author-name">Joe Phill</h5>
					    <h4><b>Easy Europe!</b></h4> 
					    
					    <p style="font-family: 'Signika Negative', sans-serif;" >Europe is one destination that can hardly be covered in one go. If you are planning your very first trip to this beautiful continent with limited time and budget, your itinerary must wheel around France and Switzerland. Whatever you choose to do, these two gorgeous countries promise you a dreamy experience entwined . What’s more, we’ve got every day of your vacation carefully planned out! </p> 
				  </div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					  <img src="ts4.jpg" alt="Avatar" style="width:100%">
					  <div class="cont">
					  	<img src="bloger3.jpg" alt="Avatar" class="author" width="80px" height=80px>
					  	<h5 class="author-name">Alexander vosco</h5>
					    <h4><b>Go Goa Gone!!</b></h4> 
					    
					    <p style="font-family: 'Signika Negative', sans-serif;">Goa is synonymous with gorgeous beaches. So it makes perfect sense to check into a Goa hotel that is right by the sea and offers breathtaking views of the ocean. We have listed out some of the most gorgeous beachfront properties in Goa for you.some lovely local wines, Australian restaurants promise to celebrate the good life. Here’s our pick of 5 incredible dining experiences in Australia that you .</p> 
				  </div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					  <img src="ts3.jpg" alt="Avatar" style="width:100%">
					  <div class="cont">
					  	 <img src="bloger2.jpg" alt="Avatar" class="author" width="80px" height=80px>
					  	 <h5 class="author-name">Joe Phill</h5>
					    <h4><b>Amazing  Andaman!</b></h4> 
					    
					   
					    <p style="font-family: 'Signika Negative', sans-serif;">Think clear turquoise waters, unspoilt beaches, stunning rainforests, gorgeous corals, ancient tribes – where in India can you find all this and more? Why, on the Andaman and Nicobar Islands, of course! A tropical paradise in the truest sense of the term, the archipelago of islands is located about 1,000 kilometres off the eastern coast of India in Australian restaurants promise to celebrate the good life. </p> 
				  </div>
				</div>
			</div>
		</div>
	</div>
	

</body>
<script type="text/javascript">
  var miDate=new Date();
	var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems,{
    	showClearBtn: true,
    	minDate: miDate	
    });

    function calc()
    {
    	
    	var stdate=new Date(document.getElementById('datea').value);
    	var endate=new Date(document.getElementById('dateb').value);
    	var diff=Math.floor((endate-stdate)/(1000*60*60*24));
    	if(diff<0)
    	{
    		alert("You can't choose a previous date. Please try again");
    		document.getElementById('dateb').value="";
    	}
    	else if(diff==0)
    	{
    		alert("You can't choose the same date ASSHOLE");
    		document.getElementById('dateb').value="";
    	}
    	else
    	{
    		alert(diff+" days"+"nights")
    		
    		console.log("Difference: "+diff);
    	}

    	  
    }
</script>
<script src="wow.js"></script>

 <script>
 	var miDate=new Date();
	var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems,{
    	showClearBtn: true,
    	minDate: miDate	
    });

    function calc()
    {
    	
    	var stdate=new Date(document.getElementById('datea').value);
    	var endate=new Date(document.getElementById('dateb').value);
    	var diff=Math.floor((endate-stdate)/(1000*60*60*24));
    	if(diff<0)
    	{
    		alert("You can't choose a previous date. Please try again");
    		document.getElementById('dateb').value="";
    	}
    	else if(diff==0)
    	{
    		alert("You can't choose the same date ASSHOLE");
    		document.getElementById('dateb').value="";
    	}
    	else
    	{
    		alert(diff+" days")
    		console.log("Difference: "+diff);
    	}

    	  
    }
              new WOW().init();
    </script>
<script type="text/javascript">
	<!--  window.onscroll = function() {scrollFunction()};
		function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
        

    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}


function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
	var materialPicker001 = new MaterialDatepicker('#materialpicker001');
	var materialPicker002 = new MaterialDatepicker('#materialpicker002');
	document.getElementById('materialpicker001').addEventListener("input", words);
	document.getElementById('materialpicker002').addEventListener("input", words);
	function words()
	{
		var x= document.getElementById('materialpicker001').value;
		var y= document.getElementById('materialpicker002').value;
		
		var z= y-x;
		document.getElementsByClassName('prices').innerHTML=z*200;	

		

	}


	var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block"; 

  dots[slideIndex-1].className += " w3-white";
}

</script>
<script>
  var miDate=new Date();
	var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems,{
    	showClearBtn: true,
    	minDate: miDate	
    });

    function calc()
    {
    	
    	var stdate=new Date(document.getElementById('datea').value);
    	var endate=new Date(document.getElementById('dateb').value);
    	var diff=Math.floor((endate-stdate)/(1000*60*60*24));
    	if(diff<0)
    	{
    		alert("You can't choose a previous date. Please try again");
    		document.getElementById('dateb').value="";
    	}
    	else if(diff==0)
    	{
    		alert("You can't choose the same date ASSHOLE");
    		document.getElementById('dateb').value="";
    	}
    	else
    	{
    		alert(diff+" days")
    		console.log("Difference: "+diff);
    	}

    	  
    }
</script>



</html>