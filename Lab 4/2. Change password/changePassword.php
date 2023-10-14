<?php
$currentPassord = $_REQUEST['currentpassword'];
$newPassword = $_REQUEST['newpassword'];
$retypepass = $_REQUEST['retypenewpassword'];

if ($currentPassord == $newPassword) {
    echo "Your new password same as the old password!";
} else if ($newpass != $retypepass) {
    echo "Retyped password does not match with the new password!";
} else {
    echo "Password changed successfully!";
}

?>
