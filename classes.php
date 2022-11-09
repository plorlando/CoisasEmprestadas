<?php
  class usuario {
    public $nome;
    public $email;

    function setNome($_n) {
      $this -> _nome = $_n;
    }

    function setEmail($_e) {
      $this -> _email = $_e;
    }

    
    function getNome() {
      return $this -> _nome;
    }

    function getEmail() {
      return $this -> _email;
    }     
  }

  class item {
    public $item;

    function setItem($_i) {
      $this -> _item = $_i;
    }

    function getItem() {
      return $this -> _item;
    }
  }

?>