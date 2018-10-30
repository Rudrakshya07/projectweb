<?php

include('config.php');
if(isset($_GET['city']))
{
    $city=$_GET['city'];
    echo "<script>document.getElementById('ripple-loader').style.display='block';</script>";
    $sql = "SELECT City_ID from mycity where City_name='".$city."';";

if($result = $db->query($sql))
{
$row = $result->fetch_assoc();

}
}


$DS = DIRECTORY_SEPARATOR;
file_exists(__DIR__ . $DS . 'core' . $DS . 'Handler.php') ? require_once __DIR__ . $DS . 'core' . $DS . 'Handler.php' : die('Handler.php not found');
file_exists(__DIR__ . $DS . 'core' . $DS . 'Config.php') ? require_once __DIR__ . $DS . 'core' . $DS . 'Config.php' : die('Config.php not found');

use AjaxLiveSearch\core\Config;
use AjaxLiveSearch\core\Handler;

if (session_id() == '') {
    session_start();
}

    $handler = new Handler();
    $handler->getJavascriptAntiBot();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="kars.css">
  <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
     <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="chat.css">




    <title>Search Hotels</title>

    <!-- Live Search Styles -->
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/animation.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="css/fontello-ie7.css">
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/ajaxlivesearch.min.css">
   
    <script type="text/javascript">
        
        function call()
        {
            
            var city=document.getElementById('ls_query').value;
            
            window.location.href="../search/kar.php?city="+city;
            
        }
    </script>
   
</head>
<style type="text/css">
  .slider {
    -webkit-appearance: none;
    width: 100%;
    height: 25px;
    background: #d3d3d3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.slider:hover {
    opacity: 1;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    background: #4CAF50;
    cursor: pointer;
}

.slider::-moz-range-thumb {
    width: 25px;
    height: 25px;
    background: #4CAF50;
    cursor: pointer;
}
.ico{
  margin-left: 5px;
}
.col-md-3{
  font-family: 'Bitter', serif;
font-size: 18px;
}
</style>
<body>

<!-- Search Form Demo -->
<div style=" margin-top: 10px;" id="searching">

    <input type="text" class='mySearch' name="city" id="ls_query" placeholder="Type to start searching ..." <?php if(isset($_GET['city'])){echo "value='".$_GET['city']."'";} ?><Br>
    <input type="button" name="search" value="Search Hotels" onclick="call()" >

</div>

<!-- /Search Form Demo -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.11.1.min.js"></script>


<!-- Live Search Script -->
<script type="text/javascript" src="js/ajaxlivesearch.min.js"></script>

<script>
jQuery(document).ready(function(){
    jQuery(".mySearch").ajaxlivesearch({
        loaded_at: <?php echo time(); ?>,
        token: <?php echo "'" . $handler->getToken() . "'"; ?>,
        max_input: <?php echo Config::getConfig('maxInputLength'); ?>,
        onResultClick: function(e, data) {
            // get the index 0 (first column) value
            var selectedOne = jQuery(data.selected).find('td').eq('0').text();

            // set the input value
            jQuery('#ls_query').val(selectedOne);

            // hide the result
            jQuery("#ls_query").trigger('ajaxlivesearch:hide_result');
        },
        onResultEnter: function(e, data) {
            // do whatever you want
            // jQuery("#ls_query").trigger('ajaxlivesearch:search', {query: 'test'});
        },
        onAjaxComplete: function(e, data) {

        }
    });
})
</script>

