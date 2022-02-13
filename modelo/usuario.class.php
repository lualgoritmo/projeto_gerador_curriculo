<?php
    class Usuario
    {
        private $id_usuario;
        private $email;
        private $senha;
        private $perfil;

        public function __construct($id_usuario = null, $email = null,
         $senha = null, $perfil = null)
        {
            $this->id_usuario = $id_usuario;
            $this->email = $email;
            $this->senha = md5($senha); 
            $this->perfil = $perfil;
        }
        
        public function getIdUsuario()
        {
            return $this->id_usuario;
        }
        
        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            $this-> email = strtolower(trim($email));
        }

        public function getSenha()
        {
            return $this->senha;
        }
        public function setSenha($senha)
        {
            $this->senha = $senha;
        }

        public function getPerfil()
        {
            return $this->perfil;
        }

    }

?>