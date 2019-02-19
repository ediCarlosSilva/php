<?php
session_start();
function usuarioEstaLogado() {
    // return isset($_COOKIE['usuario_logado']);
    return isset($_SESSION['usuario_logado']);
}

function verificaUsuario() { 
    if(!usuarioEstaLogado()) {
        $_SESSION['danger'] = "Você não tem acesso a esta funcionalidade!";
        header("location: index.php");
        die();
    }
}

function usuarioLogado() {
    // return $_COOKIE['usuario_logado'];
    return $_SESSION['usuario_logado'];
}

function logaUsuario($email) {
    // setcookie("usuario_logado", $email);
    $_SESSION['usuario_logado'] = $email;
}

function logout() {
    session_destroy();
    session_start();
}