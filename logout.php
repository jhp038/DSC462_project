<br>
<?php
    setcookie("user", "", time()-3600);
echo"<script>alert('logout successfully!');</script>";
echo '<script>window.location.href="index.html";</script>';
?>
