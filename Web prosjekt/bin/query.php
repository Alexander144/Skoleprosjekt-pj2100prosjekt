<?php
require 'config.php';
$query = $connection->query('SELECT *
              FROM room_booking.rooms LEFT JOIN room_booking.room_booked_date
              ON room_booking.rooms.roomNumber = room_booking.room_booked_Date.roomID');
