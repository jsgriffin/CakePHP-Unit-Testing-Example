<?php 
class ArticlesControllerTest extends CakeTestCase {
	// Load the fixtures from the fixtures file
	var $fixtures = array( 'app.article' );
		
	function testIndex() { 
		// Fetch the index, and grab the vars that are passed to the view
		$result = $this->testAction('/articles/index',
										array('return'=>'vars')
									);
									 
		// Define the expected result
		$expected = array( 
	        array ('Article'=>array('id' => 1, 'title' => 'First Article', 'content' => 'First Article Body', 'published' => '1')), 
	        array ('Article'=>array('id' => 2, 'title' => 'Second Article', 'content' => 'Second Article Body', 'published' => '1')), 
	        array ('Article'=>array('id' => 3, 'title' => 'Third Article', 'content' => 'Third Article Body', 'published' => '1')) 
	    );
		$this->assertEqual($expected, $result['articles']);
	} 
} 
?>