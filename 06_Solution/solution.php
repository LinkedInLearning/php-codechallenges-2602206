<?php

function validateEmail($email) {
  $regex = '/^[A-Za-z0-9_][A-Za-z0-9\._]*[A-Za-z0-9_]@[A-Za-z0-9_][A-Za-z0-9\._]*[A-Za-z0-9_]\.[A-Za-z]{2,4}$/';
  if (preg_match($regex, $email)) {
    return true;
  } else {
    return false;
  }
}
$testarray = array(
  "abc.de@abc.de",
  "Hans.Dampf@meinedomain.de",
  "Hans.Dampf.@meinedomain.de",
  "Hans_@meinedomain.de",
  "Hans@_meinedomain.de",
  "@meinedomain.de",
  "__@__.de",
  "HansDampf@meinedomain.config",
  "Hans%Dampf@meinedomain.de",
  ".HansDampf@meinedomain.de",
  "HansDampf@.meinedomain.de",
  "hans_dampf@mail..com",
  "hans_dampf@mail.com");

foreach ($testarray as $v) {
	if (validateEmail($v))
     echo "<h3>$v ist eine gültige E-Mail.</h3>\n";
  else 
		echo "<h3>$v ist keine(!) gültige E-Mail.</h3>\n";
}
?>