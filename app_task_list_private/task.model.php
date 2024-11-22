<?php
  class Task {
    public $id;
    public $id_status;
    public $task;
    public $date_registration;

    public function __get($attribute) {
      return $this->$attribute;
    }

    public function __set($attribute, $value) {
      $this->$attribute = $value;
    }
  }
?>