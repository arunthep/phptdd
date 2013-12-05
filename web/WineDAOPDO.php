<?php

class WineDAOPDO{

    private $title;
    private $grapes;
    private $price;
    private $country;
    private $region;
    private $year;
    private $note;
    public $dbh;

    private function createWineTable(){
        $this->dbh->exec("CREATE TABLE IF NOT EXISTS wines (
      id INTEGER PRIMARY KEY AUTOINCREMENT,
      title TEXT,
      grapes TEXT,
      price INTEGER,
      country TEXT,
      region TEXT,
      year TEXT,
      note TEXT
    )");
    }

    private function initialDataForWineTable(){
        $wines = array(
            array('title' => 'Hello!',
                'grapes' => 'Just testing',
                'price' => 100,
                'country' => 'Australia',
                'region' => 'Victoria',
                'year' => '2010',
                'note' => 'Note'),
        );

        $insert = "INSERT INTO wines (title, grapes, price, country, region, year, note)
      VALUES (:title, :grapes, :price,  :country, :region, :year, :note)";
        $stmt = $this->dbh->prepare($insert);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':grapes', $grapes);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':region', $region);
        $stmt->bindParam(':year', $year);
        $stmt->bindParam(':note', $note);

        foreach ($wines as $m) {
            $stmt->bindValue(':title', $m['title'], SQLITE3_TEXT);
            $stmt->bindValue(':grapes', $m['grapes'], SQLITE3_TEXT);
            $stmt->bindValue(':price', $m['price'], SQLITE3_INTEGER);
            $stmt->bindValue(':country', $m['country'], SQLITE3_TEXT);
            $stmt->bindValue(':region', $m['region'], SQLITE3_TEXT);
            $stmt->bindValue(':year', $m['year'], SQLITE3_TEXT);
            $stmt->bindValue(':note', $m['note'], SQLITE3_TEXT);
            $stmt->execute();
        }
    }

    function getConnection(){
        if($this->dbh == null){
            $this->dbh = new PDO('sqlite::memory:');
            //$pdo = new PDO('sqlite:./sqlite3/wines.sqlite3');
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->createWineTable();
            $this->initialDataForWineTable();
        }
        return $this->dbh;
    }

    function listWine() {
        try {
            $sql = "select * from wines";
            $local_dbh = $this->getConnection();
            $stmt = $local_dbh->query($sql);
            $wines = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $local_dbh = null;
            print_r($wines);
            return $wines;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function  setPDO($dbh){
        $this->dbh = $dbh;
    }

}

$wine = new WineDAOPDO();
$wine->listWine();