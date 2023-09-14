<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

 // Replace contact@example.com with your real receiving email address
//   $receiving_email_address = 'samuelkene@gmail.com';

//   if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//     include( $php_email_form );
//   } else {
//     die( 'Unable to load the "PHP Email Form" Library!');
//   }

  
//   $contact = new PHP_Email_Form;
//   $contact->ajax = true;
  
//   $contact->to = $receiving_email_address;
//   $contact->from_name = $_POST['name'];
//   $contact->from_email = $_POST['email'];
//   $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
//   $contact->smtp = array(
//     'host' => 'localhost',
//     'username' => 'root',
//     'password' => '',
//     'port' => '587'
//   );
  

  
//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   $contact->add_message( $_POST['message'], 'Message', 10);

//   echo $contact->send();
  
?>

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $name = $_POST["name"];
//    $email = $_POST["email"];
//   $subject = $_POST["subject"];
//    $message = $_POST["message"];
    
    // Create a connection to the MySQL database
    // $servername = "localhost";
    //  $name = "name";
    // $password = "";
    //  $dbname = "foliodatabase";
    
    //  $conn = new mysqli($servername, $name, $password, $dbname);
    
    //  if ($conn->connect_error) {
    //      die("Connection failed: " . $conn->connect_error);
    //  }
    
    // Insert form data into the MySQL database
//     $sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    
//    if ($conn->query($sql) === TRUE) {
//         echo "<p>Message sent successfully and saved to the database. Thank you!</p>";
//   } else {
//        echo "<p>Oops! Something went wrong. Please try again later.</p>";
//  }
    
//  $conn->close();
// } else {
//      echo "<p>No form data submitted.</p>";
// }
// ?>


<?php
require 'database.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $subject = $_POST["subject"] ?? "";
    $message = $_POST["message"] ?? "";

    // Check if email already exists
    $checkEmail = "SELECT COUNT(*) AS num FROM foliotable WHERE email = '$email'";
    $result = mysqli_query($connect, $checkEmail);
    $row = mysqli_fetch_assoc($result);

    if($row['num'] > 0){
        echo "Email already exists. Please use a different email address.";
    } else {
        // Insert the data into the database
        $sql = "INSERT INTO foliotable(name, email, subject, message) 
        VALUES('$name','$email', '$subject', '$message')";

        if(mysqli_query($connect,$sql)){
            echo "Message sent successfully. Thank you!";
        } else {
            echo "Error: " . mysqli_error($connect);
        }
    }
}

?>












