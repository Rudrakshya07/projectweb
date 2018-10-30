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
    <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
     <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="kars.css">



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
            
            window.location.href="../search/pramod.php?city="+city;
            
        }
    </script>
</head>
<body>

<!-- Search Form Demo -->
<div style="clear: both; margin-top: 10px;">

    <input type="text" class='mySearch' name="city" id="ls_query" placeholder="Type to start searching ..." <?php if(isset($_GET['city'])){echo "value='".$_GET['city']."'";} ?><Br>
    <input type="button" name="search" value="Search Hotels" onclick="call()">

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
   
    
  <div class="row" id="hotels">
    <div id="ripple-loader"></div>
  </div>
  <p id="id" style="display: none;"><?php if(isset($_GET['city'])){echo $row['City_ID'];} ?></p>
</div>
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
       
        
        fulhotel.className="shadow p-3 mb-5 bg-white rounded";
        imghotl.className="imghotel";
        detailhotl.className="detailhotel";
        pricehotl.className="pricehotel";
        
        
        
        fulhotel.id="fulhotel"+count;
        imghotl.id="imghotl"+count;
        detailhotl.id="detailhotl"+count;
        pricehotl.id="pricehotl"+count;
        
        var pricearray=[1800,2000,900,1200,2500,3200,700,3000,2600,1400,1600,800,8000];
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
