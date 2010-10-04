<?php
// Load the model class
// The test harnesses load as little as possible, so everything must
// be loaded manually
App::import('Model', 'Article');
    
// Subclass the Article model for us to use as the model in the test
class ArticleTest extends Article {
	var $name = 'ArticleTest';
	var $useTable = 'articles';
	var $useDbConfig = 'test';
}

class ArticleTestCase extends CakeTestCase {
	// Load the fixtures from the fixtures/ folder
	var $fixtures = array( 'app.article' );
    
	function testPublished() {
		// Instantiate the model object
		$this->ArticleTest =& ClassRegistry::init('ArticleTest');

		// Call the published method and define the expected result
		$result = $this->ArticleTest->published(array('id', 'title'));
        $expected = array( 
            array('ArticleTest' => array( 'id' => 1, 'title' => 'First Article' )), 
            array('ArticleTest' => array( 'id' => 2, 'title' => 'Second Article' )), 
            array('ArticleTest' => array( 'id' => 3, 'title' => 'Third Article' )) 
        );

		// Check that they are equal
		$this->assertEqual($result, $expected);
	}
}
?>