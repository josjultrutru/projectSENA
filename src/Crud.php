<?php
require 'db.php';

class Crud {
    private $pdo;

    public function __construct($pdo) 
    {
        $this->pdo = $pdo;
    }

    public function create($name, $email) 
    {
        $stmt = $this->pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $stmt->execute(['name' => $name, 'email' => $email]);
    }

    public function read() 
    {
        $stmt = $this->pdo->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($id, $name, $email) 
    {
        $stmt = $this->pdo->prepare("UPDATE users SET name = :name, email = :email WHERE id = :id");
        $stmt->execute(['id' => $id, 'name' => $name, 'email' => $email]);
    }

    public function delete($id)
     {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}

$crud = new Crud($pdo);
