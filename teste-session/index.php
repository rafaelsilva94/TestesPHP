<form method="POST" action="./">
    <input type="text" name="nome" />
    <input type="submit" value="Cadastrar" />
</form>

<?php
    session_start(); // para trabalhar com sessões primeiro, deve inicia-la antes de qualquer coisa

    if(isset($_POST['nome'])) { // se foi enviado formulário
        $_SESSION['NOME'] = $_POST['nome']; // para guardar algo na sessão crie o nome desejado conforme o exemplo e atribuir o valor recebido

        echo $_SESSION['NOME']; // após isso basta imprimir o valor armazenado conforme desejado chamando a variável de acordo com o exemplo
    }
?>


