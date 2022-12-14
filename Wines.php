<?php
print_r(dirname(__DIR__));die(' !!');

require_once (dirname(__DIR__) . './librairies/config/database.php');

class Wines
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = getPdo();
    }

    public function list()
    {
        $sql = $this->pdo->query("
      SELECT * 
      FROM wines 
      ORDER BY publish_date 
      DESC
    ");
        $sql->setFetchMode(\PDO::FETCH_ASSOC);

        return $sql;
    }
}