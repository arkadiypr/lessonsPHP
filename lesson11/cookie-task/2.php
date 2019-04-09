<?php
if (!isset($_COOKIE['test'])) {
    setcookie('test', 123);
} else {
    echo $_COOKIE['test'];
    setcookie('test','', time());
}
