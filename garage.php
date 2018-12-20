<?php
$steam=$steamid;
$sql = 'SELECT * FROM vehicle WHERE account_uid = '.$steam.'';
$req = $db->query($sql);
$req->setFetchMode(PDO::FETCH_ASSOC);

foreach($req as $row)
{
 ?>  
 <?php

   echo  $row['class'], '<br/>';
     echo  $row['class'], '<br/>';

}
?>