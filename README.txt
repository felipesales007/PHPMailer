1º só edite/mexa no arquivo "enviar.php"
2º os arquivos devem estar na mesma pasta/nível
3º os outros arquivos não se mexe em nada
4º dentro do form do formulário para envio de email coloque action="enviar.php"
	ex:
		<form method="POST" action="enviar.php">
                    <input required type="text" name="mensagem_nome">
                    <input required type="email" name="mensagem_email">
                    <textarea required name="mensagem_mensagem"></textarea>
		    <button type="submit">Enviar Mensagem</button>
                </form>


FIM!!! :)