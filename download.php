<?php

/**
 * Download - Script php para fazer download de arquivos do servidor para o cliente
 * @autor Diego Andrade (didi.ufs@gmail.com)
 *
 * ------------Modo de usar -------
 * download($arquivo, 'nomeDoArquivo');
 * @require PHP5+
 */

function download($arquivo, $nome = null) {

	if (file_exists($arquivo)) {
		header('Content-Description: Transferencia de Arquivo');
		header('Content-Type: application/octet-stream');
		header('Expires: 0');
		header('Pragma: public');
		header('Content-Length: '.filesize($arquivo));

		if (!$nome) {
			header('Content-Disposition: attachment; filename='.basename($arquivo));
		} else {
			header('Content-Disposition: attachment; filename='. urlencode($name ?: basename($arquivo)));
		}
		readfile($arquivo);
		exit();
	}
}
