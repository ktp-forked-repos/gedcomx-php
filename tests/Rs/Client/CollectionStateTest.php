<?php

namespace Gedcomx\Tests\Rs\Client;

use Gedcomx\Rs\Client\Util\GedcomxPersonSearchQueryBuilder;
use Gedcomx\Tests\ApiTestCase;
use Gedcomx\Rs\Client\StateFactory;

class CollectionStateTest extends ApiTestCase{

	public function testSearchForPersonsWithQueryBuilder(){
		$query = new GedcomxPersonSearchQueryBuilder();
		$query->givenName("George")
			  ->surname("Washington")
			  ->deathPlace( "Mount Vernon, VA" );
		$stateFactory = new StateFactory();
		$searchResults = $stateFactory
			->newCollectionState($this->apiEndpoint)
			->authenticateViaOAuth2Password(
				$this->apiCredentials->username,
				$this->apiCredentials->password,
				$this->apiCredentials->apiKey)
			->searchForPersons($query);

		$this->assertNotNull($searchResults->getPerson());
	}

	public function testSearchForPersonsWithQueryString(){
		$stateFactory = new StateFactory();
		$persons = $stateFactory
			->newCollectionState($this->apiEndpoint)
			->authenticateViaOAuth2Password(
				$this->apiCredentials->username,
				$this->apiCredentials->password,
				$this->apiCredentials->apiKey);

		$this->assertNotNull($persons->getPerson());
	}

	public function testCanReadPerson(){
		$stateFactory = new StateFactory();
		$persons = $stateFactory
			->newCollectionState($this->apiEndpoint)
			->authenticateViaOAuth2Password(
				$this->apiCredentials->username,
				$this->apiCredentials->password,
				$this->apiCredentials->apiKey)
			->readPerson('PPPJ-MYZ');

		$stop = "here";
		$this->assertNotNull($persons->getPerson());
	}
} 