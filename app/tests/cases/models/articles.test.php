<?php
App::import('Model', 'Article');
    
class ArticleTest extends Article {
	var $name = 'ArticleTest';
	var $useTable = 'articles';
	var $useDbConfig = 'test';
}

class ArticleTestCase extends CakeTestCase {
	var $fixtures = array( 'app.article' );
    
	function testPublished() {
		$this->ArticleTest =& ClassRegistry::init('ArticleTest');

		$result = $this->ArticleTest->published(array('id', 'title'));
        $expected = array( 
            array('ArticleTest' => array( 'id' => 1, 'title' => 'First Article' )), 
            array('ArticleTest' => array( 'id' => 2, 'title' => 'Second Article' )), 
            array('ArticleTest' => array( 'id' => 3, 'title' => 'Third Article' )) 
        );

		$this->assertEqual($result, $expected);
	}
}
?>