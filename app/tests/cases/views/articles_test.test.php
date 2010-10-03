<?php
class ArticlesTest extends CakeWebTestCase {
	function testIndexAddArticle() {
		$this->get('/');

		$this->clickLink('New Article');
		$this->assertText('New Article');
		
		$this->post('articles/add',
			array(
				'Article'=>array(
					'title'=>'Bacons',
					'content'=>"Here's some content",
					'published'=>1
				)
			)
		);
		$this->assertText('Bacons');
	}
}
?>