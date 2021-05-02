<!DOCTYPE html>
<html>
<head>
  <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-firestore.js"></script>
    <script>
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        var firebaseConfig = {
              apiKey: "AIzaSyDADYsHE6yp7pUHTagR-p688NacHOn2zkI",
              authDomain: "vernal-hall-304811.firebaseapp.com",
              databaseURL: "https://vernal-hall-304811-default-rtdb.firebaseio.com",
              projectId: "vernal-hall-304811",
              storageBucket: "vernal-hall-304811.appspot.com",
              messagingSenderId: "611012346000",
              appId: "1:611012346000:web:9e3f12add7655731f2d815",
              measurementId: "G-ZK4Y82WFKT"
            };
            // Initialize Firebase
            firebase.initializeApp(firebaseConfig);
        </script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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

  body{
    margin: 0;
    padding: 0;
    background: url(https://miro.medium.com/max/12032/1*r_2egbo35m_VtuwLSFDY3A.jpeg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #ffc107;
  color: white;
  transform: rotateY(180deg);
}

.grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  justify-items: center;
  align-items: center;
  grid-gap: 15px;
}

.button {
  border-radius: 4px;
  background-color: #fb2525;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

</style>
</head>
<body>
  <div class="topnav">
    <a class="active" href="Faculty_Login_Firebase.html"><b>Logout</b></a>
    <a href="#contact"><b>Helpdesk</b>&nbsp; 044-12345678</a>
  </div>
  <h1 style="text-align:center ;color:white">Canopy Quiz Platform</h1>
  <h2 style="text-align:center ;color:white">Welcome</h2>
  <br><br><br><br>
  <div class="grid">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="courses.jpg" alt="pic1" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <br><br><br><br><br>
      <h1>VIEW CLASSES</h1> 
      <button class="button"><span>GO</span></button>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="https://thumbs.dreamstime.com/z/concept-online-exam-testing-questionnaire-form-education-survey-internet-quiz-isometric-vector-illustration-163649081.jpg" alt="pic2" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <br><br><br><br><br>
      <h1>MAKE QUIZZES</h1> 
      <button class="button" onclick=open_Admin()><span>GO</span></button>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="https://st3.depositphotos.com/23650762/31773/v/450/depositphotos_317733354-stock-illustration-concept-of-online-exam-online.jpg" alt="pic3" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <br><br><br><br><br>
      <h1>VIEW RESULTS</h1> 
      <button class="button" onclick=view_results()><span>GO</span></button>
    </div>
  </div>
</div>


</div>
<script>
  function open_Admin(){
    window.location.href = "admin.php";
  }

  function view_results()
  {
    window.location.href = "results.php";
    }

</script>
</body>
</html>
