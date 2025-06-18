<?php

// Learning driver
// Используем драйвер sa_blacklist для интеграции со SpamAssassin
$config['markasjunk_learning_driver'] = 'sa_blacklist';

// Ham mailbox
// Mailbox messages should be moved to when they are marked as ham. null = INBOX
// set to FALSE to disable message moving
$config['markasjunk_ham_mbox'] = null;

// Spam mailbox
// Mailbox messages should be moved to when they are marked as spam.
// null = the mailbox assigned as the spam folder in Roundcube settings
// set to FALSE to disable message moving
$config['markasjunk_spam_mbox'] = null;

// Mark messages as read when reporting them as spam
$config['markasjunk_read_spam'] = true;

// Add flag to messages marked as spam (flag will be removed when marking as ham)
// If you do not want to use message flags set this to false
$config['markasjunk_spam_flag'] = 'Junk';

// Add flag to messages marked as ham (flag will be removed when marking as spam)
// If you do not want to use message flags set this to false
$config['markasjunk_ham_flag'] = 'NonJunk';

// Write output from spam/ham commands to the log for debug
$config['markasjunk_debug'] = true;

// The mark as spam/ham icon can either be displayed on the toolbar or as part of the mark messages menu.
// Set to False to use Mark menu instead of the toolbar. Default: true.
$config['markasjunk_toolbar'] = true;

// Learn any message moved to the spam mailbox as spam (not just when the button is pressed)
$config['markasjunk_move_spam'] = true;

// Learn any message moved from the spam mailbox to the ham mailbox as ham (not just when the button is pressed)
$config['markasjunk_move_ham'] = true;

// sa_blacklist Driver options
// ---------------------------
// Path to SAUserPrefs config file
$config['markasjunk_sauserprefs_config'] = '../sauserprefs/config.inc.php';
