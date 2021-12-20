<?php
require_once("../backend/DbConnection.php");
require_once("../backend/class/customers.php");
$cus = new customers();
$cus->init(null,$_POST['Username'], $_POST['Password'], $_POST['Fullname'], $_POST['Email'], $_POST['Phone']);
if (customers::add($cus)) {
?>
    <script>
        alert('Đăng kí thành công');
        window.location.href = 'login.php';
    </script>
<?php
} else {
?>
    <script>
        alert('Đăng kí không thành công');
        window.history.back();
    </script>
<?php
}
?>


<?php
// require_once("../backend/DbConnection.php");
// require_once("../backend/class/customers.php");

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $Username = $_POST['Username'];
//     $Password = $_POST['Password'];
//     $Email = $_POST['Email'];
//     $Phone = $_POST['Phone'];

//     if(!empty($Usernam) && !empty($Password) && is_numeric($Username)){
//         $query = "INSERT INTO `customers` (`Username`,`Password`,`Email`,`Phone` ) VALUES ('$Username','$Password','$Email','$Phone')";
//     mysqli_query($con,$query);
//     header("Location: index.php");
//     die;
//     }
// }
?>