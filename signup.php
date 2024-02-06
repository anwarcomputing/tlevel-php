<?php include("view/header.php"); ?>

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                    echo isset($_SESSION['error']) ? '<div class="alert alert-danger" role="alert">' . $_SESSION['error'] . '</div>' : '';
                ?>
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Registration</h2>
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="register_username">Username:</label>
                                <input type="text" class="form-control" id="register_username" name="register_username" required>
                            </div>

                            <div class="form-group">
                                <label for="register_password">Password:</label>
                                <input type="password" class="form-control" id="register_password" name="register_password" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include("view/footer.php"); ?>