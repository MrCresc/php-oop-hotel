<?php
class Room {
  public $room_number;
  public $floor;
  public $type;
  public $usage;
  public $price;
  public $created_at;

  public function __construct($_roomNumber,$_floor,$_type,$_usage,$_price)
  {
    $this->room_number = $_roomNumber;
    $this->floor = $_floor;
    $this->type = $_type;
    $this->usage = $_usage;
    $this->price = $_price;
    $this->created_at = date("Y-m-d H:i:s");
  }

  public function getFloor()
  {
    return $this->floor;
  }

  public function getRoomInfo()
  {
    return '<li>Numero Camera: '.$this->room_number.'</li>'.
    '<li>Piano: '.$this->floor.'</li>'.
    '<li>Tipologia Camera: '.$this->type.'</li>'.
    '<li>Usabilità: '.$this->usage.'</li>'.
    '<li>Prezzo: '.$this->price.'€</li>'.
    '<li>Creata il: '.$this->created_at.'</li>';
  }
}
?>
