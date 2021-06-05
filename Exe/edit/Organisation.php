<?php

require_once '../../config.php';

if(!empty($_GET)){
  
  extract($_GET);



   $req = $dbc->prepare("UPDATE organisations SET nom=:nom , ZoneIntervention=:ZoneIntervention,theme=:theme,contact=:contact,adresse=:adresse ,type_organisations=:type_organisations WHERE id=:id ");
                $req->bindParam(':nom', $nom);
                $req->bindParam(':ZoneIntervention', $ZoneIntervention);
                $req->bindParam(':theme', $theme);
                $req->bindParam(':contact', $contact);
                $req->bindParam(':adresse', $adresse);
                $req->bindParam(':type_organisations', $type_organisations);
                $req->bindParam(':id', $id);
                $req->execute();

 
  
     
     if ($req) {
   	 		 echo"<script>

            			 alert('Mise a jour reussie');
             			 document.location.href='../../?C=organisation&M=list';

           				</script>"; die();
               } else{
                	 echo"<script>

            			 alert('Echec de la mise a jour');
             			 document.location.href='../../?C=organisation&M=list';

           				</script>"; die();
               }
   	}

    
?>