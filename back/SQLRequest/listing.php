<?php 

$database = new mysqli("localhost", "root", "", "gofast");

$query = $database->query("SELECT id, link FROM url WHERE utilisateur_id = 1");

if ($query) {
   $options = array();
   
   while ($row = $query->fetch_assoc()) {
       $id = $row['id'];
       $link = $row['link'];
       $options[] = "<option value=\"$id\">$link</option>";
   }
} else {
   echo "Erreur dans la requête SQL : " . $database->error;
}
$database->close(); 
?>