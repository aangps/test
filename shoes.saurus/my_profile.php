<?php 

if($user_id)
	{
		$module = isset($_GET['module']) ? $_GET['module'] : false;
		$action = isset($_GET['action']) ? $_GET['action'] : false;
		$mode = isset($_GET['mode']) ? $_GET['mode'] : false;
	}	

else
	{
		header("location:".BASE_URL."index.php?page=login");
	}

 ?>
<div id="bg-page-profile">
	<div id="profile-content">
	<?php 
	
	$file = "module/$module/$action.php";

	if (file_exists($file)) 
	{
		include_once($file);
	}

	else
	{
		echo "<h3>Maaf halaman ini tidak dapat diakses</h3>";
	}

	 ?>
	</div>
</div>