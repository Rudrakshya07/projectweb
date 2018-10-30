<?php

include('config.php');
if(isset($_GET['city']))
{
    $city=$_GET['city'];
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
    <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
     <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Search Hotels</title>

    <!-- Live Search Styles -->
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/animation.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="css/fontello-ie7.css">
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/ajaxlivesearch.min.css">
    <style type="text/css">
     body{
    margin:0;
    padding: 0;
    min-height: 100%;
    position: relative;
    cursor: default;
    font-family: 'Open Sans', sans-serif;

  }
  body::after{
    content: '';
    display: block !important;
    height: 120px !important;
  }
#searching{
  
  width: 100%;
  background-image: url("m1.jpg");
  padding: 6%;


}

        input[type=button]
        {
            margin-left: 75%;

            padding: 5px 5px 5px 5px;
            font-family: Arial;
            background-color: #5cd25c;
            color: white;
            border-radius: 15px;
            cursor: pointer;
           

        }
        input[type=button]:hover
        {
            margin-left: 75%;
            padding: 5px 5px 5px 5px;
            font-family: Arial;
            background-color: white;
            background-color: #834fff;

        }
        .flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
  img {
    height: 300px;
    float: left;
  }
  .col-md-4
  {
    display: block;
    
    background-color: white;
    width:300px;
    height: 300px;
    margin-top: 5%;
    margin-left: 10%;
    font-family: 'Archivo Narrow', sans-serif;
    font-size: 40px;
    border: 2px 
    
  }
  .col-md-4 img{
    max-width: 300px;
  }
  a{
    text-decoration: none;
  }
  #side-data{
  
  margin-left: 2%;

}
#hotel-data{
  background: red;
}
.radio-inline{
  padding: 2%;
  margin-left: 9%;
}
#fam{
margin-left: 9%;
}
#budget,#ratings,#inclusion{
  
  padding: 4%;
}
.close{
  color: black;
  z-index: -999;
}
.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
    </style>
    <script type="text/javascript">
        function call()
        {
            
            var city=document.getElementById('ls_query').value;
            alert("City: "+city);
            window.location.href="../search/index.php?city="+city;
        }
    </script>
</head>
<body>

<!-- Search Form Demo -->
<div class="container" id="searching" style="clear: both">

    <input type="text" class='mySearch' name="city" id="ls_query" placeholder="Type to start searching ..."><Br>
    <input type="button" name="search" value="Search Hotels" onclick="call()">

</div>

<div class="container">
  <div class="row" id="hotels">
    <div class="col-md-2" id="side-data">
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
          <label><input type="checkbox" value="">5000</label>
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
          <label><input type="checkbox" value="">wifi<span class="glyphicon glyphicon-star" style="color: rgb(250,194,46);"></span></label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="">food<span class="glyphicon glyphicon-plate-of-food "></span></label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="" >scenery-view<span class="glyphicons glyphicons-camping"></span></label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="" >tourist-guide<span class="glyphicons glyphicon-old-man"></span></label>
        </div>
       
             </div> 
        <div class="row" id="inclusion">
          <h3>Included</h3>
      
          <span class="close" style="color: black;">&#9660;</span>
          <div class="checkbox">
              <label><input type="checkbox" value="">wifi<span class="glyphicon glyphicon-wifi"></span></label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="">food<span class="glyphicon glyphicon-plate-of-food "></span></label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" >scenery-view<span class="glyphicons glyphicons-camping"></span></label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" >tourist-guide<span class="glyphicons glyphicon-old-man"></span></label>
            </div>
       
         </div>

    </div>
    
  </div>
  

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
  <div class="container">
  <div class="row" id="hotels">
    
  </div>
  <p id="id"><?php if(isset($_GET['city'])){echo $row['City_ID'];} ?></p>
</div>
<script>

var id=document.getElementById('id').innerHTML;

(function() {
  var GoibiboAPI = "http://developer.goibibo.com/api/voyager/get_hotels_by_cityid/?app_id=76f5b912&app_key=0af8f3d4cf4f48fe7722f85dff255530&city_id="+id;

  console.log(GoibiboAPI);
  $.getJSON( GoibiboAPI, {
    
  })
    .done(function( data ) {
      $.each( data, function( i, item ) {
        var count=0;

        $.each( item, function( j, items ) {

        
        
          var x=item[j];
        console.log("Name: "+x.hotel_geo_node.name);

        console.log(x.hotel_data_node.img_selected.thumb.l);
        console.log(x.hotel_data_node._id);
        var txt3 = document.createElement("div");

        var flipc = document.createElement("div");
        var flipcinn = document.createElement("div");
        var flipcfront=document.createElement("div");
        var flipcback=document.createElement("div");
          count++;
       
        
        txt3.className="col-md-4";
        flipc.className="flip-card";
        flipcinn.className="flip-card-inner";
        flipcfront.className="flip-card-front";
        flipcback.className="flip-card-back";
        
        
        txt3.id="col"+count;
        flipc.id="flipc"+count;
        flipcinn.id="flipcinn"+count;
        flipcfront.id="flipcfront"+count;
        flipcback.id="flipcback"+count;
        
        
    
    flipcfront.innerHTML="<img  src="+x.hotel_data_node.img_selected.thumb.l+">";
    flipcback.innerHTML="Name: "+x.hotel_geo_node.name;
    var hdiv=document.getElementById('hotels');
      hdiv.appendChild(txt3);
      $('#col'+count).append(flipc);
      $('#flipc'+count).append(flipcinn);
      $('#flipcinn'+count).append(flipcfront);
      $('#flipcinn'+count).append(flipcback);
      
      

      

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
