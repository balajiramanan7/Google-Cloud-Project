<html>
  <head>
    <title>Login Page</title>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-auth.js"></script>
  <style>
    
body{
    margin: 0;
    padding: 0;
    background: url(https://miro.medium.com/max/12032/1*r_2egbo35m_VtuwLSFDY3A.jpeg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.loginbox{
    width: 340px;
    height: 580px;
    background: #000;
    opacity: 0.9;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(70%,-50%);
    box-sizing: border-box;
    padding: 50px 30px;
    border-radius: 20px;
}


h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="email"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox button
{
    border: none;
    outline: none;
    height: 40px;
    width: 100%;
    background: #fb2525;
    color: #fff;
    font-size: 15px;
    border-radius: 20px;
}
.loginbox button:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;

}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover
{
    color: #ffc107;
}

.topnav {
    overflow: hidden;
    background-color:#fb2525;
    opacity: 0.9;
  }
  
  .topnav a {
    float: left;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    font-family: sans-serif;
  }
  
  .topnav a:hover {
    background-color: #ffc107;
    color: black;
  }

  </style></head>
  <body>

    <div class="topnav">
      <a class="active" href="Faculty_Login_Firebase.php"><b>Faculty Login</b></a>
      <a href="#contact"><b>Helpdesk</b>&nbsp; 044-12345678</a>
    </div>

    <div class="loginbox">
      <h2 style="text-align:center">Canopy Quiz</h2>
      <h1 style="text-align:center">Student Login</h1>
      <p>Username</p>
    <input type="email" placeholder="Student email" id="email" />
    <p>Password</p>
    <input type="password" placeholder="password" id="password" />
    <p>Confirm Password</p>
    <input type="password" placeholder="re type password" id="repassword" /><br><br>
    <button onclick="signIn()" id="signIn"> Sign In </button> <br><br>
    <button onclick="signUp()" id="signUp"> Sign Up </button>
  </div>

  <script>
    // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyDADYsHE6yp7pUHTagR-p688NacHOn2zkI",
    authDomain: "vernal-hall-304811.firebaseapp.com",
    projectId: "vernal-hall-304811",
    storageBucket: "vernal-hall-304811.appspot.com",
    messagingSenderId: "611012346000",
    appId: "1:611012346000:web:9e3f12add7655731f2d815",
    measurementId: "G-ZK4Y82WFKT"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  function signIn()
  {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    firebase.auth().signInWithEmailAndPassword(email,password).then(function(){
      alert('Verification Successful');
      window.location.href = "S_Homepage.php";
    }).catch(function(error){
      console.log("pochu pochu");
      alert('Verification failure ');
      var errorcode=error.code
      var errormsg=error.message;

    });
    
  }

  function signUp()
  {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    firebase.auth().createUserWithEmailAndPassword(email,password).then(function(){
      alert('Registered');
      window.location.href = "Student_Login_Firebase.php";
    }).catch(function(error){
      console.log("pochu pochu");
      alert('Verification failure ');
      var errorcode=error.code
      var errormsg=error.message;
      

    });
    
  }

    </script>

  </body>
</html>
