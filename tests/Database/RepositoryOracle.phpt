<?php

declare(strict_types = 1);

namespace Test\Database;

use Dibi\Connection;
use Examples\Oracle\Entity;
use Examples\Oracle\Repository;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';
require __DIR__ . '/../../examples/oracle/Entity.php';
require __DIR__ . '/../../examples/oracle/Repository.php';


function connect()
{
	$db = [
		'driver' => 'oracle',
		'username' => 'travis',
		'password' => 'travis',
		'database' => '(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))',
		'charset' => 'utf8',
	];
	return new Connection($db);
}


test(function () {
	Assert::true(connect());
});
