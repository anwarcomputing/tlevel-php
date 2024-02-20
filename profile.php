<?php include("view/header.php"); 

include("model/db.php");

$sql = 'SELECT * FROM users WHERE username="'.$_SESSION['username'].'"';
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 

?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Profile</h5>
                        <p class="card-text">This is your profile information.</p>
                        <ul class="list-group">
                            <li class="list-group-item">Name: <?php echo $row['name']; ?></li>
                            <li class="list-group-item">Email: <?php echo $row['email']; ?></li>
                            <li class="list-group-item">Location: New York</li>
                        </ul>
                    </div>
                </div>  
            </div>
        </div>
    </div>

<?php include("view/footer.php"); ?>