<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <?php echo Asset::css('bootstrap.css'); ?>
        <?php echo Asset::css('custom.css'); ?>
    </head>
    <body>
        <header>
            <div class="container">
                <div id="logo"></div>
            </div>
        </header>
        <div class="container">
            <?php echo $container; ?>
            <hr/>
            <footer>
                <p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
                <p>
                    <a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
                    <small>Version: <?php echo Fuel::VERSION; ?></small>
                </p>
            </footer>
        </div>
    </body>
</html>
