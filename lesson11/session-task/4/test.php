<?php
session_start();
if (isset($_SESSION['country'])) {
    echo 'Your country: '.$_SESSION['country'];
}