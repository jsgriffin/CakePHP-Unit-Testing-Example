<?php 
class ArticlesControllerTest extends CakeTestCase {	
	function testIndex() { 
		$result = $this->testAction('/articles/index',
										array('fixturize'=>true, 'return'=>'vars')
									); 
		$expected = array( 
	        array ('Article'=>array('id' => 1, 'title' => 'First Article', 'content' => 'First Article Body', 'published' => '1')), 
	        array ('Article'=>array('id' => 2, 'title' => 'Second Article', 'content' => 'Second Article Body', 'published' => '1')), 
	        array ('Article'=>array('id' => 3, 'title' => 'Third Article', 'content' => 'Third Article Body', 'published' => '1')) 
	    );
		$this->assertEqual($expected, $result['articles']);
	} 
} 
?>