<div class="container">
  <div class="row">
   <div class="col-md-3" id="side-data" style="border: 2px solid white;">
     <div class="row"><h3>Categories</h3>
        <label class="radio-inline" ><input type="radio" name="optradio" checked>Honeymoon</label>
        <label class="radio-inline"><input type="radio" name="optradio">Solo</label>
        <label class="radio-inline" id="fam"><input type="radio" name="optradio">Family</label>
     </div> 
     <div class="row" id="budget">
    <div style="float: left;">  <h3>Budget in(Rs)</h3></div>
      <div ><span class="close" style="color: black;">&#9660;</span></div>
      <div class="checkbox">
          <label><input type="checkbox" value="">3000</label>

        </div>
        <div class="checkbox">
          <label><input type="checkbox" checked value="">5000</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="" >7000</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="" >9000</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="" >12000</label>
        </div>
             </div>
 <div class="row" id="ratings">
      <h3>Ratings</h3>
      
      <span class="close" style="color: black;">&#9660;</span>
      <div class="checkbox">
          <label><input type="checkbox" value="">5<span class="glyphicon glyphicon-star" style="color: rgb(250,194,46);"></span></label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="">4<span class="glyphicon glyphicon-star " style="color: rgb(250,194,46);"></span></label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="" >3<span class="glyphicon glyphicon-star " style="color: rgb(250,194,46);"></span></label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="" >2<span class="glyphicon glyphicon-star" style="color: rgb(250,194,46);"></span></label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="" >1<span class="glyphicon glyphicon-star" style="color: rgb(250,194,46);"></span></label>
        </div>
             </div>
       <div class="row" id="inclusion">
          <h3>Included</h3>
      
      <span class="close" style="color: black;">&#9660;</span>
      <div class="checkbox">
          <label><input type="checkbox" value="">wifi<img src="wifi.png"  class="ico"></label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="">food<img src="dinner.png" class="ico"></label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="" >scenery-view<img src="scene.png" class="ico"></label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="" >tourist-guide<img src="detective.png" class="ico"></label>
        </div>
       
             </div> 
        <div class="row" id="inclusion">
         <span style="font-family: 'Archivo Narrow', sans-serif;font-size: 20px;">1</span> <span style="margin-left: 150px;font-family: 'Archivo Narrow', sans-serif; font-size: 20px;">10</span>
          <input type="range" min="1" max="10" value="3" class="slider" id="myRange" onchange="f(this.value)">
         <p style="font-family: 'Archivo Narrow', sans-serif;font-size: 20px;"><b>No of days:</b><span id="dinn" style="margin-left: 5px"><b>3</b></span></p>
      
          
       
         </div>
        </div>
  <div class="col-md-8">
  <div class="row" id="hotels">
    <div id="ripple-loader"></div>
  </div>
  <p id="id" style="display: none;"><?php if(isset($_GET['city'])){echo $row['City_ID'];} ?></p>
</div>
</div>
<button class="open-button" onclick="openForm()" style="width: 60px;"><img src="chat.png"></button>

<div class="chat-popup" id="myForm" style="max-width: 250px;">
  <form action="#" class="form-container" method="post">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>

    <div id="display" style="background:#91EAE4; font-family:' Archivo'; padding: 2px; margin-bottom:10px; "> Hey! I'm Travelx Trip Planner... Are you looking for help in planning your trip?</div>
    <input type="text" placeholder="Type message.." name="msg" class="form-control"  id="txt-area" >


    <button type="button" class="btn" onclick="sent()" style="border-radius: 40%; width: 90px;margin-left: 3px;margin-top: 7px;">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()" style="border-radius: 40%; width: 90px; margin-left: 3px;margin-top: 3px;">Close</button>
  </form>
</div>
</div>

<div id="footer" style="
  font-size:14px;
  color:#ffff;
  background-color: #211f22;
  text-align: center;
  border-top: 2px solid;
  border-bottom: 2px solid;
  padding: 2%;
  height: 120px;
  position: absolute;
    bottom: 0;
    width: 100%;
">
    <p>designed by | HaraRudrakshya Sahoo | &copy;All Rights Reserved</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  </div> 

  <script>
    function f(val){
      document.getElementById('dinn').innerHTML=val;

    }
    
function openForm() {
    document.getElementById("myForm").style.display = "block";
}
function sent(){
      var x= document.getElementById("txt-area").value;
        
       var res=""
       var res1=""
       var res2=""
       var res3=""
    res = x.match(/romantic/gi);
    res1 = x.match(/solo/gi);
    res2 = x.match(/Friends/gi);
    res3 = x.match(/Family/gi);

      if (x=="yes"||x=="ya"||x=="yeah"||x=="yeah") {
        document.getElementById("display").innerHTML="what type of trip are you planning?<br>select one<br>A romantic trip<br>A Family trip<br>Trip with friends<br> Solo trip"
        document.getElementById("txt-area").value=" "
      }
      else 
    if(res!=null)
    {
       document.getElementById("display").innerHTML="Here is the link to all the romantic desitinations available in  our site "+ "romantic websites".link("http://localhost:8080/hara/search/trips.php#moods");
      res=""
       document.getElementById("txt-area").value=" "
    }
    else 
      if(res1!=null)
    {
       document.getElementById("display").innerHTML="Here is the link to all the solo trip desitinations available in  our site "+ "Solo trip desitinations".link("http://localhost:8080/hara/search/trips.php#moods");
      res1=""
       document.getElementById("txt-area").value=" "
    }
    else 
      if(res2!=null)
    {
       document.getElementById("display").innerHTML="Here is the link to all the Friends trip desitinations available in  our site "+ "Friends holiday desitinations".link("http://localhost:8080/hara/search/trips.php#moods");
      res2=""
       document.getElementById("txt-area").value=" "
    }
    else 
      if(res3!=null)
    {
       document.getElementById("display").innerHTML="Here is the link to all the Family trip desitinations available in  our site "+ "Family holiday desitinations".link("http://localhost:8080/hara/search/trips.php#moods");
      res3=""
       document.getElementById("txt-area").value=" "
    }
    else{
      document.getElementById("display").innerHTML="Couldn't get you"
    }
    
      

    }
