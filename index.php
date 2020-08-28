<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-oop-hotel</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
    require_once(__DIR__ . '/room.php');

    $roomsArray = [
      [
        'room_number' => '101',
        'floor' => 1,
        'type' => 'Junior Suite',
        'usage' => 'Doppia',
        'price' => 600
      ],
      [
        'room_number' => '102',
        'floor' => 1,
        'type' => 'Executive Plus',
        'usage' => 'Doppia',
        'price' => 500
      ],
      [
        'room_number' => '103',
        'floor' => 1,
        'type' => 'Executive Plus',
        'usage' => 'Doppia',
        'price' => 500
      ],
      [
        'room_number' => '104',
        'floor' => 1,
        'type' => 'Suite Igea',
        'usage' => 'Quadrupla',
        'price' => 1000
      ]
    ];

    echo '<h1>Stanze</h1>';

    foreach ($roomsArray as $room) {
      echo '<div class="room"><ul>';
      $room = new Room($room['room_number'],$room['floor'],$room['type'],$room['usage'],$room['price']);
      echo $room->getRoomInfo();
      echo '</ul></div>';
    }

    ?>
  </body>
</html>
