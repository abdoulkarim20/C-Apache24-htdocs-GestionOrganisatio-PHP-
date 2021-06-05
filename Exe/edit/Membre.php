<?php

require_once '../../config.php';

if(!empty($_GET)){
  
  extract($_GET);



   $req = $dbc->prepare("UPDATE membres SET nom=:nom , prenoms=:prenoms,telephone=:telephone,email=:email,adresse=:adresse ,organisations_name=:organisations_name WHERE id=:id ");
                $req->bindParam(':nom', $nom);
                $req->bindParam(':prenoms', $prenoms);
                $req->bindParam(':telephone', $telephone);
                $req->bindParam(':email', $email);
                $req->bindParam(':adresse', $adresse);
                $req->bindParam(':organisations_name', $organisations_name);
                $req->bindParam(':id', $id);
                $req->execute();

 
  
     
     if ($req) {
   	 		 echo"<script>

            			 alert('Mise a jour reussie');
             			 document.location.href='../../?C=membre&M=list';

           				</script>"; die();
               } else{
                	 echo"<script>

            			 alert('Echec de la mise a jour');
             			 document.location.href='../../?C=membre&M=list';

           				</script>"; die();
               }
   	}

    
?>