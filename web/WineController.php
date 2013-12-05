<?php
class WineController {

    function __construct($app) {
        $this->wine_DAO_PDO = $app['wine_dao_pdo'];

    }

    function listWine() {
        $result = $this->wine_DAO_PDO->listWine();
        return json_encode($result);
    }
}