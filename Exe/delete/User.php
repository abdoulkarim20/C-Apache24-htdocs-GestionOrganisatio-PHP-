<?php


  require_once '../../config.php';

  if(!empty($_GET['id'])){
        $id=$_GET['id'];
               
               $sql =  "DELETE FROM users WHERE id=$id";
               //var_dump($sql); die();
               $sth= $dbc->prepare($sql);
               $etudiant = $sth->execute();
               // var_dump($up); 
               if($etudiant){

                	 echo"<script>

            			 alert('Suppression Reussie');
             			 document.location.href='../../?C=user&M=list';

           				</script>"; die();
               } else{
                	 echo"<script>

            			 alert('Suppression Echouer');
             			 document.location.href='../../?C=user&M=list';

           				</script>"; die();
               }



               

        }




?>