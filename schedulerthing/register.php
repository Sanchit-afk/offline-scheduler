<?php
    require 'db_conn.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="container">
        <h1>Customer Registration</h1>
        <form action="app/add.php" method="POST">
            <div class="contact-box">
                <div class="contact-left">
                    <h3>Enter Details</h3>
                    <div class="input-row">
                        <div class="input-group">
                            <label>First Name</label>
                            <input type="text" placeholder="Jane" name="fname" required>
                        </div>
                        <div class="input-group">
                            <label>Last Name</label>
                            <input type="text" placeholder="Doe" name="lname" required>
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Email</label>
                            <input type="email" placeholder="Jane@gmail.com" name="c_email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        </div>
                        <div class="input-group">
                            <label>Password</label>
                            <input type="password" required pattern=".{8,}" name="c_password" or more characters">
                        </div>
                    </div>
                    <div class="input-row">


                    </div>
                    <label>Address</label>
                    <textarea name="c_address" id="" rows="5" placeholder="Your Message" style="resize: none;"></textarea>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Contact Number</label>
                            <input type="text" placeholder="+91 7768******" name="c_contact" required pattern="[0-9]{10}">
                        </div>
                        
                    </div>
                    <button type="submit" id="" href="contact.php">Register</button>
    
            </div> 
        </form>

    </div>
</body>
</html>