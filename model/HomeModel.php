<?php
class HomeModel
{

    public static function getProduct()
    {
    $db = Db::getConnection();
    $result =$db->query('SELECT * FROM Product');
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $productItems = $result->fetch();
    return $productItems;
    }
}
