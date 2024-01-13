<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];

    // Destinatário do e-mail
    $destinatario = "thaisreisbueno@hotmail.com";

    // Assunto do e-mail
    $assunto_email = "Novo formulário de contato: $assunto";

    // Construa a mensagem do e-mail
    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "E-mail: $email\n";
    $mensagem_email .= "Assunto: $assunto\n";
    $mensagem_email .= "Mensagem:\n$mensagem";

    // Enviar e-mail
    mail($destinatario, $assunto_email, $mensagem_email);

    // Exibe uma mensagem de sucesso ou redireciona para uma página de agradecimento
    echo "<h2>Mensagem enviada com sucesso!</h2>";
} else {
    // Se o formulário não foi enviado corretamente, redirecione para a página do formulário
    header("Location: seu_formulario.html");
    exit();
}
?>
