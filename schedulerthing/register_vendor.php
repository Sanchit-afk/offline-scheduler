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
    <script src="validate.js"></script>
</head>
<body>
    <div class="container">
        <h1>Shopkeeper Registration</h1>
        <form action="app/registration_vendor.php" method="POST" onsubmit="return validate();">
            <div class="contact-box">
                <div class="contact-left">
                    <h3>Enter Details</h3>
                    <div class="input-row">
                        <div class="input-group">
                            <label>First Name</label>
                            <input type="text" placeholder="Jane"  id="first" name="fname" required>
                        </div>
                        <div class="input-group">
                            <label>Last Name</label>
                            <input type="text" placeholder="Doe"  id="last" name="lname" required>
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Email</label>
                            <input type="text" placeholder="Jane@gmail.com" id="email" name="s_email" required>
                        </div>
                        <div class="input-group">
                            <label>Password</label>
                            <input type="password" id="password"  title="Eight or more characters" name="s_password" required>
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Shop Name</label>
                            <input type="text" placeholder="" id="first" name="s_name" required>
                        </div>
                        <div class="input-group">
                            <label>Catagory   
                                <select name="s_catergory" required>
                                    <option>Grocery</option>
                                    <option>Electronics & Hardware</option>
                                    <option>Garage</option>
                                    <option>Salon</option>
                                </select>
                        </div>
                    </div>     
                    <div class="input-row">
                        <div class="input-group">
                            <label>Open Time</label>
                            <input type="time" placeholder="" id="open" name="open" required>
                        </div>
                        <div class="input-group">
                            <label>close Time</label>
                            <input type="time" placeholder="" id="close" name="close" required>
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Capacity</label>
                            <input type="number" placeholder="+91 7768******" id="capacity" name="s_capacity" required >
                        </div>
                        
                    </div>
                    <label>Address</label>
                    <textarea name="s_address" rows="5" placeholder="Your Message" style="resize: none;" id="address" required></textarea>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Contact Number</label>
                            <input type="text" placeholder="+91 7768******" id="phone" name="s_contact" required>
                        </div>
                        
                    </div>
                    <button type="submit" id="">Register</button>
    
            </div> 
        </form>

    </div>
</body>
</html>