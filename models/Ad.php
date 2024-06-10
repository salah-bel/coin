<?php
require_once dirname(__DIR__) . '/utils/database.php';

class Ad  {
    private $id;
    private $title;
    private $description;
    private $cover;
    private $price;
    private $user_id;
    private $createdAt;
    private $pdo;

    public function __construct()
    {
        $this->pdo = database();
    }

    public function findAll() { // toutes les annonces 
        $sql = "SELECT 
        ads.*, 
        users.f_name as author ,
        users.avatar as author_avatar
        FROM ads 
        JOIN users 
        ON ads.user_id = users.id
  "; // joindre la table user a la table ads a condition users_id = cle primaire user 

        $stm = $this->pdo->prepare($sql);

        $stm->execute();

        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}