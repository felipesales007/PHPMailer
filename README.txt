1� s� edite/mexa no arquivo "enviar.php"
2� os arquivos devem estar na mesma pasta/n�vel
3� os outros arquivos n�o se mexe em nada
4� dentro do form do formul�rio para envio de email coloque action="enviar.php"
	ex:
		<form method="POST" action="enviar.php">
                    <input required type="text" name="mensagem_nome">
                    <input required type="email" name="mensagem_email">
                    <textarea required name="mensagem_mensagem"></textarea>
		    <button type="submit">Enviar Mensagem</button>
                </form>


FIM!!! :)