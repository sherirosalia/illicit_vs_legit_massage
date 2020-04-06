<?php 
session_start();
    

error_reporting( E_ALL );
ini_set( 'display_errors', 1 );
$title = "illicit reviews";
include_once 'templates/header.php';
$conn = include('config.php'); 
// echo 'connected to database';
	  
if(!$conn) //verify database connection
	
{
	die('cannot display quotes due to server error');
} //end of connection 

elseif($conn){
    // echo 'connected to database';
}

//$query = $dbh->prepare("SELECT * FROM ad_words ORDER BY id ASC");
$query = $dbh->prepare("SELECT * FROM review_10 WHERE id BETWEEN 0 AND 10");
$query->bindParam(':frequency', $frequency);
$query->bindParam(':keyword', $keyword);
$query->bindParam(':id', $id);

if ($query->execute()) {
  $json=[];
  $json2=[];
  while ($row = $query->fetch(PDO::FETCH_ASSOC) )
    {
      extract($row);
      // $json[]=array_slice($key_word, 0, 10);
      // $json2[]=array_slice($frequency, 0, 10);
      $json[]=$keyword;
      $json2[]=(int)$frequency;
     
      
     
    } 
  }
    //echo json_encode($json);
    $word_list = json_encode($json);
    $counts = json_encode($json2);
    
    // echo $word_list . '<br>' . $counts;
  
  
  // echo json_encode($json2);
    // var_dump($json);
    // var_dump($json2);
   
// Fetch the marker info from the database 
$result = $db->query("SELECT * FROM illicit_locations"); 
 
// Fetch the info-window data from the database 
$result2 = $db->query("SELECT * FROM illicit_locations"); 
  
  ?>
<div class="container">
    <div class="jumbotron bg-danger bg-gradient-secondary">
        <div class="container">
            <h1 class="display-4 text-white" >Illicit Locations Reviewed</h1>
            <p class="lead text-white">Data science applied to identifying the bad actors 
            in the illicit sex and human trafficking trade which seem to be increasingly operating from shadows of the spa industry.            
            </p>
            <p class="lead text-white">           
            </p>
        </div>
    </div>
    <!-- end of jumbotron -->


<!-- end of creating space -->
<div class="container">
    <div class="row">

        <div class="col-md-12 align-self ">
            
            <!-- <div class="card card mb-3 border-0"> -->
           
                <h5>Permeating San Diego: Sexual Massage Locations</h5>
                
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.</p>
        </div>
    </div>
</div> 
<!-- end of permeating container -->

<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->

<!-- beginning of google rubmaps display -->
<div class="container">
 <div class="row">


      <div class="col-md-4 align-self float-left">
          
          <!-- <div class="card card mb-3 border-0"> -->
          <h5>Rubmaps Locations</h5>
                  <p>Rubmaps.....olestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                   Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                  Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                  vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                  sed. At per alii prompta, nominavi necessitatibus est ea.</p>
      </div>

        <div class="col-md-8 float-right" >
        
        <div id="mapCanvas" style="height: 450px;"></div>
                
        </div>   <!-- end of iframe -->
    </div>   <!-- end of row -->
</div>   <!-- end of container -->
<!-- end of google rubmaps display -->


<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>

<!-- beginning of table heading -->
<div class='container'>
    
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><h4>SENSITIVE VIEWER WARNING: The following may be disturbing and has explicit content</h4><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>

<div class="container">
    <div class="row">

        <div class="col-md-12 align-self ">
            
            <!-- <div class="card card mb-3 border-0"> -->
                <h5>Table of rubmaps locations</h5>
                
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 ">
            <!-- <div class="card card mb-3 border-0"> -->
                <div class="tableFixHead" id="myTable" style="height:400px;">
                <section>
                    <table class="table table-hover table table-striped ">
                    <thead class="thead-dark">
                        <tr>
                            <th>Illicit Locations: Line by Line</th>
                        </tr>
                    </thead> 

                                <?php
                                $query = $dbh->prepare("SELECT * FROM illicit_locations ORDER BY id ASC");
                            
                                $query->bindParam(':id', $id);
                                $query->bindParam(':formatted_address', $formatted_address);
                            


                                if ($query->execute()) {

                                while ($row = $query->fetch(PDO::FETCH_ASSOC) )
                                // var_dump($row['frequency']);

                                {
                                        echo '<tr>
                                    
                                    <td class="title">'.$row['id'].'</td>
                                    <td class="title">'.$row['Name'].'</td>
                                    <td class="title">'.$row['formatted_address'].'</td>
                                    
                                    
                                    ';
                                    }//end of query
                                    
                                    //$dbh=NULL;

                                    
                                
                                } else {
                                    print '<p style="color: red;">Connection Error</p>';
                                }

                                ?>

                                </tr> 
                        </table>
                        </section>
                    <!-- </div> end of card  -->
                    </div> <!-- end of table div -->
                </div> <!-- end of  table column  -->
            <div class="col-md-1"></div>
                    
    </div>   <!-- end of illicit locations table row -->

