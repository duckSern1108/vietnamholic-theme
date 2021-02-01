
	<?php
	$bgLink = get_background_image(); 
	if (strpos( $bgLink, 'http' ) === 0){
	echo '<img id="bigBgr" src="' . get_background_image() . '" alt="background" class="w-100 img-fluid"/>';}
?>
