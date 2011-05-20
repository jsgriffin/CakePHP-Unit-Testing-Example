<?php
class ArticlesTest extends CakeWebTestCase {
	var $baseurl;
	
	function setUp(){
		$this->baseurl = 'http://' . $_SERVER['HTTP_HOST'];
	}
	
	/*function testIndex() {
		// Checks that the home page loads
		$this->assertTrue($this->get($this->baseurl));
	}
	
	function testAddArticle(){
		$this->assertTrue($this->get($this->baseurl . '/articles/add'));
		
		// Fill in the form fields
		$this->setField('data[Article][title]', 'Bacons');
		$this->setField('data[Article][content]', 'And cheeses.');
		$this->setField('data[Article][published]', '1');
		
		// Submit the form
		// 'Submit' is the text of the button to click
		$this->click('Submit');
		
		// Get the home page, and ensure the new post is on there
		$this->get($this->baseurl);
		$this->assertText('Bacons');
	}*/
}
?>