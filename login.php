<?php

session_start();
include('dbcon.php');
if (isset($_POST['userid']) && isset($_POST['password'])) {

    $userid = $_POST['userid'];
    $psw = $_POST['password'];
    echo $userid . $psw;
    $getUser_sql = 'SELECT * FROM users WHERE user_id="' . $userid . '" AND password = "' . $psw . '"';
    
    $getUser = mysql_query($getUser_sql);
    $getUser_result = mysql_fetch_assoc($getUser);
    $getUser_RecordCount = mysql_num_rows($getUser);

    if ($getUser_RecordCount < 1) {
        echo 'Username Password incorrect Please Try Again!';
    } else {
        echo $getUser_result['user_id'];
        $_SESSION['userid'] = $getUser_result['user_id'];
        $_SESSION['user_post'] = $getUser_result['post'];

        $u_post = $getUser_result['post'];
        if ($u_post == '1') {
            Header("Location: admin/admin.php");
        } else if ($u_post == '2') {
            Header("Location: hrmanager/hrm.php");
        } else if ($u_post == '3') {
            Header("Location: hrstaff/hrstaff.php");
		 }else if ($u_post == '4') {
            Header("Location: pm/pm.php");
		 }else {
            Header("Location: employee/employee.php");
        }
        //Header("Location: index.php");
    }
} else {
    echo 'please input username and password';
}
?>