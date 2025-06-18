<?php

$config['autoAddSpamFilterRule'] = TRUE;
$config['spam_subject'] = '[SPAM]';
$config['caseInsensitiveSearch'] = TRUE;
$config['decodeBase64Msg'] = FALSE;
$config['spam_headers'] = array(
    'X-Spam-Flag', 
    'X-Spam-Status', 
    'X-Yandex-Spam', 
    'X-hMailServer-Spam', 
    'X-Spam-Level'
);

$config['spam_header_value'] = array(
    'X-Spam-Flag' => 'YES',
    'X-Spam-Status' => 'Yes,'
);

?>
