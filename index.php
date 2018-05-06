<?php

   include("css/main.css");

?>

<html >
   <head>
   <title>
      Expedia Hotels Offer
   </title>
   </head>
   <body>
      <center>
         <h1 style="margin-top:70px;margin-bottom:70px" >
             Expedia Hotels Offers
         </h1>


       <div class="card">

           <form method="POST" action="controller/HotelOffersController.php" >
             <h4  style="color: black">
                  Search for  Best Hotels Offers :)
            </h4>

              <table>
					<tr>
						<td class= "t1" > <li> Destination Details :</li> </td>
						<td class= "t1" > Destination Name </td>
						<td class= "t1" > <input type="text"  name="filters[destinationName]"  /></td>
						<td>Destination City</td>
						<td> <input type="email" name="filters[destinationCity]"  /></td>
					</tr>
					<tr>
						 <td class= "t1" >  &nbsp; </td>
						 <td>Region Ids</td>
						 <td><input type="text" name="filters[regionIds]" placeHolder="ex:6126616,178286" /></td>
						 <td class= "t1" > &nbsp; </td>
						 <td class= "t1" > &nbsp;</td>
					</tr>
					<tr>
				    	 <td class= "t1" > <li> Trip Details :</li> </td>
						<td>Min Trip Start Date</td>
						<td><input type="text" name="filters[minTripStartDate]" placeHolder="2017-05-03" /></td>
						<td>Max Trip Start Date</td>
						<td><input type="text" name="filters[maxTripStartDate]" placeHolder="2017-05-03" /></td>
				   </tr>
				   <tr>
						<td class= "t1" >  &nbsp; </td>
						<td>Length Of Stay</td>
						<td><input type="text" name="filters[lengthOfStay]"  /></td>
						<td class= "t1" > &nbsp; </td>
						<td class= "t1" > &nbsp;</td>
					</tr>
					<tr>
						<td class= "t1" > <li>Hotel Details :</li> </td>
						<td>Min Star Rating</td>
						<td><input type="text" name="filters[minStarRating]"  /></td>
						<td>Max Star Rating</td>
						<td><input type="text" name="filters[maxStarRating]"  /></td>
				   </tr>
				   <tr>
						<td class= "t1" >  &nbsp; </td>
						<td>Min Total Rate</td>
						<td><input type="text" name="filters[minTotalRate]"  /></td>
						<td>Max Total Rate</td>
						<td><input type="text" name="filters[maxTotalRate]"  /></td>
					</tr>
					<tr>
				    	 <td class= "t1" > <li>Guest Details :</li> </td>
						<td>Min Guest Rating</td>
						<td><input type="text" name="filters[minGuestRating]"  /></td>
						<td>Max Guest Rating</td>
						<td><input type="text" name="filters[maxGuestRating]"  /></td>
					</tr>
			</table>
            <button  class="searchbtn" name="getOffers"  >
					See our Best  Offers
			</button>
      </form>
  </div>
 </center>
 </body>
</html>