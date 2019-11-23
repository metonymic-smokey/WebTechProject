<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    
    <link  rel="stylesheet" href="sank.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <script src="https://www.gstatic.com/firebasejs/6.2.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.2.3/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.2.3/firebase-auth.js"></script>
    
</head>
<body> 
<div id="head"><h1>DASHBOARD</h1>
    <a class="prof" href='profile.php?username=<?php echo $_GET["username"]?>'>PROFILE</a>
</div>
<p id="text_area"><br>No plans yet!<br> <br></p>
<script>
var u=<?php echo $_GET["username"]?>;
username=.$_SESSION['username'];
</script>    

<button class="wish" onclick="window.location.href='wishlist.php?username=<?php echo $_GET['username']?>'">WISHLIST</button>

<button class="button" onclick="window.location.href='explore/search.html'"><span>EXPLORE NEAR YOU!</span></button>
<button id="new_trip" type="button" onclick="window.location.href='itinerary.php?username=<?php echo $_GET['username']?>'"> + </button>
<script src ="sank.js"></script>


<script>

var firebaseConfig = {
apiKey: "AIzaSyBvKqHhpd1lwthcDeJ6KVtQXM6GhvTlBQ0",
authDomain: "saki-bb7e8.firebaseapp.com",
databaseURL: "https://saki-bb7e8.firebaseio.com",
projectId: "saki-bb7e8",
storageBucket: "saki-bb7e8.appspot.com",
messagingSenderId: "473923008294",
appId: "1:473923008294:web:8cbbb24061454f2e9bf3e7",
measurementId: "G-FNW4BD06PM"
};


firebase.initializeApp(firebaseConfig);

const preObject1=document.getElementById('text_area');
var dbRefObject1=firebase.database().ref().child('<?php echo $_GET["username"]?>/itinerary/custom/title');
dbRefObject1.on('value',snap=>{
  preObject1.innerText=JSON.stringify(snap.val(),null , 3);
});
</script>



</body>

</html>