<?php
session_start();

//Se nao houver sessao iniciada ou o papel nao corresponder com a pagina acessada, sera direcionado ao login
if (!isset($_SESSION['usuario_id']) || $_SESSION['papel'] !== $papel_permitido) {
    header('Location: /gabnet-system/login.php');
    exit;
}