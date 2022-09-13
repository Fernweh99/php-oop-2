<?php
class CreditCard
{
  private $circuit;
  private $number;
  private $expiration;

  public function __construct($circuit, $number, $expiration)
  {
    $this->set_circuit($circuit);
    $this->set_number($number);
    $this->set_expiration($expiration);
  }

  //setter
  public function set_circuit()
  {
    if (is_string($this->circuit)) {
      $this->circuit = $circuit;
      return $this;
    }
  }

  public function set_number()
  {
    if (is_string($this->number)) {
      $this->number = $number;
      return $this;
    }
  }

  public function set_expiration()
  {
    if (is_string($this->expiration)) {
      $this->expiration = strtotime($expiration);
      return $this;
    }
  }

  //getter
  public function get_expiration()
  {
    return date("d-m-Y", $this->expiration);
  }

  //methods
  public function is_expired()
  {
    $today = strtotime(date("d-m-Y"));
    return $this->expiration < $today; 
  }
}

?>