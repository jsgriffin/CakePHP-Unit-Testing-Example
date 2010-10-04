<?php
class ArticlesTest extends CakeWebTestCase {
	function testIndex() {
		$this->get('http://' . $_SERVER['HTTP_HOST']);
		$this->assertText('Articles');
	}
	
	function testAddArticle(){
		$this->get('http://' . $_SERVER['HTTP_HOST'] . '/articles/add');
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