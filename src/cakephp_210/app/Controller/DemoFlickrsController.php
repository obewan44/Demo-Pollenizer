<?php
class DemoFlickrsController extends AppController
{
    public $name = 'DemoFlickrs';
    public $helpers = array('Html', 'Form');
	public $components = array('Session');
	
	public function index()
	{
		//-------------------
		//--- Constant ------
		//-------------------
		$apiKey = "4c84b138f7e5b470deeaf83977eae0d8";
		$perPage = 5;
		$currentPage = 1;
		$maxPagination = 10;
		$defaultSearch = 'Pollenizer';
			
		//-----------------------------
		//--- Import PHP Flickr API ---
		//----------------------------- 
		App::import('Vendor', 'phpFlickrLib', array('file' => 'phpFlickr-3.1' .DS . 'phpFlickr.php'));
		
		//----------------------------------
		//--- Input parameter for search ---
		//----------------------------------
		$this->DemoFlickr->set($this->request->data);
		if(!empty($this->request->data['DemoFlickr']['searchFlickr']))
		{
			//--- Save the search string in session
			$this->Session->write('search.string', $this->request->data['DemoFlickr']['searchFlickr']);
		}
		else
		{
			//--- If input post param is empty it means that user is playing with pagination.
			if($this->Session->read('search.string') == null)
			{
				//--- Set up a default search string in session
				$this->Session->write('search.string', $defaultSearch);			
			}
			if ($this->request->is('post'))
			{
				//--- User asked for a empty string
				$this->Session->write('search.string', '');
			}

		}
		//--- Let's use the current search string.
		$search = $this->Session->read('search.string');
		
		//--- Display the current search string in the Form
		//--- It must be a faster way to handle with this through the Model (it seems to be easier for db based Model)
		$this->request->data['DemoFlickr']['searchFlickr'] = $search;
		
		//--------------------------------------
		//--- Input parameter for pagination ---
		//--------------------------------------
		if ($this->request->is('get'))
		{
			if (!isset($this->request->query['reqpage']))
			{
				$currentPage = 1;
			}
			else
			{
				if (is_numeric($this->request->query['reqpage']))
				{
					$currentPage = $this->request->query['reqpage'];
				}
				else
				{
					$currentPage = 1;
				}
			}		
		}			
			
		if ($this->DemoFlickr->validates())
		{
			//------------------------------------------------------
			//--- Call Flickr --------------------------------------
			//------------------------------------------------------
			//$flickr = new $this->libFlickr->phpFlickr($params);
			$flickr = new phpFlickr($apiKey);
			//--- To enable cache in database, create a schema in MySql called db_cakeblog 
			//$flickr->enableCache ("db", "mysql://user:password@localhost/db_cakeblog");
			$tabResultFlickr = $flickr->photos_search(array('text' => $search, 'per_page' => $perPage, 'page' => $currentPage));

			//------------------------------------------------------
			//--- Pagination ---------------------------------------
			//------------------------------------------------------
			//--- Get Stat for pagination
			$nbImageTotal = $tabResultFlickr['total'];
			$nbPageTotal = ceil($nbImageTotal / $perPage);
			
			//--- Set data for output
			$this->set('search', $search);
			$this->set('nbImageTotal', $nbImageTotal);
			$this->set('nbPageTotal', $nbPageTotal);				
			$this->set('tabResultFlickr', $tabResultFlickr);
			$this->set('maxPagination', $maxPagination);
			$this->set('currentPage', $currentPage);			
		}
		else
		{
			// Didn't validate logic
			$errors = $this->DemoFlickr->validationErrors;
			$this->set('errors', $errors);
			$nbImageTotal = 0;
			$this->set('nbImageTotal', $nbImageTotal);			
		}

    }
	
}