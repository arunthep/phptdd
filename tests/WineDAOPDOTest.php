<?php

/**
 * @backupGlobals disabled
 * @backupStaticAttributes disabled
 */

include '../web/WineDAOPDO.php';

class TestWineDAOPDO extends PHPUnit_Framework_TestCase {

    public function testListWine() {
        $mockStatement = $this->getMock('PDOStatement', ['fetchAll']);
        $mockStatement->expects($this->once())->method('fetchAll');

        $mockPDO = $this->getMock('MockPDO', ['query']);
        $mockPDO->expects($this->once())->method('query')->will($this->returnValue($mockStatement));

        $wineAPI = new WineDAOPDO();
        $wineAPI->setPDO($mockPDO);

        $wineAPI->listWine();
    }

}