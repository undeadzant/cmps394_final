<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- add header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Adminstrator <?php echo $title ?></a>
        </div>
        <!-- menu items -->
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if($title == "Login"){echo 'class="active"';} ?> ><a href="login.php">Login</a></li>
                <li <?php if($title == "Register"){echo 'class="active"';} ?> ><a href="register.php">Sign Up</a></li>
            </ul>
        </div>
    </div>
</nav>
