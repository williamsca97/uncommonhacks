<?php
    $command = escapeshellcmd('python/get_authentication_url.py');
    $output = shell_exec($command)
?>

<html>
    <head>
        <title>Musical DNA Project</title>
    </head>
    <body>
        <p>Welcome to the Musical DNA Project! <a href="<?php echo $output ?>">Click here</a> to get started.</p>
    </body>
</html>
