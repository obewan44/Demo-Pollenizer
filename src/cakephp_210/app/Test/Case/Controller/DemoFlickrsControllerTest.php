<?php
class DemoFlickrsControllerTest extends ControllerTestCase {
    public $fixtures = array('app.demoFlickr');

    public function testIndex() {
        $result = $this->testAction('/demoFlickrs/index');
        debug($result);
    }

	  public function testIndexPostDataEmpty()
	{
        $data = array(
            'DemoFlickr' => array(
                'searchFlickr' => ''
            )
        );
        $result = $this->testAction(
            '/demoFlickrs/index',
            array('data' => $data, 'method' => 'post')
        );
        debug($result);
    }
	
    public function testIndexPostData()
	{
        $data = array(
            'DemoFlickr' => array(
                'searchFlickr' => 'plane'
            )
        );
        $result = $this->testAction(
            '/demoFlickrs/index',
            array('data' => $data, 'method' => 'post')
        );
        debug($result);
    }
	
	public function testPagination()
	{
		$data = array(
			'reqpage' => '1'
		);
		$this->testAction('/demoFlickrs/index', array('data' => $data, 'method' => 'get'));
		// some assertions.
	}
	
	
}