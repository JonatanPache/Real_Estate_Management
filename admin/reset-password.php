<?php include 'layouts/top.php'; ?>

<?php 
    if(isset($_SESSION['admin'])){
        header('location: '.ADMIN_URL.'dashboard.php');
    }   
?>

<?php
    if (isset($_POST['form_reset_password'])) {
        try {
            if ($_POST['email'] == '') {
                throw new Exception("Email can not be empty");
            }
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                throw new Exception("Email is invalid");
            }

            if ($_POST['password'] == '') {
                throw new Exception("Password can not be empty");
            }
            $q = $pdo->prepare("SELECT * FROM users WHERE email=? AND role=?");
            $q->execute([$_POST['email'], 'admin']);
            $total = $q->rowCount();
            if (!$total) {
                throw new Exception("Email is not found");
            } else {
                $result = $q->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $row) {
                    $password = $row['password'];
                    if (!password_verify($_POST['password'], $password)) {
                        throw new Exception("Password does not match");
                    }
                }
            }
            $_SESSION['admin'] = $row;
            header('location: ' . ADMIN_URL . 'dashboard.php');
        } catch (Exception $e) {
            $error_message = $e->getMessage();
        }
    }
?>

<section class="section">
    <div class="container container-login">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="card card-primary border-box">
                    <div class="card-header card-header-auth">
                        <h4 class="text-center">Reset Password</h4>
                    </div>
                    <div class="card-body card-body-auth">
                        <?php
                        if (isset($error_message)) {
                            ?> <script> alert("<?php echo $error_message; ?>") </script> <?php
                        }
                        if(isset($success_message)){

                        }
                        ?>
                        <form method="POST" action="">
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="retype_password" autocomplete="off" placeholder="Retype Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg w_100_p" name="form_reset_password">
                                    Submit
                                </button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'layouts/footer.php'; ?>