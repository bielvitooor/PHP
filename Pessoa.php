<?php
    class Pessoa{
        private $nome;
        private $telefone;
        private $email;
        
        public function getNome(){
           return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        
        }
        public function getTelefone(){
            return  $this->telefone;
        }
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }









    }









?>
