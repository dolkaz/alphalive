<?php 
	
	// $array = array('status' => 1, 'sort' );
	$status_one = DB::table('leagues')->where('status', '1')->orderBy('sort_order', 'asc')->get(); 

	foreach ($status_one as $status) {

?>

	<li><?php echo $status->name; ?></li>

<?php 

	}

?>