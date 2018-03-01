<?php
	if( !isset($_POST['url']) ) { echo 'no url to get'; }
    else { echo file_get_contents($_POST['url']); } 
?>