<?php

require 'mysql.php';

class booking {
	//Den henter ut alle rommene
	public static function getRooms() {
		//tilkobling til databasen
		$db = Mysql::get();

		$result = mysql_query('SELECT * FROM book.room');

		$rooms = array();
		//mysql_fetch_assoc($result), den gir deg en liste over resultater som du kan loope igjennom
		while ($r = mysql_fetch_assoc($result)) {
			//her opptater du rooms array
			$rooms[] = $r;	
		}
		//lager arrayen periods og putter inn verdiene
		$periods = array(
			'08:15 - 10:15',
			'10:15 - 12:15',
			'12:15 - 14:15',
			'14:15 - 16:15'
		);
		/*lager variabel day, som blir hvis dag er satt så henter den dagen. Hvis det ikke er satt noe dag så henter den idag. I url*/
		$day = (isset($_GET['day']) ? $_GET['day'] : 'I dag');

		$newRooms = array();
		//for vært rooms som indexen legger inn i variabel room
		foreach ($rooms as $i => $room) {
			$bookedArray = array();

			foreach ($periods as $i => $period) {
				//isBooked blir isBooked funksjonen og putter variablene $room['roomNumber'], $day, $periods[$i] i Isbooked og retunerer true eller false 
				$isBooked = self::isBooked($room['roomNumber'], $day, $periods[$i]);
				//lager et array som tar imot om periods og indexen er booked eller ikke og retunerer false eller true
				$bookedArray[] = array($periods[$i] => $isBooked);
			}
				//Gir room['periods'] lik de nye verdiene om et rom er booket eller ikke
			$room['periods'] = $bookedArray;
			$newRooms[] = $room;
		}

		return $newRooms;
	}

	//her putter du inn roomID og date og putter inn valgte variabler inn i databasen som er da roomID og date
	public static function updateRoom($roomID, $day, $time) {
		$db = Mysql::get();
		//Hvis dag er imorgen så plusser den dag med en og får neste dag.
		if ($day === 'I morgen') {
			$date = strtotime('+1 day', mktime(0, 0, 0));
			$date = date('Y-m-d', $date);
		} 
		//hvis ikke(idag), blir da dato idag
		else {
			$date = date('Y-m-d');
		}
		//putter inn variablene i databasen
		$query = mysql_query("INSERT INTO book.group_room(groupID,roomNumber, date, time) VALUES(1,'$roomID','$date','$time')");
	}
	//her sjekkes om rommet er booket
    public static function isBooked($roomID, $day = 'I morgen', $time) {
       //alle med  Mysql::get(); er koblinger
        $db = Mysql::get();
        $roomID = (int) $roomID;

		if ($day === 'I morgen') {
			$date = strtotime('+1 day', mktime(0, 0, 0));
			$date = date('Y-m-d', $date);
		} else {
			$date = date('Y-m-d');
		}

        //DU lager en variabel og henter fra databasen fra room_booked_date der roomID(fra databasen)  = '$roomID' fra parameteret
        $result = mysql_query("SELECT * FROM book.group_room WHERE
        	roomNumber='$roomID' AND book.group_room.date='$date' AND book.group_room.time='$time'
        ");

		//Her sjekker du om det er room i booked room
         if (mysql_num_rows($result) > 0) {
        	return true;
        } else {
        	return false;
        }
    }
}
