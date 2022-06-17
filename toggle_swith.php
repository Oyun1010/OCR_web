<?php
    if (isset($_POST[''])) {//Form was submitted
        (isset($_POST['machine_state'])) ? $status = 1 : $status = 0;
        //Update DB
   
    } else {//Page was loaded
        $status = $_SESSION['status'];
    }
    if ($status) {//status = 1 (on)
        $status_str = "Хувь хүн";
        $checked_status = "checked";
    } else {
        $status_str = "Ажилтан";
        $checked_status = "";
    }
   
?>