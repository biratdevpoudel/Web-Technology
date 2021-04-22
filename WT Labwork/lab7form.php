<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Form</title>
  <meta name="description" content="The form">
  <link rel="stylesheet" href="style.css">
<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family:sans-serif;
}
h2{
  margin-left:20px;
}
form{
  padding: 20px 35px;
  width: 50vw;
  
}
form label{
  font-size:1.1em;
}
#button{
  border: none;
  background: grey;
  color: white;
  padding: 10px 20px;
  border-radius: 15px;
  margin-left: 30px;
  margin-bottom: 50px;
}
</style>
</head>
<body>
  <h2>Personal Information</h2>
  <form action="display.php"  method="POST">
    <label>First Name</label>
    <input type="text" name="fName" ></br></br>
    <label>Last Name</label>
    <input type="text" name="lName" ></br></br>
    <label>Date of Birth</label>
    <input type="date" name="birthday"></br></br>
    <label>Choose your gender</label>
    <select name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="Others">Others</option>
    </select>
    </br></br>
  

  <h2>Account Information</h2>
  
    <label>Email</label>
    <input type="email" name="email">
    <p style="color:grey;font-size:12px">(Your email address will be your username)</p></br>
    <label>Re-type Email</label>
    <input type="email" name="re_email" ></br></br>
    <label>Password</label>
    <input type="password" name="password"">
    <p style="color:grey;font-size:12px">(Min: 8 character, 1 number, case-sensitive)</p></br>
    <label>Re-Type Password</label>
    <input type="password" name="re_password""></br></br>
    <label>Security question</label>
    <select name=sec_question>
        <option value="">Choose a security question</option>
        <option value="What was your elementary school name?">What was your elementary school name?</option>
        <option value="What was your first pet's name?">What was your first pet's name?</option>
        <option value="Which city did your parents meet?">Which city did your parents meet?</option>
    </select></br></br>
    <label>Security answer</label>
    <input type="text" name="sec_answer">
    <p style="color:grey;font-size:12px">(not case sensitive)</p></br>
  

  <h2>Contact Information</h2>
  
    <label>Address</label>
    <input type="text" name="address"></br></br>
    <label>City</label>
    <input type="text" name="city" ></br></br>
    <label>State</label>
    <select name="state">
        <option value="">Choose a state</option>
        <option value="State no 1">State no 1</option>
        <option value="State no 2">State no 2</option>
        <option value="State no 3">State no 3</option>
        <option value="State no 4">State no 4</option>
        <option value="State no 5">State no 5</option>
        <option value="State no 6">State no 6</option>
        <option value="State no 7">State no 7</option>
    </select></br></br>
    <label>Zip Code</label>
    <input type="text" name="zip_code"></br></br>
    <label>Phone</label>
    <input type="tel" name="phone">
    <select name=mobileOrLandline>
        <option value="mobile">Mobile</option>
        <option value="Landline">Landline</option>
    </select>
    </br>
    <p style="color:grey;font-size:12px">no spaces or dashes</p></br>

    <input id="button" type="submit" value="Submit">
  </form>
  
</body>
</html>