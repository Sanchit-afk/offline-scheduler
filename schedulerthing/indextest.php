<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/registration.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <h2>
            Responsive Registration Form</h2>
        <div class="form-conteniar">
            <form action="submit.php" method="POST">
                <div class="input-name">
                    <i class="fa fa-user lock"></i>
                    <input type="text" placeholder="First Name" class="name">
                    <span class="last">
                        <i class="fa fa-user lock"></i>
                        <input type="text" placeholder="Last Name" class="name">
                    </span>
                </div>
                <div class="input-name">
                    <i class="fa fa-envelope email"></i>
                    <input type="email" placeholder="Email" required class="text-name" name="email">
                </div>
                <div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Password" class="text-name" name="password">
                </div>
                <div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Re-type Password" class="text-name" name="retype">
                </div>
                <div class="input-name">
                    <input type="radio" name="radiogroup1" id="ravi" class="radio-button" value="Male">
                    <label for="ravi" class="gender">Male</label>
                    <input type="radio" name="radiogroup1" id="ravi1" class="radio-button" value="Female">
                    <label for="ravi1" class="gender">Female</label>
                </div>
                <div class="input-name">
                    <select class="country">
                        <option>Select a country</option>
                        <option>India</option>
                        <option>United States</option>
                        <option>Pakistan</option>
                        <option>Australia</option>
                    </select>
                    <div class="arrow">
                    </div>
                </div>
                <div class="input-name">
                    <input type="checkbox" id="cb1" class="chack-button" name="agreement[]" value="18+">
                    <label for="cb1" class="chack">Above 18</label>
                </div>
                <div class="input-name">
                    <input type="checkbox" id="cb2" class="chack-button" name="agreement[]" value="agreedtnc">
                    <label for="cb2" class="chack">I agree with terms and conditions</label>
                </div>
                <div class="input-name">
                    <input class="button" name="submit" type="submit" value="Register" />
                </div>
            </form>
        </div>
    </div>
</body>

</html>