<?php
    session_start();
    $nome = $_POST["mensagem_nome"];
    $email = $_POST["mensagem_email"];
    $mensagem = $_POST["mensagem_mensagem"];

    require_once("PHPMailerAutoload.php");

    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->Host = 'smtp.live.com'; // Define o email que se utilizara (live -> hotmail) para saber de outros procurar na internet
    $mail->Port = 587; // Define a porta do email que se utilizara (587 -> hotmail) para saber de outros procurar na internet
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "suaconta@hotmail.com"; // Sua conta de email (email que enviara a mensagem)
    $mail->Password = "suasenhadoemail"; // Senha do email (email que enviara a mensagem)

    $mail->setFrom("suaconta@hotmail.com", "Contato"); // Sua conta de email de novo (email que enviara a mensagem)
    $mail->addAddress("quemrecebeoemail@hotmail.com"); // Email que recebera a mensagem/email, pode ser o mesmo email utilizado anteriormente ou de algum adm/chefe
    $mail->Subject = "Contato Online"; // Titulo do email enviado
    $mail->msgHTML("<html>De: {$nome}<br/>Email: {$email}<br/><br/>Mensagem: {$mensagem}</html>");
    $mail->AltBody = "De: {$nome}\nEmail: {$email}\n\nMensagem: {$mensagem}";

    if($mail->send()) {
        $_SESSION["success"] = "Mensagem enviada com sucesso!"; // Usado para notificação de aviso (se seu sistema web estiver configurado, no contrario pode apagar esta linha)
        header("Location: ../index.php"); // Pagina que a tela redirecionara caso a mensagem tenha sido enviada com sucesso
    }else{
        $_SESSION["danger"] = "Erro ao enviar mensagem!" . $mail->ErroInfo; // Usado para notificação de aviso (se seu sistema web estiver configurado, no contrario pode apagar esta linha)
        header("Location: ../index.php"); // Pagina que a tela redirecionara caso a mensagem não tenha sido enviada (em caso de erro)
    }
    die();
?>
