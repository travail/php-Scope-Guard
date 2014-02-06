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
    // Fire the handler
    $guard = null;
    echo "Hello Again, World!\n";
}
