<?php

namespace App;

use PDO;

/*include "conexao.php";*/

/**
 *  Classe responsável por fazer a gestão da conexão com o banco.
 */
class Database
{
    static $con;

    static public function getConnection(): PDO
    {
        if (isset(self::$con)) return self::$con;

        self::$con = new PDO('sqlite:progweb-db.sqlite');
        self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$con;
    }

    static public function createSchema(): void
    {
        $con = self::getConnection();
        $con->exec('
            CREATE TABLE IF NOT EXISTS Usuarios (
                nome  TEXT,
                email TEXT PRIMARY KEY,
                senha TEXT
            )
        ');
    }
}




