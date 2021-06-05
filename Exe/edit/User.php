<?php

require_once '../../config.php';

if(!empty($_GET)){
   	 // $id=$_GET['id'];
     //  $nom=$_GET['nom'];
     //  $prenom=$_GET['prenom'];
  extract($_GET);

    $sql="UPDATE users SET Groupe_User='".$Groupe_User."', nom='".$nom."' , Prenoms='".$Prenoms."' , genre='".$genre."' ,username='".$username."' , password='".$password."' WHERE id=$id LIMIT 1 ";
    $up=$dbc->query($sql);
   	 
   	 if ($dbc) {
   	 		 echo"<script>

            			 alert('Mise a jour reussie');
             			 document.location.href='../../?C=user&M=list';

           				</script>"; die();
               } else{
                	 echo"<script>

            			 alert('Echec de la mise a jour');
             			 document.location.href='../../?C=user&M=list';

           				</script>"; die();
               }
   	}

    
?>