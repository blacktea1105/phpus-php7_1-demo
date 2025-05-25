<?php
ob_start();

$phpversion = phpversion();
    
$htmlBody = <<<EOT
<h1>Hi there, PHPUS!</h1>

<p>Current PHP version: $phpversion</p>
EOT;

echo $htmlBody;

ob_end_flush();
