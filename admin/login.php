<?php
session_start();
define('MyConst', TRUE);

if(isset($_SESSION['usr_id'])!="") {
    header("Location: index.php");
}

$title = "Login";
$header = "Louisiana Emergency Response";
include_once '../includes/dbconnect.php';
include_once '../includes/header.php';
include_once 'admin_nav.php';

//check if form is submitted
if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "SELECT * FROM Personnel WHERE email = '" . $email. "' and password = '" . md5($password) . "'";
    
    $result = $conn->query($sql);

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['usr_id'] = $row['id'];
        $_SESSION['usr_name'] = $row['name'];
        header("Location: index.php");
    } else {
        $errormsg = "Incorrect Email or Password!!!";
        var_dump(mysqli_fetch_array($result));
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                <fieldset>
                    <legend>Login</legend>
                    
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" name="email" placeholder="Your Email" required class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="Your Password" required class="form-control" />
                    </div>

                    <div class="form-group">
                        <input type="submit" name="login" value="Login" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        New User? <a href="register.php">Sign Up Here</a>
        </div>
    </div>
</div>

<?php
    include_once '../includes/footer.php';
?>
</body>
</html>