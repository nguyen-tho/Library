<?php
session_start();
if (isset($_SESSION['cus'])) {
?>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand col-form-label text-light" href="index.php">Online Library</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#Contact">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#About">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-info" type="submit"><?= $_SESSION['cus']->Fullname ?></button>
                    </li>
                </ul>
        </div>
    </nav>
<?php
} else {
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand col-form-label text-light" href="index.php">Online Library</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#Contact">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#About">About us</a>
                    </li>
                    <li class="nav-right">
                        <a class="btn btn-success" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    <?php
}