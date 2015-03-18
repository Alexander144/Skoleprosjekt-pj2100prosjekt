<?php
require 'config.php';
$query = $connection->query('SELECT *
              FROM book.rooms LEFT JOIN book.group_room
              ON book.room.roomNumber = book.group_room.roomNumber');
