<?php

class Article extends AppModel {
	var $name = 'Article';
	
	function published(){
		return $this->find(array('published'=>1));
	}
}

?>