<?php

  ob_start();
  session_start();
    if(isset($_SESSION['username'])){
    unset ($_SESSION);
  ob_end_clean();
 session_destroy();

     echo"<h1>Semoga Kalean Senang :D</h1>";
    echo"<h2>klik <a href='../'>login </a> untuk login kembali</h2>";
    



}
 ?>