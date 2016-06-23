<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <?php echo Asset::css('bootstrap.css'); ?>
        <?php echo Asset::css('custom.css'); ?>
        <?php echo Asset::js('jquery-2.2.3.min.js'); ?>
        <?php echo Asset::js('bootstrap.min.js'); ?>
    </head>
    <body>
        <header>
            <div class="container">
                <div id="logo"></div>
            </div>
        </header>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Project name</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?php echo Uri::create('acp');?>">Dashboard</a></li>
                            <li><a href="<?php echo Uri::create('acp/user');?>">User</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                </ul>
                            </li>
                        </ul>
                        
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>
            <div class="wraper">
                <?php if (Session::get_flash('success')): ?>
                    <div class="alert alert-success">
                            <strong>[Success] </strong><?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
                    </div>
                <?php if (Session::get_flash('error')): ?>
                    <div class="alert alert-danger">
                            <strong>[Error] </strong><?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
                    </div>
                <?php endif; ?>
                <?php endif; ?>
                <?php echo $container; ?>
            </div>
            
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
