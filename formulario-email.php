<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];

    // Destinatário do e-mail
    $destinatario = "thaisreisbueno@hotmail.com";

    // Assunto do e-mail
    $assunto = "Nova mensagem do formulário de contato";

    // Constrói a mensagem do e-mail
    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "E-mail: $email\n";
    $mensagem_email .= "Assunto: $assunto\n";
    $mensagem_email .= "Mensagem:\n$mensagem";

    // Envia o e-mail
    mail($destinatario, $assunto, $mensagem_email);

    // Exibe uma mensagem de sucesso
    echo "<h2>Mensagem enviada com sucesso!</h2>";
} else {
    // Se o formulário não foi enviado corretamente, redirecione para a página do formulário
    header("Location: https://tha1reis.github.io/Portfolio-Thais/");
    exit();
}
?>
