<?php

    class UsuarioDAO extends conexao
    {
        
        public function __construct()
        {
            parent:: __construct();
        }

        //MÉTODO CADASTRAR USUÁRIO
        public function cadastrarUsuario($usuario)
        {   
                $sql = "INSERT INTO usuario (email, senha) VALUES (?, ?)";
                try
                {

                    $usuarioCAD=$this->bd_curriculo->prepare($sql);
                    $usuarioCAD->bindValue(1, $usuario->getEmail());
                    $usuarioCAD->bindValue(2, $usuario->getSenha());
                    $retorno=$usuarioCAD->execute();
    
                    if(!$retorno)
                    {
                        echo "<center><h3>Erro ao inserir usuário</h3></center>";
                        return; 
                    }

                   return [
                        "status" => "success",
                        "response" => $this->bd_curriculo->lastInsertId(),
                    ];

                }
                catch(Exception $e)
                {
                    die($e->getMessage());
                }
            }//FIM DO MÉTODO CADASTRAR USUÁRIO

            //MÉTODO PARA CHECAR EMAIL
            public function buscarEmail($usuario)
            {
                $sql = "SELECT * FROM usuario WHERE email = ?";
                try
                {
                    $checarEmail=$this->bd_curriculo->prepare($sql);
                    $checarEmail->bindValue(1, $usuario->getEmail());
                    $checarEmail->execute();
                    $this->bd_curriculo = null;
                    
                    if($checarEmail->rowCount() > 0)
                    {
                        require_once "usuario.class.php";
                        $dados = $checarEmail->fetch();
                        $usuario = new Usuario();
                        $usuario->getEmail($dados['email']);
                        $usuario->getSenha($dados['senha']);
                        echo"<script>alert('Esse e-mail já existe!')</script>";

                        return $usuario;
                    }
                    else
                    {
                        return false;
                    }
                }
                catch(Exception $e)
                {
                    die($e->getMessage());
                }
            }//FIM MÉTODO CHECAR E-MAIL

            //MÉTODO PARA BUSCAR USUÁRIO POR ID
            public function buscarId($id) {
                $user = [];

                $sql = $this->bd_curriculo->prepare("SELECT * FROM usuario WHERE id_usuario = :id");
                $sql->bindValue(":id", $id);
                $sql->execute();

                if($sql->rowCount() > 0) {
                    $user = $sql->fetch(PDO::FETCH_OBJ);
                }

                return $user;
            }//FIM MÉTODO BUSCAR ID
            
            //MÉTODO PARA FAZER LOGIN
            public function fazerLogin($usuario)
            {   
                    $sql = "SELECT u.id_usuario AS 'id_usuario', c.id_curriculo AS 'id_curriculo' from usuario u
                    LEFT JOIN curriculo c ON u.id_usuario = c.id_usuario
                    WHERE u.email = ? AND u.senha = ?";
                    try
                    {
                        $usuarioLOGIN=$this->bd_curriculo->prepare($sql);
                        $usuarioLOGIN->bindValue(1, $usuario->getEmail());
                        $usuarioLOGIN->bindValue(2, $usuario->getSenha());
                        $retorno=$usuarioLOGIN->execute();
                        $this->bd_curriculo = null;
                        

                        if(!$retorno)
                        {
                            

                            echo "<script>Erro ao encontrar Usuário</script>";
                        }

                        if($usuarioLOGIN->rowCount() > 0) 
                        {
                            $usuarioEncontrado = $usuarioLOGIN->fetch(PDO::FETCH_OBJ);
                            $_SESSION['login'] = [
                                "id_usuario" => $usuarioEncontrado->id_usuario,
                                "id_curriculo" => $usuarioEncontrado->id_curriculo
                            ];
                            return $usuarioEncontrado;
                        }
                         
                    }
                    catch(Exception $e)
                    {
                        die($e->getMessage());
                    }
                }
                //FIM MÉTODO FAZER LOGIN
           
        }
            
    
?>