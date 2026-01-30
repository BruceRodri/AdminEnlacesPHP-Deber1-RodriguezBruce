<?php
class Database
{
    private $connection;
    public function __construct()
    {
        // Según tus capturas, usas Laravel Herd/XAMPP en Windows, así que el host es '127.0.0.1' o 'localhost'
        $host = '127.0.0.1';
        $port = '3306'; // Puerto estándar de MySQL que se ve activo en tu XAMPP
        $dbname = 'db_tw'; // Tu nueva base de datos
        $user = 'root';     // Tu usuario
        $password = '';     // Sin contraseña según solicitaste

        try {
            // Cambiamos 'pgsql' por 'mysql'
            $dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8mb4";
            $this->connection = new PDO($dsn, $user, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function query($sql)
    {
        return $this->connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}