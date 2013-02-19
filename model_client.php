<?php
class ClientModel implements \OAuth2\Storage\ClientInterface {

	public function getClient($clientId = null, $clientSecret = null, $redirectUri = null)
	{
		return array(
			'client_id' => '1234',
			'client secret' => '5678',
			'redirect_uri' => 'http://foo/redirect',
			'name' => 'Test Client'
		);
	}

}