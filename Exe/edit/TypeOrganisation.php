<?php

require_once '../../config.php';

if(!empty($_GET)){

  extract($_GET);

       $req = $dbc->prepare("UPDATE typeorganisation SET libelle=:libelle WHERE id=:id ");
                $req->bindParam(':libelle', $libelle);
                $req->bindParam(':id', $id);
                $req->execute();
   	 
   	 if ($dbc) {
   	 		 echo"<script>

            			 alert('Mise a jour reussie');
             			 document.location.href='../../?C=typeorganisation&M=list';

           				</script>"; die();
               } else{
                	 echo"<script>

            			 alert('Echec de la mise a jour');
             			 document.location.href='../../?C=typeorganisation&M=list';

           				</script>"; die();
               }
   	}

    
?>