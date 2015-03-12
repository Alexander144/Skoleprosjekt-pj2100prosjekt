<?php

require "booking.php";
//Klassen booking, fuksjonen updateRoom og puttet inn verdier i funksjonen og henter roomNumber, henter også date
booking::updateRoom($_POST['roomNumber'], $_POST['date']);