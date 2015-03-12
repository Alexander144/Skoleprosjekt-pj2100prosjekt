
<?php
/*Henter php filen booking.php*/
require_once 'bin/booking.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <title>Westerdals - Booking</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

      <div class="jumbotron text-center">
        <div class="container">
          <img src="img/logo.png" alt="Westerdals_logo">
          <h1>Westerdals</h1>
          <p>Booking av klasserom.</p>
          <nav>
            <ul class="nav nav-pills nav-justified">
              <li role="presentation" class="active"><a href="#">Hjem</a></li>
              <li role="presentation"><a href="kart.html">Kart</a></li>
              <li role="presentation"><a href="#">Info</a></li>
            </ul>
          </nav>
        </div>
      </div>


    <?php 
    /*Variabelen rooms er lik, booking gerRooms methoden. Booking er en klasse. Ligger i booking.php*/
    $rooms = booking::getRooms();
    ?>

    <div class="container">
    <?php 
    /*For hvert room med indexen(rekkefølge på rommene),starter på index 0 som er første valgt rom. => betyr at index i blir lik room. Looper igjennom 
    og lager visningen for antall rom som finnes*/
    foreach ($rooms as $i => $room) { ?>
      <?php
      //variabelen isBooked er lik klassen booking funksjonen isBooked, sender med roomnummeret. For eksp går i array rom og henter roomNumber.
      $isBooked = booking::isBooked($room['roomNumber']);
      ?>
      <div class="room <?php //Skriver ut klassen booked hvis isBooked er true
      echo ($isBooked ? 'booked' : '') ?>">
        <div class="row rad rom text-center" id="rom<?php /*Skriver ut indexen plusser med 1 fordi indexen starter på 0*/ echo $i + 1 ?>">
        <div class="col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-md-2">klasserom nr: <?php /*Skriver ut fra arrayen og roomNumber, som er fra databasen*/ echo $room['roomNumber']; ?></div>
              <div class="col-md-2" id="rom1_status"></div>
              <div class="col-md-2" id="rom1_dato">dato</div>
              <div class="col-md-2" id="rom1_status">Ledig</div>
              <div class="col-md-2" id="rom1_tid1">- - : - -</div>
              <div class="col-md-2" id="rom1_tid2">- - : - -</div>
            </div>
          </div>
        </div>
      </div>
      <form class="booking-form">
        <input class="room-number" type="hidden" value="<?php /*Skriver den ut roomNumber og sendes videre til update.php via et javascript*/ echo $room['roomNumber']; ?>">
      <div class="row bestill text-center">
         <div class="col-md-3">
          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">Navn:</span>
            <input required type="text" class="user form-control" id="rom1_navn" placeholder="F.eks: Alexander Larsen" aria-describedby="sizing-addon2" value="alex">
          </div>
        </div>
        <div class="col-md-3">
          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">Dato:</span>
            <input required type="date" class="date form-control" id="rom1_nydato" placeholder="Skrives dato i dag eller i morgen:" aria-describedby="sizing-addon2">
          </div>
        </div>
        <div class="col-md-3"> 
          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">Tid:</span>
              <input type="time" class="time-start form-control" id="rom1_nytid1" placeholder="skrives: 11:00">
            </span>
          </div>
        </div>
        <div class="col-md-3"> 
          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">Tid:</span>
              <input type="time" class="time-end form-control" id="rom1_nytid2" placeholder="skrives: 12:00">
              <span class="input-group-btn">
                <input type="submit" class="btn btn-default book" value="Book!">
              <button class="btn btn-default cancel" id="rom1_btn2" type="button">Avbryt</button>
            </span>
          </div>
        </div>
      </div>
      </form>
      </div>
    <?php /*Stopper loopen*/  } ?>
    </div>

  </body>
</html>