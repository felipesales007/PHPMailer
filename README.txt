1º só utilize o arquivo "enviar.php"
2º os outros arquivos não se mexe nada
3º dentro do form do formulário para envio de email coloque action="enviar.php"
	ex:
		<form method="POST" action="enviar.php">
                    <input required type="text" name="mensagem_nome">
                    <input required type="email" name="mensagem_email">
                    <textarea required name="mensagem_mensagem"></textarea>
		    <button type="submit">Enviar Mensagem</button>
                </form>


FIM!!! :)