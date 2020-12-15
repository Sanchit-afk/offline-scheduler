<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
</head>
<body>
    <form action="schedule.php">
        <label for="start">Date:</label>
        <input type="date" id="start" name="visit" min="2020-11-11" max="2022-12-31"><br><br>
        <label for="time">Time slot:</label>
        <select name="timeslot">
            <option>09:00 AM - 10:00 AM</option>
            <option>10:00 AM - 11:00 AM</option>
            <option>12:00 PM - 01:00 PM</option>
            <option>03:00 PM - 04:00 PM</option>
            <option>04:00 PM - 05:00 PM</option>
            <option>06:00 PM - 07:00 PM</option>
            <option>07:00 PM - 08:00 PM</option>
            <option>08:00 PM - 09:00 PM</option>
        </select>
        <button type="submit" id="" href="contact.php">Submit</button>
    </form>
    <?php
        // $stringtime="09:00 AM - 10:00 AM";
        // $first = substr($stringtime,0,5);
        // echo $first;?><br>
    <?php
        // $timestamp=strtotime($first);
        // $slot= date('h',$timestamp);
        // echo $slot+10;
    ?>
</body>
</html>