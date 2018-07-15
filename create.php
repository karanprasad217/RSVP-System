<?php
require 'vendor/autoload.php';

date_default_timezone_set('UTC');
use Aws\DynamoDb\DynamoDbClient;
use Aws\DynamoDb\Exception\DynamoDbException;
$IAM_KEY = 'AKIAIMP6LVXBL2QTMECA';
$IAM_SECRET = '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';
try {
$dynamoc = DynamoDbClient::factory(
      array (
    'region'   => 'ap-south-1',
	'credentials.cache' => false,
    'validation' => true,
    'version'  => 'latest'
			) 
	); //factory
}  //try
catch (Exception $e) {
               
                die("Error: " . $e->getMessage());
        }
?>
<?php

$dynamoc->createTable(array(
'TableName' => 'partybast',
'AttributeDefinitions' => array(
    array('AttributeName' => 'UserId',      'AttributeType' => 'S'),
	array('AttributeName' => 'Main',      'AttributeType' => 'S'),
	array('AttributeName' => 'Message',      'AttributeType' => 'S'),
	array('AttributeName' => 'Coun',      'AttributeType' => 'N'),
),
'KeySchema' => array(
    array('AttributeName' => 'UserId', 'KeyType' => 'HASH'),
	array('AttributeName' => 'Main', 'KeyType' => 'RANGE')
),
'GlobalSecondaryIndexes' => array(
    array(
        'IndexName' => 'MessageIndex',
        'KeySchema' => array(
            array('AttributeName' => 'Message', 'KeyType' => 'HASH')
        ),
        'Projection' => array(
            'ProjectionType' => 'KEYS_ONLY',
        ),
        'ProvisionedThroughput' => array(
            'ReadCapacityUnits'  => 2,
            'WriteCapacityUnits' => 2
        )
    ),
	array(
        'IndexName' => 'CounIndex',
        'KeySchema' => array(
            array('AttributeName' => 'Coun', 'KeyType' => 'HASH')
        ),
        'Projection' => array(
            'ProjectionType' => 'KEYS_ONLY',
        ),
        'ProvisionedThroughput' => array(
            'ReadCapacityUnits'  => 2,
            'WriteCapacityUnits' => 2
        )
    )
),

'ProvisionedThroughput' => array(
    'ReadCapacityUnits'  => 5,
    'WriteCapacityUnits' => 5
)));


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>