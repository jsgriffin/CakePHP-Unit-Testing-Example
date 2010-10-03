<?php

class Article extends AppModel {
	var $name = 'Article';
	
    function published($fields = null) { 
        $conditions = array( 
            $this->name . '.published' => 1 
        ); 
         
        return $this->find('all', array('conditions'=>$conditions, 'fields'=>$fields)); 
    }
}

?>