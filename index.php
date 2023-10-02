
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title> المفتاح الذهبي لتأجير السيارات</title>
    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
    <link  rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
</head>
<body>



<?php
require_once('connection.php');
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        
        
        if(empty($email)|| empty($pass))
        {
            echo '<script>alert("يرجى ملء الفراغات")</script>';
        }

        else{
            $query="select *from users where EMAIL='$email'";
            $res=mysqli_query($con,$query);
            if($row=mysqli_fetch_assoc($res)){
                $db_password = $row['PASSWORD'];
                if(md5($pass)  == $db_password)
                {
                    header("location: cardetails.php");
                    session_start();
                    $_SESSION['email'] = $email;
                    
                }
                else{
                    echo '<script>alert("أدخل كلمة المرور الصحيحة")</script>';
                }



                



            }
            else{
                echo '<script>alert("أدخل البريد الإلكتروني الصحيح")</script>';
            }
        }
    }







?>
    <div class="hai">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"> المفتاح الذهبي لتأجير السيارات</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">الرئيسية</a></li>
                    <li><a href="aboutus2.html">عن الشركة</a></li>
                    <li><a href="feedback/Feedbacks.php">التقييمات</a></li>
                    
                    <li><a href="contactus2.html">تواصل معنا</a></li>
                  <li> <button class="adminbtn"><a href="adminlogin.php">تسجيل الدخول كمسؤول</a></button></li>
                </ul>
            </div>
            
          
        </div>
        <div class="content">
            <h1>استأجر سيارة <br><span>احلامك</span></h1>
            <p class="par">عيش حياة الرفاهية.<br>
                ما عليك سوى استئجار سيارة حسب رغبتك من مجموعتنا الواسعة.<br>استمتع بكل لحظة مع عائلتك<br>
                 انضم إلينا لتكوين هذه العائلة.  </p>
            <button class="cn"><a href="register.php">انضم الينا</a></button>
            <div class="form">
                <h2>تسجيل الدخول هنا</h2>
                <form method="POST"> 
                <input type="email" name="email" placeholder="ادخل البريد الالكتروني هنا">
                <input type="password" name="pass" placeholder="ادخل كلمة السر هنا">
                <input class="btnn" type="submit" value="تسجيل الدخول" name="login"></input>
                </form>
                <p class="link">هل تملك حساب ؟<br>
                <a href="register.php">سحل الان</a> هنا</a></p>
                <!-- <p class="liw">or<br>Log in with</p>
                <div class="icon">
                    &emsp;&emsp;&emsp;&ensp;<a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon> </a>&nbsp;&nbsp;
                    <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon> </a>&ensp;
                    <a href="https://myaccount.google.com/"><ion-icon name="logo-google"></ion-icon> </a>&ensp;
                    
                </div> -->
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
