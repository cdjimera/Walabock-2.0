
 <div class="contenu">

      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
     
<?php
foreach($lesoffres as $o)
{
  ?>  
     
     <center><table border="5" cellpadding="5" cellspacing="0" width="40%"><tr><td> <table border="0" cellpadding="0" cellspacing="0" width="70%">
   <tr>
   <?php $o['idoffre']; 
        $z = $o['idoffre'];   ?>
    <td valign="top"><?php echo "<img src='".$o['image']."' width=\"100px\"/>";?>&nbsp;   
       </td>
       <td align="left" valign="middle"><?php  echo $o['libelleOffre'];?><br>
	    <p>de la part de  : <?php echo $o['login'];?> </p><br>
           <p>Valeur du bien : <?php echo $o['valeur'];?> €</p>
  <p>Catégorie : <?php echo $o['libelleCat'];?> </p>
  <br><a class="btn btn-primary btn-lg"  href=index.php?uc=ctrlTroc&action=offredetails&idoffre=<?php echo $o['idoffre'];?>  >
  Détails
  </a>

     </td>
   </tr>
   
           </table></td></tr></table></center><br>
     
    <?php 
}
?>

  </div>    
