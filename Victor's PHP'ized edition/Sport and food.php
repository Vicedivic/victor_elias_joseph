<!DOCTYPE html>
<html>
<head>
  <title>Sport and Food</title>
  <link rel="stylesheet" href="/style.css">

  <h1>My favorite sport</h1>
  <h3>Soccer is my favorite sport</h3>

</head>
<body>

<form method="get" action="pets.php">
  <div class="btn-group">
    <style>
      .btn-group button {
        background-color: #4CAF50; /* Green background */
        border: 1px solid green; /* Green border */
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
        width:170px;
      }
      html{
        font-family: century gothic;
      }
      a{
        color: white;
      }
      img {
        border-radius: 12px;
      }
    </style>
    <button>Pets</button>
  </div>

</form>
<p>
<form method="get" action="index.php">
  <div class="btn-group">
    <button>Home</button>
  </div>
</form>
<p>
<li>I like kicking balls</li>
<li>Balls are round</li>
<li>I like being a goalkeeper</li>
</ul>
<a href="https://www.unisport.dk/maalmandshandsker/604-adidas-malmandshandsker/" target="_blank">
  <img src="goalkeeper.jpg" width="300" height="180" alt="Goalkeeper"/> </a>
<a href="https://www.unisport.dk/fodboldudstyr/593-adidas-fodbolde/" target="_blank">
  <img src="ball.jpg" width="300" height="300"alt="Ball"/>  </a>
<br>
<h1>Food</h1>
<h3>Fast Food restaurants</h3>
<p>I really like KFC</p>
<a href="https://www.kfc.com/" target="_blank">
  <img src="KFC.jpeg" alt="KFC"/> </a>
<p>I really like McDonalds too</p>
<img src="McDonalds.png" width="300" height="300" alt="McDonalds"/>

<h4>Of course Mc Donalds wins</h4>
<img src="mc%20vs%20burgerking.jpg" width="300" height="200" alt="McDonalds vs Burgerking"/>

<h4>Of course KFC wins</h4>
<img src="All%20three.jpg" width="300" height="200" alt="All three"/>
<p></p>
<p>Please give a feedback of what you think about my site!</p>

<button type="button"
        onclick="document.getElementById('demo').innerHTML = Date()">
  <a href="mailto:eliasbruhn123@gmail.com">Feedback!</a>
</button>
<button type="button"
        onclick="document.getElementById('demo').innerHTML = Date()">
  <a href="Sport%20and%20food.php">To the top!</a>
</button>
<p></p>
<p></p>
</body>
</html>