<?php
class DemoFlickr extends AppModel
{
	public $useTable = false; // This model does not use a database table
    public $name = 'DemoFlickr';
	
	//--- Create manually a property (because this model does not use database)
	var $_schema = array(
        'searchFlickr'		=>array('type'=>'string', 'length'=>150)
    );
	
	
	public $validate = array(
        'searchFlickr' => array(
            'rule' => 'notEmpty'
        )
    );
	
}