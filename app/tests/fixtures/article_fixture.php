<?php   
class ArticleFixture extends CakeTestFixture {
	var $name = 'Article';

	var $import = array(
		'model' => 'Article'
		// Could also add 'records' => true to load the records in from the existing
		// database table
	);  
	
	// Define some test data (rather than loading in from the database)
	var $records = array( 
        array ('id' => 1, 'title' => 'First Article', 'content' => 'First Article Body', 'published' => '1'), 
        array ('id' => 2, 'title' => 'Second Article', 'content' => 'Second Article Body', 'published' => '1'), 
        array ('id' => 3, 'title' => 'Third Article', 'content' => 'Third Article Body', 'published' => '1') 
    );
}
?>