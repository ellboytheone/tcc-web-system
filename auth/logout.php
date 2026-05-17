<?php
/* Apenas aceitar pedidos POST */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../login.php');
    exit;
}

/* Iniciar a sessão para poder destruí-la */
session_start();

/* 1. Limpar todas as variáveis de sessão */
$_SESSION = [];

/* 2. Apagar o cookie de sessão do browser (se existir) */
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,    /* data no passado → apaga o cookie */
        $params['path'],
        $params['domain'],
        $params['secure'],
        $params['httponly']
    );
}

/* 3. Destruir a sessão no servidor */
session_destroy();

/* 4. Redirecionar para o login com parâmetro de feedback */
header('Location: ../login.php?logout=1');
exit;
