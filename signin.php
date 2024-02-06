<?php include("view/header.php"); ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                    echo isset($_SESSION['error']) ? '<div class="alert alert-danger" role="alert">' . $_SESSION['error'] . '</div>' : '';
                ?>
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Login</h2>
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
<?php include("view/footer.php"); ?>