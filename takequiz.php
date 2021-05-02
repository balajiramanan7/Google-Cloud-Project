<!DOCTYPE html>
<html lang="en">
<head>
<style type = "text/css">
    /*body{
        background-image:url(https://miro.medium.com/max/12032/1*r_2egbo35m_VtuwLSFDY3A.jpeg);
        background-size: cover;
        background-attachment: fixed;
    }*/
    body{
    margin: 0;
    padding: 0;
    background: url(https://miro.medium.com/max/12032/1*r_2egbo35m_VtuwLSFDY3A.jpeg);
    background-size: cover;
    font-family: sans-serif;
}
.startBtn, .adminBtn, .homeBtn
{
    font-size: xx-large ;
    border-radius: 80px ;
    padding: 50px ;
    border: none ;
    margin: 20px ;
    transition: 500ms;
    color: #fff;
    background: #fb2525;
}
#mainDiv
{
    width: 100vw;
    height: 105vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
#mainBody
{
    display: flex;
    flex-direction: column;
    align-items: center;   
}
#quiz, #panelInner
{
    width: 800px;
    height: 400px;
    background-color: #fff;
    display: grid;
    grid-template-rows: 60px auto;
    border-radius: 30px;
}
#panelInner
{
    height: 650px;
    width: 1200px;
    grid-template-rows: 60px auto 62px;
}
#loader
{
    width: 100px;
    height: 100px;
}
#loaderDiv
{
    display: flex;
    width: 100vw;
    height: 100vh;
    align-items: center;
    justify-content: center;
    position: absolute;
    z-index: 13;
    background-color: rgba(10, 17, 34, 0.979);
}
#quizHeader, #header, #addBtnDiv
{
    height: 60px;
    color: white;
    background-color: #fb2525;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    box-shadow: 0 2px 5px 1px rgba(0,0,0,0.3);
    z-index: 1;
}
#quizHeader
{
    width: 800px;
}
#header
{
    justify-content: center;
}
#quizBody
{
    background-color: white;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    padding: 10px 20px;
}
#timer
{
    color: white;
    padding: 18px;
    background-color: #fb2525;
    margin-right: -20px;
    border-top-right-radius: 27px;
    box-shadow: 0 2px 5px 1px rgba(0, 0, 0, 0.3);
}
.option_group{
    margin-left: 0;
    padding-left: 0;
}
li
{
    list-style-type: none;
}
.option, .optionPanel
{
    border: 3px solid transparent;
    border-radius: 50px;
    background-color: rgb(214, 213, 213);
    display: flex;
    justify-content: center;
    align-items: center;
    width: 250px;
    height: 40px;
    margin: 10px 10px 10px 0;
    min-height: 42px;
    transition: 500ms;
}
.option:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.nxtBtn, .rstBtn
{
    background-color:#fb2525; 
    border-radius: 50px ;
    padding: 15px ;
    border: none ;
    float: right;
}
.active
{
    border-radius: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 250px;
    height: 40px;
    margin: 10px 10px 10px 0;
    color: white;
    background-color:#fb2525;
    transition: 500ms;
}
.button{
    font-size: 25px;
    font-weight: 500;
    color: #fff;
    padding: 10px 30px;
    outline: none;
    border: none;
    border-radius: 5px;
    background: #fb2525;
    cursor: pointer;
}
.button:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;

}
.exitBtn
{
    border-radius: 50px;
    width: 200px;
    height: 100px;
    margin-bottom: 20px;
    font-size: xx-large ;
}
.nxtBtn:focus, .exitBtn:focus, .rstBtn:focus, .startBtn:focus, .adminBtn:focus, .homeBtn:focus
{
    outline: none ;
    box-shadow: none ;
}
.nxtBtn:hover, .exitBtn:hover, .rstBtn:hover, .startBtn:hover, .adminBtn:hover, .homeBtn:hover
{
    background-color: white ;
    color: black ;
    transition: 500ms;
}
/* =================Admin Panel================ */
#mainPanel
{
    min-width: 300px;
    min-height: 650px;
    justify-content: center;
    align-items: center;

}
#questionsBody
{
    background-color: white;
    padding: 10px 20px;
    overflow-y: auto;/*when we'll add questions then scroll bar will be needed*/
}
#delAllBtn, #addBtn, #homeBtn /*placement of + & bin buttons*/
{
    border-radius: 50%;
    font-size: 20px;
    padding: 8px 18px;
    margin: 10px 30px;
    background-color: #fb2525

}
#delAllBtn:hover, #addBtn:hover, #homeBtn:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;

}
#addBtnDiv
{
    height: 70px;
    justify-content: center;
    box-shadow: 0 -2px 5px 1px rgba(0, 0, 0, 0.3);
    border-bottom-right-radius: 30px;
    border-bottom-left-radius: 30px;
    border-top-right-radius: 0;
    border-top-left-radius: 0;
    background-color: #fb2525
}

.panelLi
{
    display: flex;
    flex-wrap: wrap;
    align-items: left;
    background-color: rgb(228, 228, 228);
    min-height: 20px;
    width: 680 px;
    border-radius: 5px;  
    padding: 10px 12px;
    margin: 20px 20px;
}
.liBtnAdd, .liBtnCancel,.homeBtn, .liBtn
{
    font-size: 20px;
    border-radius: 50% ;
    padding: 5px 13px ;
    margin: 0 20px;
    max-height: 50px;
}
.liBtnAdd
{
    padding: 6px 13px 13px 13px ;
    background-color: #fb2525
}
.liBtnCancel
{
    padding: 6px 13px 13px 13px ;
    background-color: #fb2525
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Computing Project</title>
    
	<link rel="stylesheet" href="admin_style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Animate CSS-->
	<link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <!-- link for spinner -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-firestore.js"></script>
 <script defer src="admin_script.js"></script>
</head>

<body>
    <div id="mainDiv">
        <div id="loaderDiv">
            <div id="loader" class="spinner-border"></div>
        </div>
        <!-- ==================Admin Panel================ -->
        <div id="mainPanel" style="display: none;">
            <div id="panelInner">
                <div id="header">
                    <h3>Questions</h3>
                </div>
                <div id="questionsBody">
                    <ul id="questionsUl">

                    </ul>
                    <button class="btn btn-danger homeBtn" onclick="homePage()">Done</button>
                </div>
                <div id="addBtnDiv">
                    <button id="addBtn" class="btn btn-success fa fa-plus " onclick="addQuestion()"></button>
                    <button id="delAllBtn" class="btn btn-danger fa fa-trash" onclick="dellAll()"></button>
                </div>
            </div>
        </div>

        <!-- ==================Home Page================ -->
        <div class="buttons">
        <button class="button"  id="startBtn" onclick="startQuiz()">Start Quiz</button>
        <button class="button"  disabled id = "adminBtn"  onclick="adminPanel()">Create Quiz</button>
        </div>
        <!-- ==================Quiz Body================ -->
        <div id="mainBody" style="display: none;">
        <button class="button" id="exitBtn" onclick="appendResult()">Finish Quiz</button><br>
        <div id="quiz">
            <div id="quizHeader"></div>
            <div id="quizBody"></div>
        </div>
    </div>

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


</body>
</html>