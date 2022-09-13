<?php

require_once 'user.php';

class RegisteredUser extends User {
  public $email;
  private $password;
  public $date_of_birth;
  public $discount = 20;

  public function __construct($first_name, $last_name, $card_number, $card_year_expiration, $id_cart, $email, $password, $date_of_birth){
    parent::__construct($first_name, $last_name, $card_number, $card_year_expiration, $id_cart);
    $this->email = $this->set_email($email);
    $this->password = $this->set_password($password);
    $this->date_of_birth = $this->set_date_of_birth($date_of_birth);
  }

  public function set_email($email) {
    if (is_string($email)) return $email;
  }

  public function set_password($password) {
    if (is_string($password)) return $password;
  }

  public function set_date_of_birth($date_of_birth) {
    if (is_string($date_of_birth)) return $date_of_birth;
  }
}

?>