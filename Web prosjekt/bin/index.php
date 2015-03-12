<!DOCTYPE html>
<html>
<head>
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="main">
    <div id="freeRooms" class="disp">
        <h4>Ledige Rom</h4>
    <?php
    require 'query.php';

    while ($r = $query->fetch()) {
        if ($r['bookingStatus'] == '') {
            echo '<p>' .  $r['roomNumber'] . '</p>' . '<br>';
        }
    }
?>
    </div>

    <div id="bookedRooms" class="disp">
        <h4>Opptatte Rom</h4>
        <?php
        require 'query.php';
        while ($r = $query->fetch()) {
            if ($r['bookingStatus'] == '1') {
                echo '<p>' .  $r['roomNumber'] . '</p>' . '<br>';
            }
        }
        ?>
    </div>

    <div class="disp">

    </div>

</div>
</body>
</html>
