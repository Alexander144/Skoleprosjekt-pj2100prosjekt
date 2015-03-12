<?php
$qAllRooms = 'SELECT rooms.roomNumber AS Room, room_booked_date.date AS Date, room_booked_date.bookingStatus AS isBusy
              FROM rooms LEFT JOIN room_booked_date
              ON rooms.roomNumber = room_booked_Date.roomID';

$qHasProjector = 'SELECT * FROM room_booking.rooms WHERE hasProjector = 1';
