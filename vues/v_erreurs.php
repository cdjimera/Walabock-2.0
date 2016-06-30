<div class ="erreur">
<ul>
<?php 
foreach($_REQUEST['erreurs'] as $erreur)
	{
            echo "<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'>Error:</span>". $erreur ."</div>";
	}
?>
</ul></div>
