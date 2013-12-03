<?php
use Silex\WebTestCase;
use Silex\Application;

class WineControllerWebTest extends WebTestCase{
  function createApplication(){
  	include __DIR__.'/../web/index.php';
  	return $app;
  }
  function testRoot(){
	$client = $this->createClient();
  }
  function testHello(){
$expected = "Hello";
    $client = $this->createClient();
    $crawler = $client->request('GET', '/Hello');
	$result = $client->getResponse()->getContent();
$this->assertEquals($expected,  $result);
  }
}
