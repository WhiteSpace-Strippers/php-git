--TEST--
Check for Git2\Repository::isBare
--SKIPIF--
<?php if (!extension_loaded("git2")) print "skip"; ?>
--FILE--
<?php
$repo = new Git2\Repository(__DIR__ . "/mock/001-01");
if ($repo->isBare()) {
	echo "OK" . PHP_EOL;
} else {
	echo "FAIL" . PHP_EOL;
}
--EXPECT--
OK
