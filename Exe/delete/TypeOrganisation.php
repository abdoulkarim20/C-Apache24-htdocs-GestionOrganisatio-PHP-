<?php


  require_once '../../config.php';

  if(!empty($_GET['id'])){
        $id=$_GET['id'];
               
               $sql =  "DELETE FROM typeorganisation WHERE id=$id";
               
               $sth= $dbc->prepare($sql);
               $etudiant = $sth->execute();
                
               if($etudiant){

                	 echo"<script>

            			 alert('Suppression Reussie');
             			 document.location.href='../../?C=typeorganisation&M=list';

           				</script>"; die();
               } else{
                	 echo"<script>

            			 alert('Suppression Echouer');
             			 document.location.href='../../?C=typeorganisation&M=list';

           				</script>"; die();
               }



               

        }




?>