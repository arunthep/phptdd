<?php
use Silex\WebTestCase;
use Silex\Application;

/**
 * @backupGlobals disabled
 * @backupStaticAttributes disabled
 */
class WineControllerWebTest extends WebTestCase
{
    function createApplication()
    {
        include __DIR__ . '/../web/index.php';
        return $app;
    }

    function testRoot()
    {
        $client = $this->createClient();
    }

    function testHello()
    {
        $expected = "Hello2";
        $client = $this->createClient();
        $crawler = $client->request('GET', '/Hello');
        $result = $client->getResponse()->getContent();
        $this->assertEquals($expected, $result);
    }

    function testListWine()
    {
        $expected = '[{"id":"1","title":"Hello!","grapes":"Just testing","price":"100","country":"Australia","region":"Victoria","year":"2010","note":"Note"}]';
        $client = $this->createClient();
        $crawler = $client->request('GET', '/');
        $result = $client->getResponse()->isOk();
        $this->assertTrue($result);
        $result = $client->getResponse()->getContent();
        $this->assertEquals($expected, $result);


    }
}
