<?php
    $command = escapeshellcmd('python/get_authentication_url.py');
    $output = shell_exec($command);

echo <<<HTML
<p>Welcome to the Musical DNA Project! <a href=\"$output\">Click here</a> to get started.</p>
HTML;
