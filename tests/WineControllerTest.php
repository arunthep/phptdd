<?php
include __DIR__.'/../web/WineController.php';
include __DIR__.'/../web/WineDAOPDO.php';

/**
 * @backupGlobals disabled
 * @backupStaticAttributes disabled
 */
class WineControllerTest extends PHPUnit_Framework_TestCase{
    function testWineList(){

        $result = array(0 => array ("id" => "1","title" => "Hello!",
        "grapes" => "Just testing",
            "price" => "100",
            "country" => "Australia",
            "region" => "Victoria",
            "year" => "2010",
            "note" => "Note",
        ));

        $mockWineDAOPDO = $this->getMock('WineDAOPDO');
        $mockWineDAOPDO->expects($this->once())
                       ->method('listWine')
                       ->will($this->returnValue($result));
        $app = array('wine_dao_pdo'=>$mockWineDAOPDO);
        $wineController = new WineController($app);


        $actual   = $wineController->listWine();
        $expected = '[{"id":"1","title":"Hello!","grapes":"Just testing","price":"100","country":"Australia","region":"Victoria","year":"2010","note":"Note"}]';
        $this->assertEquals($expected,$actual);
    }

}
?>