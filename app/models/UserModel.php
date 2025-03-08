<?php
require_once __DIR__ . '/../../config/database.php';

class UserModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function autenticación($correo, $password)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE correo = ? AND password = ?");
        $stmt->execute([$correo, $password]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