function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>
<script>

var id=document.getElementById('id').innerHTML;

(function() {
  var GoibiboAPI = "http://developer.goibibo.com/api/voyager/get_hotels_by_cityid/?app_id=76f5b912&app_key=0af8f3d4cf4f48fe7722f85dff255530&city_id="+id;

  console.log(GoibiboAPI);
  $.getJSON( GoibiboAPI, {
    
  })
    .done(function( data ) {
        document.getElementById('ripple-loader').style.display="none";
      $.each( data, function( i, item ) {
        var count=0;

        $.each( item, function( j, items ) {



        
        
          var x=item[j];
          if(x.hotel_data_node.img_selected.hasOwnProperty('thumb'))
          {
            console.log("Name: "+x.hotel_geo_node.name);
        console.log(x);
        console.log("Rooms Available: "+x.hotel_data_node.no_of_rooms);

        console.log(x.hotel_data_node.loc.location);
        console.log(x.hotel_data_node.img_selected.thumb.l);
        console.log(x.hotel_data_node._id);
        console.log("Rating: "+x.hotel_data_node.rating);
        var fulhotel = document.createElement("div");

        var imghotl = document.createElement("div");
        var detailhotl = document.createElement("div");
        
        var pricehotl=document.createElement("div");
          count++;
       
        
        fulhotel.className="cardmain";
        imghotl.className="imghotel";
        detailhotl.className="detailhotel";
        pricehotl.className="pricehotel";
        
        
        
        fulhotel.id="fulhotel"+count;
        imghotl.id="imghotl"+count;
        detailhotl.id="detailhotl"+count;
        pricehotl.id="pricehotl"+count;

        
        var pricearray=[1800,2000,900,1200,2500,3200,7000,3000,2600,1400,1600,800,8000];
        var rand = pricearray[Math.floor(Math.random() * pricearray.length)];
        var cutprice=rand+800;
    
   var st=x.hotel_data_node.rating;
   var stars="";
   for(i=1;i<=5;i++)
   {
    if(i<=st)
    {
        stars=stars+"<span class='fa fa-star checked'></span>";
    }
    else
    {
        stars=stars+"<span class='fa fa-star'></span>";
    }
   } 
   console.log(stars);
    
    imghotl.innerHTML="<img class='imaag' src="+x.hotel_data_node.img_selected.thumb.l+">";
    detailhotl.innerHTML=x.hotel_geo_node.name+"<br>"+stars+" &nbsp;<br><img src='img/location.png' width='16px' height='16px'>&nbsp;"+x.hotel_data_node.loc.location+"<br><img src='img/wifi.png' width='16px' height='16px'>&nbsp;Free WiFi&nbsp;<img src='img/gym.png' width='16px' height='16px'>&nbsp;Gym&nbsp;<img src='img/breakfast.png' width='16px' height='16px'>&nbsp;Free Breakfast<br><p id='avail'>Rooms available: "+x.hotel_data_node.no_of_rooms+"</p>";
    pricehotl.innerHTML="Price Per Night<br><del>Rs "+cutprice+"</del><p id='price'>Rs "+rand+"</p><button type='button' class='btn btn-success'>Book Now</button>";
    var hdiv=document.getElementById('hotels');
      hdiv.appendChild(fulhotel);
      $('#fulhotel'+count).append(imghotl);
      $('#fulhotel'+count).append(detailhotl);
      $('#fulhotel'+count).append(pricehotl);
          }

        
      
      
      

      

 /*<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
  </div>
</div>
*/

        

      });
        
        
        
      });
    });
})();




</script>

</body>
</html>
