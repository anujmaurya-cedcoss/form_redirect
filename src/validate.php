<?php
if($_POST['email'] == 'admin@mail.com' && $_POST['password'] == 'pass') {
    header('Location: user.php');
} else {
    header('Location: index.php');
}