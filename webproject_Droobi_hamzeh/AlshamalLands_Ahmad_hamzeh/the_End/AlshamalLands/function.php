<?php
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'Project_Final');

// variable declaration
$password="";
$email    = "";
$errors   = array();

// call the register() function if register_btn is clicked
if (isset($_POST['submit'])) {
    register();
}
// log user out if logout button clicked
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}
// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
    login();
}
if (isset($_POST['addcomment'])) {
   contact();
}

if (isset($_POST['bye_btn'])) {
    bye();
}
if (isset($_POST['sale_btn'])) {
    sale();
}

// LOGIN USER
function login(){
    global $db, $email,  $password;

    // grap form values
    $email = e($_POST['email']);
    $password = e($_POST['password']);

    // make sure form is filled properly
    if (empty($email)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    // attempt login if no errors on form
    if (count($errors) == 0) {
        $password = md5($password);

        $query = "SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 1";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) { // user found
            // check if user is admin or user
            $logged_in_user = mysqli_fetch_assoc($results);


                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success']  = "You are now logged in";
                header('location: Home.php');
            }
        }else {
            array_push($errors, "Wrong username/password combination");
        }

}
function isAdmin()
{
    if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
        return true;
    }else{
        return false;
    }
}

// REGISTER USER
function register(){
    // call these variables with the global keyword to make them available in function
    global $db, $errors, $email,$password;

    $email       =  e($_POST['email']);
    $password =  e($_POST['password']);
    $con_password  =  e($_POST['con_password']);

    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if ($password != $con_password) {
        array_push($errors, "The two passwords do not match");
    }

    // register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password);//encrypt the password before saving in the database



//            $datem =date_default_timezone_get();
            $query = "INSERT INTO user ( email,  password,created_user) 
					  VALUES( '$email',  '$password',now())";
            mysqli_query($db, $query);
            $_SESSION['success']  = "New user successfully created!!";
            header('location: Home.php');

    }
    else {
        header('location: Signup.php');

    }
}



function contact(){
    // call these variables with the global keyword to make them available in function
    global $db, $name,$phone,$city,$subject;

    $name    =  e($_POST['name']);
    $phone       =  e($_POST['phone']);
    $city =  e($_POST['city']);
    $subject  =  e($_POST['subject']);


    $query = "INSERT INTO contact_us  ( username,phone,city,subject,datesent)
					  VALUES( '$name', '$phone','$city','$subject',now())";

    mysqli_query( $db,$query);
    $_SESSION['success']  = "contacted successfully !!";
    header('location: Contact.php');



}






//function menu()
//{
//    // call these variables with the global keyword to make them available in function
//    global $db, $product_name, $desc, $type, $price;
//
//    $query = "SELECT * from products ;";
//
//    $result = $db->query($query);
//    $row= $result->fetch_assoc();
//    echo $row["product_name"].$row["des"];
//
//
//}

function e($val){
    global $db;
    return mysqli_real_escape_string($db, trim($val));
}


function display_error() {
    global $errors;

    if (count($errors) > 0){
        echo "hi thirs an error";
    }
////        echo '<div class="error">';
//        foreach ($errors as $error){
//            echo $error .'<br>';
//        }
////        echo '</div>';
//    }
}
function isLoggedIn()
{
    if (isset($_SESSION['user'])) {
        return true;
    }else{
        return false;
    }
}







function bye(){
    // call these variables with the global keyword to make them available in function
    global $db, $product_name,$phone;

    $product_name    =  e($_POST['product_name']);
    $phone       =  e($_POST['phone']);

    // form validation: ensure that the form is correctly filled
//    if (empty($username)) {
//        array_push($errors, "Username is required");
//    }
    $query = "INSERT INTO request_to_buy  ( product_name,phone)
					  VALUES('$product_name','$phone')";



    mysqli_query( $db,$query);
    $_SESSION['success']  = "contacted successfully !!";
    header('location: order_OR_Sale.php');



}

function sale(){
    // call these variables with the global keyword to make them available in function
    global $db, $prod_name,$phone;

    $prod_name    =  e($_POST['prod_name']);
    $phone       =  e($_POST['phone']);
    $price       =  e($_POST['price']);
    $description       =  e($_POST['description']);

    $query = "INSERT INTO request_to_sale  ( product_name,phone, price, description)
					  VALUES('$prod_name','$phone','$price', '$description')";
    mysqli_query( $db,$query);
    $_SESSION['success']  = "contacted successfully !!";
    header('location: order_OR_Sale.php');



}




?>









