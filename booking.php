<!DOCTYPE html>
<html>
  <title>User Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <body>

    <img src="./uploadimages/realhomes.png" alt="Logo" width="200" height="200">
    <div>
      <a href="homepage.php"><img class="icon" src="https://cdn-icons-png.flaticon.com/128/1946/1946488.png" height="30" width="30"></a>
      <a href="#"><img class="icon"  src="https://cdn-icons-png.flaticon.com/128/6380/6380189.png" height="30" width="30"></a>
      <a href="#"><img class="icon"  src="https://cdn-icons-png.flaticon.com/128/2889/2889676.png" height="30" width="30"></a>
      
    </div>

    
    <h3><img src="https://cdn-icons-png.flaticon.com/128/1144/1144760.png" height="25" width="25">My Details</h3>
<table>
  <caption><u><h2>Here are our available apartments</h2></u></caption>


<thead>

    <th>Apartment Type</th>
    <th>Apartment Room Number </th>
    <th>Apartment Floor</th>
    <th>Apartment Price</th>
    <th>Book Apartment</th>

  </thead>  

<tbody>
    <?php
    require_once("apartmentdb.php");
    foreach ($result as $key => $value) {
    ?>

<tr>
    <td><?php echo $value["apartment_type"] ?></td>
    <td><?php echo $value["apartment_room_number"] ?></td>
    <td><?php echo $value["apartment_floor"] ?></td>
    <td><?php echo $value["apartment_price"] ?></td>
    <td><button><a href="#booking">Book Now</a></button></td>

</tr>
    <?php }
  
?>

</tbody>

</table>

<table>
  <caption><u><h2>Your booked rooms</h2></u></caption>


<thead>

    <th>Apartment Type</th>
    <th>Apartment Room Number </th>
    <th>Booked Date</th>
    

  </thead>  

<tbody>
    <?php
    require_once("bookingdb.php");
    foreach ($result as $key => $value) {
    ?>

<tr>
    <td><?php echo $value["apartment_type"] ?></td>
    <td><?php echo $value["room_number"] ?></td>
    <td><?php echo $value["booking_date"] ?></td>


    

</tr>
    <?php }
  
?>

</tbody>

</table>

      


  <div class="centre-form">
    <a id="booking"></a>
        <form method="POST" action="booking_process.php" class="container">

        <label for="user_id">Your National ID: </label><br>
          <input type="text" id="user_id" name="user_id" value="" ><br>

        <label for="first_name">First Name: </label><br>
          <input type="text" id="first_name" name="first_name" value="" ><br>

          <label for="last_name">Last Name: </label><br>
          <input type="text" id="last_name" name="last_name" value="" ><br>

          <label for="apartment_type">Which apartment type do you wish to book:</label><br>
          <input type="text" id="apartment_type" name="apartment_type" value=""><br>

          
          <label for="room_number">Which room number: </label><br>
          <input type="text" id="room_number" name="room_number"><br>

            <button type="submit" class="button">Book</button><br>

            
        </form>
    </div>
        <div> 
    <footer>
         <img class="icon" src="https://cdn-icons-png.flaticon.com/128/1384/1384031.png" alt="Instagram icon" height="30" width="30">
  <img class="icon"src="https://cdn-icons-png.flaticon.com/128/1051/1051382.png" alt="Twitter icon" height="30" width="30">
<img class="icon" src="https://cdn-icons-png.flaticon.com/128/3046/3046125.png" alt="Tiktok icon" height="30" width="30">
<img class="icon"src="https://cdn-icons-png.flaticon.com/128/2111/2111839.png" alt="Youtube icon" height="30" width="30">



<li class="list1">
    <ul><u>Contact Info</u></ul>
    <ul>Real Homes,Pioneer House,</ul>
    <ul>Kimathi Street, Shop 14</ul>
    <ul>P.O. Box 71085</ul>
    <ul>Tel. No.: +254712345678</ul>
    <ul>realhomes@gmail.com</ul>
  </li>
<p><img src="https://cdn-icons-png.flaticon.com/128/1294/1294391.png" height="10" width="10">Real Homes,2022</p>
  
</footer>
        
       </div>   
  </body>
</html>