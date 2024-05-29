<?php 
ob_start();
?>

 <h1 class="text-primary">status</h1>
 
<?php 
 $countent = ob_get_clean();
 include('dashboard.php');
?>

