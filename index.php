<?php
ob_start();

$phpversion = phpversion();
    
$htmlBody = <<<EOT
<h1>Hi there, PHPUS!</h1>
<h2>Vanilla PHP</h2>

<p>Current PHP version: $phpversion</p>
EOT;

echo $htmlBody;

ob_end_flush();