</div>


<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->
<div class="container">
    <div class="row">

        <div class="col-md-12 align-self ">
            
            <!-- <div class="card card mb-3 border-0"> -->
                                
                <h5>Permeating San Diego: Sexual Massage Locations</h5>
                
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.</p>
        </div>
    </div>
</div> 

<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <h5>How the search for illicit places works</h5>
          <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
            no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
            Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
            Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
            vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
            sed. At per alii prompta, nominavi necessitatibus est ea.
          </p>
        </div>        
      </div>
      </div>
<div class="container">
  

  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="resources/rubmap_search.png"  target="_blank">
          <img src="resources/rubmap_search.png"  alt="meimin" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="data_image/ch_wom.png"  target="_blank">
          <img src="data_image/ch_wom.png"  alt="camtc" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="data_image/lb_footcaere.png"  target="_blank">
          <img src="data_image/lb_footcare.png"  alt="sd biz" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- creating some space and a thin line -->
<div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
<!-- </div> -->


<!-- add dividing line -->

<!-- beginning of top 100 word association table -->

  <div class="row">
        <div class="col-md-12">
          <h5>What the reviews are like</h5>
            <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
            no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
              Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
            Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
            vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
            sed. At per alii prompta, nominavi necessitatibus est ea.
            </p>
          </div>    <!-- end reviews paragraph and header div--> 
  </div>     
  <div class="row">
      <div class="col-md-1"> </div>     

      <div class="col-md-10 ">
          <!-- <div class="card card mb-3 border-0"> -->
            <div class="" id="myTable">
              <section>
                <table class="table table-hover table table-striped ">
                  <thead class="thead-dark">
                      <tr>
                        <th> Reviews from Rubmaps</th>
                      </tr>
                  </thead> 
                
                
                  <!-- PHP TO POPULATE TOP 100 FREQUENT WORDS   -->
                                      <?php
                                      $query = $dbh->prepare("SELECT * FROM rub_reviews ORDER BY id ASC");
                                      //$query = $dbh->prepare("SELECT * FROM ad_words WHERE id BETWEEN 0 AND 15");
                                      $query->bindParam(':id', $id);
                                      $query->bindParam(':review', $review);



                                      if ($query->execute()) {

                                      while ($row = $query->fetch(PDO::FETCH_ASSOC) )
                                      // var_dump($row['frequency']);

                                        {
                                              echo '<tr>
                                        
                                          <td class="title">'.$row['review'].'</td>
                                                                                  
                                          ';
                                          }//end of query
                                          
                                          //$dbh=NULL;

                                          
                                        
                                        } else {
                                          print '<p style="color: red;">Connection Error</p>';
                                      }



                                      ?>

                      </tr> 
                </table>
              </section>
            <!-- </div> end of card  -->
          </div> <!-- end of table div -->

        </div> <!-- end of table column  -->
        <div class="col-md-1"> </div>   
  </div> <!-- end of word association row -->


<div class="clearfix"><hr class="col-xs-12"> </div>
   <!-- add dividing line -->

   <div class="row"> 
        <div class="col-md align-self">                
                <!-- <div class="card card mb-3 border-0"> -->
                 <h2>The top 15 illicit ad words.</h2>
                        <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                        no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                        Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                        Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                        vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                        sed. At per alii prompta, nominavi necessitatibus est
                        </p>
          </div> <!-- end of pie chart text paragraph div  -->
  </div>  <!-- end of pie chart description paragraph row  -->
    <div class="row"> 
        <div class="col-md"> 
        <!-- <div class="col-8 float-right"> -->
          <!-- <div class="card card mb-3 border-0"> -->
              <div id="canvas-holder" style="width:100%"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
              <canvas id="pieChart" style="display: block; height: 300x; width: 300px;"  class="chartjs-render-monitor"></canvas>
          <!-- </div> -->
        <!-- </div> -->



          
      </div>  <!-- end of pie chart row  -->


