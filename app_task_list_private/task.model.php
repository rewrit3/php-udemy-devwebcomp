<?php
  class Task {
    private $id;
    private $id_status;
    private $task;
    private $date_registration;

    public function __get($attribute) {
      return $this->$attribute;
    }

    public function __set($attribute, $value) {
      $this->$attribute = $value;
    }
  }
?>