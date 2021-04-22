<?php
if(isset($_POST['submit'])){
    $first_name = $_POST['fName'];
    $last_name = $_POST['lName'];
    $dob = $_POST['birthday'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $con_email = $_POST['re_email'];
    $password = $_POST['password'];
    $con_password = $_POST['re_password'];
    $security_question = $_POST['sec_question'];
    $security_answer = $_POST['sec_answer'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $phone = $_POST['phone'];
    $phone_type = $_POST['phone_type'];
?>

<html>
<body>
    <table border=1 width="50%">
        <tr>
            <td colspan="4"><center><h2>Personal Information</h2></center></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Date of Birth</td>
            <td>Gender</td>
        </tr>
        <tr>
            <td><?= $first_name; ?></td>
            <td><?= $last_name; ?></td>
            <td><?= $dob; ?></td>
            <td><?= $gender; ?></td>
        </tr>
    </table>
    <br>

    <table border=1 width="50%">
        <tr>
            <td colspan="6"><center><h2>Account Information</h2></center></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>Re-type Email</td>
            <td>Password</td>
            <td>Re-type Password</td>
            <td>Security Question</td>
            <td>Security Answer</td>
        </tr>
        <tr>
            <td><?= $email; ?></td>
            <td><?= $con_email; ?></td>
            <td><?= $password; ?></td>
            <td><?= $con_password; ?></td>
            <td><?= $security_question; ?></td>
            <td><?= $security_answer; ?></td>
        </tr>
    </table>
    <br>

    <table border=1 width="50%">
    <tr>
            <td colspan="6"><center><h2>Contact Information</h2></center></td>
        </tr>
        <tr>
            <td>Address</td>
            <td>City</td>
            <td>State</td>
            <td>Zip Code</td>
            <td>Phone Number</td>
            <td>Phone Type</td>
        </tr>
        <tr>
            <td><?= $address; ?></td>
            <td><?= $city; ?></td>
            <td><?= $state; ?></td>
            <td><?= $zip_code; ?></td>
            <td><?= $phone; ?></td>
            <td><?= $phone_type; ?></td>
        </tr>
    </table>
<?php } ?>
</body>
</html>