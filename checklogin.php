<?php
session_start();
require_once("../backend/DbConnection.php");
require_once("../backend/class/customers.php");
// $cus = customers::getUsername($_POST['Username']);
if ($cus->Username == $_POST['Username']) {
      $_SESSION['cus'] = $cus;
      // header('location: ../index.php');
    ?>
    <script>
        alert('Không tìm thấy tài khoản');
        window.location = "login.php";
    </script>
    <?php
} else {
    if ($cus->Password == $_POST['Password']) {
        $_SESSION['cus'] = $cus;
        header('location: ../index.php');
    } else {
    ?>
        <script>
            alert('Sai password')
            window.location = "login.php";
        </script>
<?php
    }
}
?>

<?php
// session_start();
// require_once("../backend/DbConnection.php");
// require_once("../backend/class/customers.php");
// function check_login($con){
//   if(isset($_SESSION['CustomersID'])){
//       $id = $_SESSION['CustomersID'];
//       $query="select * from users where CustomersID = '$id' limit 1";

//       $result = mysqli_query($con, $query);
//       if($result && mysqli_num_rows($result) > 0){
//           $CustomersID = mysqli_fetch_assoc($result);
//           return $user_data = mysqli_fetch_assoc($result);
//           return $user_data;
//       }
//   }
// header("Location: index.php");
// die;
  
// }
?>
