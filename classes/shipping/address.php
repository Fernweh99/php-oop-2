<?php
class Address 
{
  public $full_name;
  public $country;
  public $city;
  public $street;
  public $zipcode;

  public function __construct($full_name, $country, $city, $street, $zipcode) 
  {
    $this->set_full_name($full_name);
    $this->set_country($country);
    $this->set_city($city);
    $this->set_street($street);
    $this->set_zipcode($zipcode);
  }

  public function set_full_name($full_name) {
    if(is_string($full_name)) {
      $this->full_name = $full_name;
      return $this;
    }
  }
  public function set_country($country) {
    if(is_string($country)) {
      $this->country = $country;
      return $this;
    }
  }
  public function set_city($city) {
    if(is_string($city)) {
      $this->city = $city;
      return $this;
    }
  }
  public function set_street($street) {
    if(is_string($street)) {
      $this->street = $street;
      return $this;
    }
  }
  public function set_zipcode($zipcode) {
    if(is_string($zipcode)) {
      $this->zipcode = $zipcode;
      return $this;
    }
  }
}


?>