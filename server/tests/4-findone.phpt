--TEST--
Find one item by URL
--FILE--
<?php
include_once dirname(__FILE__) . "/connect.inc.php";

$application = $software->application("title", "Adminer")->fetch();
foreach ($application->application_tag("tag_id", 21) as $application_tag) {
	echo $application_tag->tag["name"] . "\n";
}
?>
--EXPECTF--
PHP
