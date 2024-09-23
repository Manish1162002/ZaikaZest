<?php
include 'include/header.php';
$uid=$_SESSION['id'];
  if($_SERVER['REQUEST_METHOD']=='POST'){
       $country = $_POST['country'];
        $city = $_POST['city'];
        $palace = $_POST['palace'];
        $event = $_POST['event'];
        $nopalace = $_POST['nopalace'];
        $vegetarian = $_POST['vegetarian'];
        $contact = $_POST['contact'];
        $date = $_POST['date'];
        $email = $_POST['email'];
        $query = "Insert into book_us(select_country,select_city,select_palace,small_event,no_palace,vegetarian,contact_no,email,date)
        values('$country','$city','$palace','$event','$nopalace','$vegetarian','$contact','$email','$date')";
        if(mysqli_query($con,$query)){
            $to=$email;
            $subject="Booking Mail";
            $msg="Your Booking request sended and repalying soon..";
            $header='From: manishkanojiya623@gmail.com' . "\r\n" . 'Cc:manishkanojiya623@gmail.com' . "\r\n" . 'Content-type:text/html;charset=UTF-8' . "\r\n" . 'X-Mailer:php/'. phpversion();
            if(mail($to,$subject,$msg,$header)) {
                echo "<script>
                alert('Your booking  successfully');
                window.location.href='booking.php';
                </script>";
            }else{

            print_r('Mail error:' . error_get_last());
            }
        }
    }
?>