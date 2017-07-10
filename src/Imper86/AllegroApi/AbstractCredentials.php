<?php


namespace Imper86\AllegroApi;


abstract class AbstractCredentials implements CredentialsInterface
{
	public function getAllegroSoapWsdl(): string
	{
		if($this->getAllegroUseSandbox()) {
			return 'https://webapi.allegro.pl.webapisandbox.pl/service.php?wsdl';
		}

		return 'https://webapi.allegro.pl/service.php?wsdl';
	}
}