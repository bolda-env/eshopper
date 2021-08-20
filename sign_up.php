<?php include("auth/connect.php");
if(isset($_POST['sign']))
{
    $uname=$_POST['name'];
    $email=$_POST['email'];
    $password=md5($_POST['pass']);

    $sel=mysqli_query($link,"SELECT * FROM user WHERE `email`='$email'");
    $ft=mysqli_fetch_array($sel);
    $dbemail=$ft['email'];

    if(!empty($dbemail))
    {
        $_SESSION['ALEWRT']='Email Already Registered';
        header("LOCATION: login.php");
        if(!empty($_SESSION['current_page'])){
            header("LOCATION:".$_SESSION['current_page']);
        }else{
            header("LOCATION: login.php");
        }
    }else{
        $qry=mysqli_query($link,"INSERT INTO user (`name`,`email`,`password`) VALUES ('$uname','$email','$password')");
        $_SESSION['login_user']=$_POST['email'];
        header("LOCATION: index.php");
    }
}

if(isset($_POST['login']))
{   
    $email=$_POST['email'];
    $password=md5($_POST['pass']);

    $sel = mysqli_query($link, "SELECT * FROM user WHERE `email`='$email'");
    $ft = mysqli_fetch_array($sel);

    $dbemail = $ft['email'];
    $dbpwd = $ft['password'];

    if(!empty($dbemail))
    {
        if($password == $dbpwd)
        {
            $_SESSION['login_user'] = $_POST['email'];
            if(empty($_SESSION['current_page']))
            {
                header("LOCATION: index.php");
            }else{
                header("Location: ". $_SESSION['current_page']);
                $_SESSION['current_page'] = '';
            }
        }else{
            $_SESSION['login_user'] = '';
            $_SESSION['inv_e_pwd'] = "Invalid email or password";
            header("Location: login.php");
        }
    }else{
        $_SESSION['No_exist'] = 'User do not exit!';
        header("Location: login.php");
    }
}
?>