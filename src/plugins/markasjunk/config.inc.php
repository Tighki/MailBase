<?php

// Learning driver
// Используем драйвер sa_blacklist для интеграции со SpamAssassin
$config['markasjunk_learning_driver'] = 'sa_blacklist';

// Ham mailbox
// Mailbox messages should be moved to when they are marked as ham. null = INBOX
$config['markasjunk_ham_mbox'] = null;

// Spam mailbox
// Mailbox messages should be moved to when they are marked as spam.
// null = the mailbox assigned as the spam folder in Roundcube settings
$config['markasjunk_spam_mbox'] = null;

// Mark messages as read when reporting them as spam
$config['markasjunk_read_spam'] = true;

// Add flag to messages marked as spam (flag will be removed when marking as ham)
$config['markasjunk_spam_flag'] = 'Junk';

// Add flag to messages marked as ham (flag will be removed when marking as spam)
$config['markasjunk_ham_flag'] = 'NonJunk';

// Write output from spam/ham commands to the log for debug
$config['markasjunk_debug'] = true;

// Learn any message moved to the spam mailbox as spam (not just when the button is pressed)
$config['markasjunk_move_spam'] = true;

// Learn any message moved from the spam mailbox to the ham mailbox as ham (not just when the button is pressed)
$config['markasjunk_move_ham'] = true;

// sa_blacklist Driver options
// ---------------------------
// Path to SAUserPrefs config file
$config['markasjunk_sauserprefs_config'] = '../sauserprefs/config.inc.php';
