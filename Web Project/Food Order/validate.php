 <?php
               session_start();
                if (isset($_POST["submit"])) {
                    $user=$_POST["user"];
                    $pass=$_POST["pass"];
                    $query ="SELECT * FROM login WHERE user_name='$user'";
                    include("./connection.php");
                    if ($result) {
                    while($row=mysqli_fetch_array($result))
                    {
                        $id=$row["id"];
                        $user=$row['user_name']; 
                        $passwords=$row['password'];
                        if ($pass==$passwords) {
                            $_SESSION["log"]=$id;
                            header("location: ../New Folder/index.php");
                        }
                    }
                }header("location: ./orders.php");
            }
                
                ?>