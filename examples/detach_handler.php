<?php

require_once dirname(dirname(__FILE__)) . '/lib/Scope/Guard.php';

main();
exit;

function main()
{
    $handler = function() {
        echo "Good Bye World...\n";
    };
    $guard = new \Scope\Guard($handler);
    echo "Hello World!\n";

    // Detach the handler
    $guard->dismiss();
}
