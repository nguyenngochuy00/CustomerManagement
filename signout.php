<?php
    session_start();
    session_destroy();

    // // header : gửi 1 tiêu đề HTTP thô tới 1 máy khách
    header('Location: index.php');
?>