<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>

    <nav class="wrapper">
        <div class="wrapper">
              <div class="top_nav">
              <div class="left">
              <div class="logo"><p><span>Time</span> Booking</p></div>
              <div class="search_bar">
                  <input type="text" placeholder="Search">
              </div>
          </div> 
          <div class="right">
           <ul>
              <li><a href="app/logout.php">Logout</a></li>
              <li><a href="contactus.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="bottom_nav">
          <ul>
            <li><a href="home.php">home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="booking.php">Bookings </a></li>
            <li><a href="team.php">Our team</a></li>
            </ul>
      </div>
    </div>
    </nav>

	<div class="container">
        <h1>Connect With Us</h1>
        <p>We would love to connect with you and solve your queries. Feel free to drop a message and get in touch.</p>
        <div class="contact-box">
            <div class="contact-left">
                <h3>Send your request</h3>
                <div class="input-row">
                    <div class="input-group">
                        <label>Name</label>
                        <input type="text" placeholder="Jane Doe" required>
                    </div>
                    <div class="input-group">
                        <label>Phone</label>
                        <input type="text" placeholder="+91 7788******" required>
                    </div>
                </div>
                <div class="input-row">
                    <div class="input-group">
                        <label>Email</label>
                        <input type="email" placeholder="Jane@gmail.com" required>
                    </div>
                    <div class="input-group">
                        <label>Subject</label>
                        <input type="text" required>
                    </div>
                </div>
                <label>Message</label>
                <textarea name="" id="" rows="5" placeholder="Your Message" style="resize: none;"></textarea>
                <button type="submit" id="">Send</button>
            </div>
            <div class="contact-right">
                <h3>Reach Us</h3>
                <table>
                    <tr>
                        <td>Email</td>
                        <td>contact@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>+91 1800 279 375</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>Cecilia Chapman <br>
                            711-2880 Nulla St. <br>
                            Mankato Mississippi 96522 <br>
                            (257) 563-7401</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>



</body>
</html>