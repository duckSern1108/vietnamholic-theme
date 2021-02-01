<?php 
function createLR($mainItemcount_n,$halfCount,$menuItems,$totalItems,$x_n) {
	$mainItemcount = $mainItemcount_n;
	$x = $x_n;
	$parentId = 0;
	?>
	<?php
	while ($mainItemcount < $halfCount && $x < $totalItems) {
		$item =  $menuItems[$x];
		$nextParentId = $menuItems[$x + 1] -> menu_item_parent;
		if ( $item->menu_item_parent == 0) {
			$mainItemcount++;
			$parentId = $item->ID;
			?>
			
				<?php if ($nextParentId == $parentId) { ?>
					<li class="nav-item fw-500 px-3 dropdown" onmouseover="navbarHover(this.id)" id="<?php echo $mainItemcount ?>" onmouseout="navbarHover(this.id)" >
					<a class="nav-link d-inline-block me-atuo" id="navbarDropdown<?php echo $mainItemcount;?>"  href="<?php echo $item->url;?>">
						<?php echo $item->title ?> 
					</a>
					<button class="d-xs-block d-lg-none btn" id="btn<?php echo $mainItemcount ?>" onclick="navbarBtnClick(this.id)"><i class="fas fa-angle-down"></i></button>
				<ul class="dropdown-menu my-0 p-0" aria-labelledby="navbarDropdown<?php echo $mainItemcount ?>" id="navbarDropdown<?php echo $mainItemcount ?>Data">
				
				<?php 
				} else {?>
					<li class="nav-item fw-500 px-3 dropdown"  id="<?php echo $mainItemcount ?>">
				<a class="nav-link" id="navbarDropdown<?php echo $mainItemcount;?>"  href="<?php echo $item->url;?>">
					<?php echo $item->title ?> 
				</a>
					</li>
				<? } ?>

			  <?php
		}
		else {
			echo '<li class="dropdown-item"><a class="nav-link" href="' .  $item->url . '">' .  $item->title . '</a></li>';
			if ($nextParentId != $parentId) echo '</ul></li>';
		}
		$x++;
	}
	return array($mainItemcount,$x);
}
?>
<nav class="navbar navbar-expand-lg navbar-light ps-3 pe-3" style="box-shadow:0px 0px 5px 0px rgb(40 40 40 / 81%); ">
<div class="container d-block">
	<div class="d-flex justify-content-between align-items-center ms-auto">
		<div class="d-none d-lg-block"></div>
		<a class="brand d-block fs-2" href="/">
					Vietnamholic
		</a>
		<button id="nav-icon3" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
					<span></span>
					<span></span>
					<span></span>
					<span></span>
		</button>
		<div class="d-none d-lg-block"></div>
	</div>
    <div class="collapse navbar-collapse justify-content-around fs-5" id="navbarSupportedContent" style="justify-content: space-between;">
      	<ul class="navbar-nav justify-content-md-end" id="nav-left">
<?php 
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object( $locations[ 'primary' ] );
$menuItems = wp_get_nav_menu_items( $menu->term_id, array() );
$displayItemCount = 0;
foreach($menuItems as $item) {
	if ( !$item->menu_item_parent  ) {
		$displayItemCount++;
	}
} 
$halfCount = round($displayItemCount /2);

$parentId = 0;
$totalItems = count($menuItems);
$arr = createLR(0,$halfCount,$menuItems,$totalItems,0);
?>
      	</ul>
		<ul class="navbar-nav" id="nav-right" >
		<?php createLR($arr[0],$displayItemCount,$menuItems,$totalItems,$arr[1])?>
			<li class="nav-item fw-500  px-3"><?php get_search_form()?></li>
		</ul>
      	
</div> 
</div>
</nav>