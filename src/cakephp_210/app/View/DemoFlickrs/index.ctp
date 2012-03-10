<!-- File: /app/View/DemoFlickr/index.ctp -->

<!-- Style for pagination
<link rel="stylesheet" type="text/css" href="css/demoFlickr.css" /> -->

<?php
	//--- Form
	echo $this->Html->css('demoFlickr.css');
    echo $this->Form->create('DemoFlickr', array('action' => 'index'));
    echo $this->Form->input('searchFlickr');
	echo $this->Form->error('message');
    echo $this->Form->end('Search');
	
	if ($nbImageTotal == 0) 
	{
		echo '<div id="flickr_container_empty">';
		echo 'No pictures found. Try again ;-) !';
		echo '</div>';
	}
	else
	{
		//--- Display a reasonable number of links in pagination
		if ($nbPageTotal - $currentPage > $maxPagination)
		{
			$nbPageDisplay = $maxPagination;
			$flagNext = 1;
		}
		else
		{
			$nbPageDisplay = $nbPageTotal - $currentPage;
			$flagNext = 0;
		}
?>


		<div id="flickr_container">
		<?php echo '<b>' . $tabResultFlickr['total'] . '</b> pictures found for <i>' . $search . "</i><br /> " . $nbPageTotal . " page(s)<br />"; ?>

		<table>
		<tr>
			<?php 
			//-----------------------------------------------------
			//--- Display pictures --------------------------------
			//-----------------------------------------------------
			foreach ((array)$tabResultFlickr['photo'] as $photo)
			{
				echo '<td>';
				$url = "http://farm" . $photo['farm'] . ".static.flickr.com/" . $photo['server'] . "/" . $photo['id'] . "_" . $photo['secret'] . "_m.jpg";
				$link = "http://www.flickr.com/photos/" . $photo['owner'] . "/" . $photo['id'] . "";
				echo "<a href='$link' target='_blank'><img class='preview' src='$url' height='120'/></a></td>";    		
			
			}
			?>
		</tr>
		</table>

		<div class="pagging">
		<ul id="pagination-flickr">

			<?php 
			//------------------------------------------------------
			//--- Display pagination -------------------------------
			//------------------------------------------------------

			//--- Visibility of the "Previous" button
			if($currentPage != 1)
			{	
				$numPage = $currentPage - $maxPagination;
				if($numPage < 1)
				{
					$numPage = 1;
				}
				echo '<li class="previous"><a href="?reqpage='.$numPage.'">Previous</a></li>';
			}

			for ($i = 0; $i <= $nbPageDisplay; $i++)
			{
				$numPage = $currentPage+$i;
				if($numPage == $currentPage)
				{
					echo '<li class="active">'.$numPage.'</li>';	
				}
				else if(($i == $nbPageDisplay) && ($flagNext == 1))
				{
					//--- Visibility of the "Next" button
					echo '<li class="next"><a href="?reqpage='.$numPage.'">Next </a></li>';
				}	
				else
				{
					echo '<li><a href="?reqpage='.$numPage.'">'.$numPage.'</a></li>';
				}
			}
			?>

		</ul>
		</div>

		</div>
	
<?php
	}
?>