<div class="clearfix"><hr class="col-xs-12"> </div>
   <!-- add dividing line -->



 <div class="row">


      <div class="col-md-5 align-self float-left">
          
          <!-- <div class="card card mb-3 border-0"> -->
          <h2>Top 10 Kewords</h2>
                  <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                  no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                   Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                  Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                  vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                  sed. At per alii prompta, nominavi necessitatibus est ea.</p>
      </div>

      <div class="col-md-7 float-right">
          <!-- <div class="card card mb-3 border-0"> -->
            <div class="tableFixHead" id="myTable">
              <section>
                <table class="table table-hover table table-striped ">
                  <thead class="thead-dark">
                      <tr>
                        <th>Most Popular Review Terms</th>
                      </tr>
                  </thead> 

                            <?php
                            $query = $dbh->prepare("SELECT * FROM review_10 ORDER BY frequency ASC");
                            //$query = $dbh->prepare("SELECT * FROM ad_words WHERE id BETWEEN 0 AND 15");
                            $query->bindParam(':id', $id);
                            $query->bindParam(':keyword', $keyword);
                            $query->bindParam(':frequency', $frequency);
                            //$query->bindParam(':key_word', $key_word);


                            if ($query->execute()) {

                            while ($row = $query->fetch(PDO::FETCH_ASSOC) )
                            // var_dump($row['frequency']);

                              {
                                    echo '<tr>
                                
                                <td class="title">'.$row['keyword'].'</td>
                                <td class="entry">'.$row['frequency'].'</td>
                                
                                
                                ';
                                }//end of query
                                
                                //$dbh=NULL;

                                
                              
                              } else {
                                print '<p style="color: red;">Connection Error</p>';
                            }

                              ?>

                            </tr> 
                      </table>
                    </section>
                  <!-- </div> end of card  -->
                </div> <!-- end of table div -->
              </div> <!-- end of reviews table column  -->
                
        </div>   <!-- end of reviews table row -->

</div>   <!-- end of main container-->

</div>   <!-- end of main container-->



   
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js" integrity="sha256-TQq84xX6vkwR0Qs1qH5ADkP+MvH0W+9E7TdHJsoIQiM=" crossorigin="anonymous"></script>
<script type="text/javascript"> 
let ctx = document.getElementById('pieChart').getContext('2d');
let chart = new Chart(ctx, {
    type: 'pie',
    

    
    data : {
    
    datasets: [{
        
        backgroundColor: [
              "#9933FF",
              "#CC00CC",
              "#99FF33",
              "#FF8000",
              "#E71f63",
              "#FF2400",
              "#66b2ff",
              "#CCE5FF",
              "#FF0000",
              "#ffb288",
              "#B22222",
              "#FF66B2",
              "#CC99FF",
              "#f0592b",
              "#46BFBD",
              "#a70000"
              
            ],
        data: <?php echo $counts; ?>,
        label:<?php echo $word_list; ?>,
        
    }],
    labels: <?php echo $word_list; ?>,
    // These labels appear in the legend and in the tooltips when hovering different arcs
    
},
options: {
  layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },

  title: {
                display: true,
                text: 'Top Fifteen Adwords',
                fontSize: 18,
                fontFamily: 'sans-serif',
                fontColor: '#666',
                fontStyle: 'bold',
                padding: 0,
                position: 'right',
                
            },

      responsive: true,
      
      legend: { 
      
        
        position: 'right',
        
        
    }
  }

});

    function initMap() {
        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap'
        };
                        
        // Display a map on the web page
        map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
        map.setTilt(50);

        
            
        // Multiple markers location, latitude, and longitude
        var markers = [
            <?php if($result->num_rows > 0){ 
                //$locations=array();
                while($row = $result->fetch_assoc()){ 
                    echo '["'.htmlentities($row['Name']).'", '.$row['latitude'].', '.$row['longitude'].', "'.htmlentities( $row['formatted_address']).'"],'; 
                } 
            } //var_dump($locations);
            ?>
        ];
                            
        // Info window content
        var infoWindowContent = [
            <?php if($result2->num_rows > 0){ 
                while($row = $result2->fetch_assoc()){ ?>
                    ['<div class="info_content">' +
                    '<h5><?php echo htmlentities($row['Name']); ?></h5>' +
                    '<p><?php echo htmlentities($row['formatted_address']); ?></p>' + '</div>'],
            <?php } 
            } 
            ?>
        ];
            
        // Add multiple markers to map
        var infoWindow = new google.maps.InfoWindow(), marker, i;
        
        // Place each marker on the map  
        for( i = 0; i < markers.length; i++ ) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                //icon: markers[i][3],
                title: markers[i][0]
            });
            
            // Add info window to marker    
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infoWindow.setContent(infoWindowContent[i][0]);
                    infoWindow.open(map, marker);
                }
            })(marker, i));

            // Center the map to fit all markers on the screen
            map.fitBounds(bounds);
        }

        // Set zoom level
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
            this.setZoom(11);
            google.maps.event.removeListener(boundsListener);
        });
    }

    // Load initialize function
    google.maps.event.addDomListener(window, 'load', initMap);
</script> 
    


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWX-p4fDBlWenHRMR7we4S5U62FjZl7Lo&callback=initMap">;

</script>




<?php
include 'templates/footer.php';
?>
