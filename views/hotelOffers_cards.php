<?php

   include("../css/main.css");

?>

<html >
   <head>
      <title>
         Expedia Hotels Offers
      </title>
      <script src="../jquery/jquery-3.3.1.min.js"></script>
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

   </head>
   <body>
      <center>
         <h1 style="margin-top:70px;margin-bottom:70px" >
             Expedia Hotels Offers
         </h1>

         <div id="container">

            <a href="http://localhost:8080/expediaAssesment/">Back to  search Page</a>

            <?php if($error){ ?>
             <h3>
             <?= $errorMessage ?>
             </h3>
            <?php }else{ ?>
            <table>
				<body>
			    	<tr>
						 <?php
						 $counter = 0;
						 foreach($offers as $index => $offer ){
						 $counter ++ ;
						 ?>

						   <td class="HotelCard">
							  <div  class="" style="display:table-cell; vertical-align:middle;">

						        <div class="">
								  <img src="<?= $offer->hotelInfo->hotelImageUrl ?>" class="hotelImage" style="width:35%;" alt="<?= $offer->hotelInfo->hotelName ?>"  >



								  <div class="container" >

									<h3 >  <?= $offer->hotelInfo->hotelName ?></h3>
									<p style="background-color:green;opacity:1;"> &nbsp; <?= $offer->destination -> shortName ?>
									 <span class="stars" data-rating="<?= $offer->hotelInfo->hotelStarRating ?>" data-num-stars="5" ></span>


									</p>
									<p>
									  <span style="border : 1px solid green;color:black"> &nbsp; <?= $offer->hotelInfo->hotelGuestReviewRating ?> </span>
									  <span> &nbsp; <?=  $offer->hotelInfo->hotelReviewTotal ?> Reviews </span>
									</p>
									<p>

									  <h3>
									  <span style="font-size: 10px;font-weight:lighter" > Price Per Night : </span><br>
									  Expedia <span style="color:green;"><?= $offer->hotelPricingInfo->originalPricePerNight ?></span> <span style="font-size: 5px;font-weight:lighter" ><?= $offer->hotelPricingInfo->currency ?></span> </h3>
									<p>

									<div>

									<button class="detialbtn" id="dealbtn_<?= $index ?>"  onclick="javascript:showDetails(<?= $index ?>)" >
										  Show More Info
									</button>
									</div>

								  </div>

								</div> </div>

                           <div id="detailsCard_<?= $index ?>" style="text-align:left; display:table-cell; vertical-align:middle;display: none;border:1px solid black">

						        <div >
								  <div class="container"  style="direction:ltr">

									<h3 > FROM   <?php echo $offer->offerDateRange->travelStartDate[2] ."-". $offer->offerDateRange->travelStartDate[1] ."-". $offer->offerDateRange->travelStartDate[0]; ?> TO
									 <?php echo $offer->offerDateRange->travelEndDate[2] ."-". $offer->offerDateRange->travelEndDate[1] ."-". $offer->offerDateRange->travelEndDate[0]; ?>
									 </h3>
									 <h5>Length Of Stay : <?=  $offer->offerDateRange->lengthOfStay  ?> days
									</h5>

									<p>
									    <h4>
									     Total Price Value  :<br>
									      <span style="color:green;"><?=  $offer->hotelPricingInfo ->totalPriceValue ?></span> <span style="font-size: 5px;font-weight:lighter" ><?= $offer->hotelPricingInfo->currency ?></span>
                                         <br> Percent Savings : <span style="color:green;"><?=  $offer->hotelPricingInfo ->percentSavings ?> % </span>
									     </h4>
									<p>

                                    <h4> Full Destination : &nbsp; <?=  $offer->destination->longName ?>  </h4>


									<div style="width:180px">
									<a href="http://maps.google.com/maps?z=12&t=m&q=<?= $offer->hotelInfo->hotelLatitude ?>,<?= $offer->hotelInfo->hotelGuestReviewRating ?>" target="_blank" >
									<img src= "../img/google-maps-icon.png" style="width:40px"  />
									</a>


									</div>

								  </div>

								</div></div>
                           </td>
	                       <?php if($counter == 3){
								echo "</tr><tr>";
								$counter = 0;
								} ?>

                <?php } ?>
                </tr></table>
                <?php } ?>
          </div>
      </center>
      <script type="text/javascript">
		   $.fn.stars = function() {
				  return $(this).each(function() {

					  var rating = $(this).data("rating");

					  var numStars = $(this).data("numStars");

					  var fullStar = new Array(Math.floor(rating + 1)).join('<i class="ss fa fa-star" style="color:yellow"></i>');

					  var halfStar = ((rating%1) !== 0) ? '<i class="fa fa-star-half-empty"></i>': '';

					  var noStar = new Array(Math.floor(numStars + 1 - rating)).join('<i class="fa fa-star-o"></i>');

					  $(this).html(fullStar + halfStar + noStar);

				  });
			  }

			$('.stars').stars();

             //show card details
			function showDetails( index)
			{

			    if ($("#detailsCard_"+index).is(':visible')){
			            $("#detailsCard_"+index).hide();
			            $("#detialbtn_"+index).html(" Show More Info");

			     }else{
			           $("#detailsCard_"+index).show();
			           $("#detailbtn_"+index).html(" Hide More Info");
			           $("#detailsCard_"+index).css('display' , 'table-cell');
			     }

			}
      </script>
   </body>
 </html>