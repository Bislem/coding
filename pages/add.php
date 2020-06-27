<?php
use App\Form;

$form = new Form();

if(isset($_GET['action'])){
  $action = $_GET['action'];
}else{
  $app::error404();
}


?>

<div class="container-fluid">
<h3>Ajouter  <?= $action?></h3>

<?php

require "../pages/forms/". $action .".php";



?>

</div>