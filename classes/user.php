<?php

class User {
  public $first_name;
  public $last_name;
  public $card_number;
  public $card_year_expiration;
  public $id_cart;

  public function __construct($first_name, $last_name, $card_number, $card_year_expiration, $id_cart) {
    $this->first_name = $this->set_first_name($first_name);
    $this->last_name = $this->set_last_name($last_name);
    $this->card_number = $this->set_card_number($card_number);
    $this->card_year_expiration = $this->set_card_year_expiration($card_year_expiration);
    $this->id_cart = $this->set_id_cart($id_cart);
  }

  public function set_first_name($first_name) {
    if (is_string($first_name)) return $first_name;
  }

  public function set_last_name($last_name) {
    if (is_string($last_name)) return $last_name;
  }

  public function set_card_number($card_number) {
    if (is_numeric($card_number)) return $card_number;
  }

  public function set_card_year_expiration($card_year_expiration) {
    if (is_numeric($card_year_expiration)) return $card_year_expiration;
  }

  public function set_id_cart($id_cart) {
    if (is_numeric($id_cart)) return $id_cart;
  }
}

?>