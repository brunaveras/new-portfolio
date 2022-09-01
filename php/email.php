<?php
if(isset($_POST['nome']) && !empty($_POST['nome'])) {

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $projeto = addslashes($_POST['projeto']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "donabruna.zip@gmail.com";
    $assunto = "Contato pelo site";
    $corpo = "Nome:".$nome." - E-mail: ".$email." - Mensagem: ".$msg;
    $cabecalho = "From:";
}






?>