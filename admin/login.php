<?php
session_start();
ob_start();
include_once ('../model/connectdb.php');
include_once "../model/user.php";
$thongbao ="";
if (isset($_POST['submit'])) {

$user = $_POST['user'];
$pass = $_POST['password'];
$userone = check_user($user,$pass);

// echo var_dump($userone);
if (is_array($userone)) {
    // echo "ok";
    extract($userone);
    // echo var_dump($role);
    if ($role == 1) {
        $_SESSION['admin']=1;   
        $_SESSION['name']=$name;
        $_SESSION['user']=$user;
        $_SESSION['email']=$email;
        header("location: index.php");
    }
} else {
    $thongbao = "Tên đăng nhập hoặc mật khẩu không đúng.";
    
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>input_tuybien</title>
    <link rel="stylesheet" href="./style.css" />
</head>
<style>
*,
*:before,
*:after {
    box-sizing: border-box;
}

* {
    margin: 0;
    padding: 0;
    font: inherit;
}

img,
picture,
svg,
video {
    display: block;
    max-width: 100%;
}

input,
select,
textarea {
    background-color: transparent;
    outline: none;
}

button {
    cursor: pointer;
    background-color: transparent;
    outline: none;
    border: 0;
}

body {
    min-height: 100vh;
    font-weight: 400;
    font-size: 16px;
    line-height: 1;
    position: relative;
}

h3 {
    text-align: center;
    font-weight: 500;
    font-size: 2rem;
    padding: 2rem 0;
}

.box_center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    gap: 2rem;
    width: 32%;
    border: 1px solid #6a5af9;
    border-radius: 5px;
}

.form-input {
    padding: 0 20px;
    border: 1px solid #eee;
    border-radius: 4px;
    width: 100%;
    height: 50px;
    transition: 0.25 ease;
}

.form-input:focus {
    border-color: #6a5af9;
}

.form-field {
    position: relative;
}

.form-lable {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 20px;
    color: #999;
    user-select: none;
    pointer-events: none;
    transition: all 0.2s linear;
}

.form-input:not(:placeholder-shown)+.form-lable,
.form-input:focus+.form-lable {
    top: 0;
    left: 11px;
    padding: 5px;
    display: inline-block;
    background-color: rgb(255, 255, 255);
    color: #6a5af9;
}

/* :placeholder-shown */
.name {
    display: flex;
    justify-content: space-between;
}

form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    padding: 0.5rem;
}

.submit {
    padding: 0.5rem 0;
    border: none;
    background-color: #6a5af9;
    font-size: 1.2rem;
    font-weight: 500;
    border-radius: 2px;
    color: rgb(255, 255, 255);
}

.submit:hover {
    background-color: #5948fa;
}
</style>

<body>
    <div class="box_center">
        <h3>ĐĂNG NHẬP</h3>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

            <div class="user">
                <div class="form-field">
                    <input type="text" name="user" id="user" class="form-input" placeholder=" " />
                    <label for="user" class="form-lable">Tên đăng nhập</label>
                </div>
            </div>
            <div class="password">
                <div class="form-field">
                    <input type="password" name="password" id="password" class="form-input" placeholder=" " />
                    <label for="password" class="form-lable">Mật khẩu </label>
                </div>
            </div>

            <button class="submit" type="submit" name="submit" id="submit">
                Đăng nhập
            </button>

            <div class="error-message">

                <?=$thongbao?>

            </div>
        </form>
    </div>
</body>

</html>