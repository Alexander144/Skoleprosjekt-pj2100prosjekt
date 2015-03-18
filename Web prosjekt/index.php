
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
    /*lager variabel day, som blir hvis dag er satt så henter den dagen. Hvis det ikke er satt noe dag så henter den idag. I url*/
    $day = (isset($_GET['day']) ? $_GET['day'] : 'I dag');
    $rooms = booking::getRooms();
    ?>
<div class="container">
  <div class="container">
    <?php //Velger hvilken dag og setter dagen ?>
    <form method="get" class="dayselector">
      <select class="Dato" class="form-control" name="day">
      <option id="dag" <?= ($day === 'I dag') ? 'selected' : '' ?>>I dag</option>
      <option id="morgen" <?= ($day === 'I morgen') ? 'selected' : '' ?>>I morgen</option>
      </select>
      <?php//gjemmer knappen fordi den ikke er i bruk ?>
      <input type="submit" style="display: none;">
    </form>
     </div>
    <?php 
    /*For hvert room med indexen(rekkefølge på rommene),starter på index 0 som er første valgt rom. => betyr at index i blir lik room. Looper igjennom 
    og lager visningen for antall rom som finnes*/
    foreach ($rooms as $i => $room) { ?>
      <div class="room">
        <div class="row rad rom text-center" id="rom<?php /*Skriver ut indexen plusser med 1 fordi indexen starter på 0*/ echo $i + 1 ?>">
        <div class="col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-md-2 pilned" <p><span class="glyphicon glyphicon-chevron-down"></span></p></div>
              <div class="col-md-2"><strong>Klasserom nr: </strong><?php /*Skriver ut fra arrayen og roomNumber, som er fra databasen*/ echo $room['roomNumber']; ?></div>
              <div class="col-md-2" id="prosjektor"><strong>Prosjektor</strong>
                <?php /*Sjekke om rommet har prosjektor og setter inn et bilde hvis det har eller ikke*/ if($room['hasProjector']){ ?>
                <img class="projector" src="img/Projector.png">
                <?php } else{?>
                <img class="projector" src="img/noProjector.png">
                <?php } ?>
              </div>
              <div class="col-md-2" id="rom1_status"><strong>Ledig/Opptatt </strong><div class="boxPlass"><div class="box" id="green"></div><div class="box" id="red"></div></div></div>
            </div>
          </div>
        </div>
      </div>
      <form class="booking-form">
        <input class="room-number" type="hidden" value="<?php /*Skriver den ut roomNumber og sendes videre til update.php via et javascript*/ echo $room['roomNumber']; ?>">
      <div class="row bestill text-center">
        <?php /*Lager knapper for vær gang det er en periode tid, altså 4 i vært felt i dette sammenheng*/ foreach ($room['periods'] as $period) { ?>
        <?php /*Den henter verdien fra period, booked eller ikke*/ $isBooked=reset($period);  ?>
           <div class="col-md-6 period">
            <div class="col-md-6">
            <strong><?= /*Henter indexen, skriver ut tiden*/ key($period) ?></strong>
            <input type="hidden">
            </div>
            <div class="col-md-6">
             <span class="input-group-btn">
                <input <?php /*Skriver den ut hvis den er booket attributene data*/ echo ($isBooked ? 'disabled':'')?> type="submit" data-roomNumber="<?=$room['roomNumber'] ?>" data-date="<?=$day ?>" data-time="<?=key($period) ?>" class="btn btn-default book" value="<?php echo ($isBooked ? 'Opptatt':'Ledig')?>">
              </span>
            </div>
           </div>
        <?php } ?>
      </div>
      </form>
      </div>
    <?php /*Stopper loopen*/  } ?>
    </div>

  </body>
</html>