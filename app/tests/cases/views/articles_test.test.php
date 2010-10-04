<?php
class ArticlesTest extends CakeWebTestCase {
	var $baseurl;
	
	function setUp(){
		$this->baseurl = 'http://' . $_SERVER['HTTP_HOST'];
	}
	
	function testIndex() {
		$this->get($this->baseurl);
		$this->assertText('Articles');
	}
	
	function testAddArticle(){
		$this->get($this->baseurl . '/articles/add');
		$this->clickLink('New Article');
		$this->assertText('New Article');
		
		$this->setField('data[Article][title]', 'Bacons');
		$this->setField('data[Article][content]', 'And cheeses.');
		$this->setField('data[Article][published]', '1');
		$this->click('Submit');
		
		$this->get('http://cakeunit.dev/');
		$this->assertText('Bacons');
	}
}
?>