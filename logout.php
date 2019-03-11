<?php
session_start();
session_destroy();
echo "<script>
    alert('anda telah logout dari Notes!');
    window.location = 'login.php';
</script>";
?>