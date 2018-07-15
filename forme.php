<style>
#pema{
	position:relative;
	background:#FFF;
	margin-top:-10px;
	margin-left:30px;
	width:120px;
	padding:0.5px;
	font-size:10px;
	font-stretch:condensed;
	color:#FFF;
	-webkit-font-smoothing:antialiased;
	font-weight:400;
	font-family: 'Courier New', Courier, monospace;	
	}
</style>
<?php

// Turn off all error reporting
error_reporting(0);
?>
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

<!--CREATE TABLE-->
<?php
/*
$dynamoc->createTable(array(
'TableName' => 'User',
'AttributeDefinitions' => array(
    array('AttributeName' => 'UserId',      'AttributeType' => 'S'),
    array('AttributeName' => 'OSType',      'AttributeType' => 'S'),
	array('AttributeName' => 'IMSI',     'AttributeType' => 'S'),
	array('AttributeName' => 'MSISDN',      'AttributeType' => 'N'),
	array('AttributeName' => 'DeviceID',      'AttributeType' => 'S')
	
),
'KeySchema' => array(
    array('AttributeName' => 'UserId', 'KeyType' => 'HASH')
),
'GlobalSecondaryIndexes' => array(
    array(
        'IndexName' => 'IMSIIndex',
        'KeySchema' => array(
            array('AttributeName' => 'IMSI',   'KeyType' => 'HASH')
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
        'IndexName' => 'MSISDNIndex',
        'KeySchema' => array(
            array('AttributeName' => 'MSISDN', 'KeyType' => 'HASH')
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
        'IndexName' => 'DeviceIDIndex',
        'KeySchema' => array(
            array('AttributeName' => 'DeviceID',  'KeyType' => 'HASH')
        ),
        'Projection' => array(
            'ProjectionType' => 'KEYS_ONLY',
        ),
        'ProvisionedThroughput' => array(
            'ReadCapacityUnits'  =>  2,
            'WriteCapacityUnits' =>  2
        )
    ),
),
'ProvisionedThroughput' => array(
    'ReadCapacityUnits'  => 5,
    'WriteCapacityUnits' => 5
)));

*/
?>
<!-- INSERT ELEMENT-->
<?php
/*$dynamoc->putItem(array(
    'TableName' => 'User',
    'Item' => 
	
	array(
        'UserId'      => array('S' => '1201'),
        'OSType'    => array('S' => '1'),
		
		'IMSI'    	 => array('S' => '42'),
		'MSISDN'    => array('S' => '12')
    ),
	
));
*/
?>
<!--RETRIEVE ELEMENT-->

<?php
/*$result= $dynamoc->getItem(array(
    'ConsistentRead' => true,
    'TableName' => 'User',
    'Key'       => array(
        'UserId'   => array('S' => '121'),
        'OSType' => array('S' => '127')
    )
));


echo $result['User']['UserId']['S'] . "\n";

*/
?>

<?php

// Turn off all error reporting
error_reporting(0);
?>

<?php

echo "<div style='width:152px; margin-top:0px; height:auto; border:solid 2px #F00; background:#000; padding:2px; padding-bottom:2px; 	padding-top:10px;'>";
echo "<p style='text-align:center; letter-spacing:4px;  background:#FFF;padding-bottom:10px;margin-top:-5px;font-size:12px;font-stretch:condensed;color:#000;-webkit-font-smoothing:antialiased;font-weight:400;font-family: 'Courier New', Courier, monospace;'><u>Who will join?</u></p>";
try{
/*$response = $dynamoc->getItem(array(
    "TableName" => "User",
    "ConsistentRead" => true,
    "Key" => array(
        "UserId" => array('S' => '1201'),
		"OSType" => array('S' => '1')
    ),
    "AttributesToGet" => array("IMSI")
));
echo $response["Item"]["IMSI"]["S"];
*/





/*$result = $dynamoc->query(array(
   'TableName' => 'User',
   'KeyConditions' => array(
   		'UserId' => array(
            'AttributeValueList' => array(
                array('S' => 'FuckMePlease.jpg')
            ),
            'ComparisonOperator' => 'EQ'
    ))));
	
*/

$result = $dynamoc->scan(array(
 'TableName' => 'partybastards',
 ));
 
 	
$count=0;
foreach ($result as $karan => $pema) {
	

	echo'<pre>';
    $neha[] = $pema;
	   if(is_array($pema)){
		   $mega1 = array();
		 foreach($pema as $cunt => $mega){     //excuse the language, i code to build interest
			 $mega1[] = $mega;
			 if(is_array($mega)){	 
			 echo "<div id='pema'>";
				 echo "<table id='joke01' style=''>";
				 print_r("<strong style='color:DeepPink; margin-left:-30px;font-size:10px;font-stretch:condensed;color:#FFF;-webkit-font-smoothing:antialiased;font-weight:400;font-family: 'Courier New', Courier, monospace;'>".++$count.'<strong style="color:#FF1D8E;">&nbsp;&#8608;</strong>'."</strong>");
				 

foreach ($mega as $x1 => $x2) // For every field name (id, name, last_name, gender)
{
   //$x3 = str_replace("UserId","File",$x1);  
    print_r( "\t<div style='margin-top:-12px;'><th style='background:#000; color:#FFF; border-color:#FF0000; border-width:2px; border-style:solid; padding-left:5px; padding-right:5px; font-size:10px;font-stretch:condensed;color:#FFF;-webkit-font-smoothing:antialiased;font-weight:400;font-family: 'Courier New', Courier, monospace;' >". $x1 ."</th></div>\n" ); // create a table cell1 with the field name
	 
	    foreach ($x2 as $cell1) // for every sub-array iterate through all values
		{
           print_r("\t<div style=''><td style='padding-right:px;border-color:#000; border-width:2px; border-style:solid;font-size:10px;font-stretch:condensed;color:#000;-webkit-font-smoothing:antialiased;font-weight:600;font-family: 'Courier New', Courier, monospace; color:black;'>" . $cell1 . "</td></div>\n"); // write cell1s next to each other
        }
	 
}

echo "</table>";
echo "</div>\n";

			 }
			}
	}
	
}
//print_r($mega1);	
		
	
} catch (Exception $e) {
                // We use a die, so if this fails. It stops here. Typically this is a REST call so this would
                // return a json object.
                die("Error: " . $e->getMessage());
        }

echo "</div>\n";


?>

