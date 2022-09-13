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
      return $this->full_name = $full_name;
    }
  }
  public function set_country($country) {
    if(is_string($country)) {
      return $this->country = $country;
    }
  }
  public function set_city($city) {
    if(is_string($city)) {
      return $this->city = $city;
    }
  }
  public function set_street($street) {
    if(is_string($street)) {
      return $this->street = $street;
    }
  }
  public function set_zipcode($zipcode) {
    if(is_string($zipcode)) {
      return $this->zipcode = $zipcode;
    }
  }
}


?>