<?php

require 'mysql.php';

class booking {
	//Den henter ut alle rommene
	public static function getRooms(){
		//tilkobling til databasen
		$db = Mysql::get();

		$result = mysql_query('SELECT * FROM rooms');

		$rooms = array();
		//mysql_fetch_assoc($result), den gir deg en liste over resultater som du kan loope igjennom
		while ($r = mysql_fetch_assoc($result)) {
			//her opptater du rooms array
			$rooms[] = $r;	
		}

		return $rooms;
	}
	//her putter du inn roomID og date og putter inn valgte variabler inn i databasen som er da roomID og date
	public static function updateRoom($roomID, $date) {
		$db = Mysql::get();
		//putter inn variablene i databasen
		$query = mysql_query("INSERT INTO room_booked_date(date, roomID) VALUES('$date', '$roomID')");
	}
	//her sjekkes om rommet er booket
    public static function isBooked($roomID) {
       //alle med  Mysql::get(); er koblinger
        $db = Mysql::get();
        $roomID = (int) $roomID;
        //DU lager en variabel og henter fra databasen fra room_booked_date der roomID(fra databasen)  = '$roomID' fra parameteret
        $result = mysql_query("SELECT * FROM `room_booked_date` WHERE roomID='$roomID'");
		//Her sjekker du om det er room i booked room
        if (mysql_num_rows($result) > 0) {
        	return true;
        } else {
        	return false;
        }
    }
}
