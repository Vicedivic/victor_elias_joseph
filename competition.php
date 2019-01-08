<!DOCTYPE html>
<html>
<head>
<title>Thank You!</title>
</head>

<body>
<h1> Thank You for Participating in our Competition!</h1>
<h3> Wait and find out if you won! You can either win a bag of money or a piece of cake!</h3>
<p>
<img src="money.jpg" height="250px" width="200px"/>
<img src="mobleycake.jpg" height="220px" width="220px"/>

</button>
<p>
<style>
 button {
        background-color: #4CAF50; /* Green */
        border: 1px;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        font-family: "Century Gothic";
        border-radius: 10px;
        height:45px;
        width:445px;
}
	a {
	color: white; 	
}

	img {
	border-radius: 15px;
}
	html {
	font-family: century gothic;
}
</style>

<form method="get" action="index.html">
  <div class="btn-group">
    <style>
      .btn-group button {
        background-color: #4CAF50; /* Green background */
        border: 0px solid green; /* Green border */
        color: white; /* White text */
        padding: 10px 24px; /* Some padding */
        cursor: pointer; /* Pointer/hand icon */
        float: left; /* Float the buttons side by side */
      }

      /* Clear floats (clearfix hack) */
      .btn-group:after {
        content: "";
        clear: both;
        display: table;
      }

      .btn-group button:not(:last-child) {
        border-right: none; /* Prevent double borders */
      }

      /* Add a background color on hover */
      .btn-group button:hover {
        background-color: #3e8e41;
      }
      a {
        color: white;
      }
      html {
        font-family: "Century Gothic";
      }

    </style>
    <button>Home</button>
  </div>
  <h3><?php
    $name = $_GET['firstname'];
    $email = $_GET['email_address'];
    $country = $_GET['country'];

    print 'You participated with this information: <br>';
    print "Name: " . $name . "<br> Email: " . $email . "<br> Favorite country: " . $country;

    ?></h3>
</form>
</body>
</html>