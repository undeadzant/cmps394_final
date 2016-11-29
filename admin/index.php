<?php
define('MyConst', TRUE);
session_start();
$title = "admin";
$header = "Louisiana Emergency Response Dispatch";
$css = array('https://unpkg.com/leaflet@1.0.2/dist/leaflet.css', 'assets/stylesheet.css');
$js = array('https://unpkg.com/leaflet@1.0.2/dist/leaflet.js', 'assets/map.js');
include_once '../includes/dbconnect.php';
include_once '../includes/header.php';
?>
<?php if (!isset($_SESSION['usr_id'])) { 
    header("Location: login.php");
}?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Dispatch Dashboard</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                <li><a href="logout.php">Log Out</a></li>
                <?php } else { ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Sign Up</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <?php include_once 'sidebar_left.php'; ?>

        <div class="col-sm-9 col-md-10">

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="overview"><?php include_once 'content/overview.php'; ?></div>
                <div role="tabpanel" class="tab-pane" id="emergencies"><?php include_once 'content/emergencies.php'; ?></div>
                <div role="tabpanel" class="tab-pane" id="personnel"><?php include_once 'content/personnel.php'; ?></div>
                <div role="tabpanel" class="tab-pane" id="info"><?php include_once 'content/info.php'; ?></div>
            </div>
            
        </div>

    </div>
    
</div>

<?php 
    include_once '../includes/footer.php';
?>

</body>
</html>