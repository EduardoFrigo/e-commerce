<?php
class User {

        private $db;
    
        public function __construct() {

            $this->db = Database::connect();
        }
    
        public function create($nome, $email, $senha) {
            $senhaCriptografada = password_hash($senha, PASSWORD_BCRYPT);

            $sql = "INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senhaCriptografada);
    
            try {
                return $stmt->execute(); 
            } catch (PDOException $e) {
                echo "Erro ao criar usuário: " . $e->getMessage();
                return false;
            }
        }
    
    
        public function login($email, $senha) {
            $sql = "SELECT * FROM usuario WHERE email = :email";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            
            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if (password_verify($senha, $row['senha'])) {
                    return $row;  
                } else {
                    return false;
                }
            } else {
                return false; 
            }
        }
        
    
}
    
