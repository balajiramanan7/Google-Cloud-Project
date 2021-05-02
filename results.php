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
<style>
body{
    margin: 0;
    padding: 0;
    background: url(https://miro.medium.com/max/12032/1*r_2egbo35m_VtuwLSFDY3A.jpeg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  justify-items: center;
  align-items: center;
  grid-gap: 15px;
}
button
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 5px;
}
button:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;

}
table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align:center;
}

tr {
    background-color: #ffffff;
}
tr:hover {
    background-color: #ffc107;
}
th {
padding-top: 12px;
padding-bottom: 12px;
text-align: center;
background-color: #fb2525;
color: white;
          }
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 20px;
}

</style>
</head>
<body>
    <br>
<div class="container">
              <h2 style="text-align:center ; color:white">Results</h2>
              <table id="tbl" border="2" cellpadding="10" style="border-collapse:collapse;">
                <thead>
                    <th>REGNO</th>
                    <th>MARKS</th>
                    <th>PERCENTAGE</th>
                </thead>
            </table>
            <br>
        <h3 style="text-align:center ; color:white" id="avg"></h3>
        <h3 style="text-align:center ; color:white" id="num"></h3>
    </div>
    <div class="grid">
        <button onclick="exportData()" >Download list</button>
        <button onclick="myFunction()">View Quiz Results</button>
        <button onclick="avg()">Class Average</button>
    </div>
<script>
    
    function myFunction()
    {
    var db = firebase.firestore();
    db.collection('Results').get().then((snapshot) => {
    snapshot.docs.forEach(doc => {
        renderAccount(doc);
    })
})

const accountList = document.querySelector('#tbl') ;
function renderAccount(doc){
    let tr = document.createElement('tr');
    let td_Reg_Num = document.createElement('td');
    let td_Marks = document.createElement('td');
    let td_Percentage = document.createElement('td');

    tr.setAttribute('data-id', doc.id);
    td_Reg_Num.textContent = doc.data().Reg_Num;
    td_Marks.textContent = doc.data().Marks;
    td_Percentage.textContent = doc.data().Percentage;

    tr.appendChild(td_Reg_Num);
    tr.appendChild(td_Marks);
    tr.appendChild(td_Percentage);

    accountList.appendChild(tr);

}
    }

    function exportData(){
    /* Get the HTML data using Element by Id */
    var table = document.getElementById("tbl");
 
    /* Declaring array variable */
    var rows =[];
 
      //iterate through rows of table
    for(var i=0,row; row = table.rows[i];i++){
        //rows would be accessed using the "row" variable assigned in the for loop
        //Get each cell value/column from the row
        column1 = row.cells[0].innerText;
        column2 = row.cells[1].innerText;
        column3 = row.cells[2].innerText;
 
    /* add a new records in the array */
        rows.push(
            [
                column1,
                column2,
                column3,
            ]
        );
 
        }
        csvContent = "data:text/csv;charset=utf-8,";
         /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
        rows.forEach(function(rowArray){
            row = rowArray.join(",");
            csvContent += row + "\r\n";
        });
 
        /* create a hidden <a> DOM node and set its download attribute */
        var encodedUri = encodeURI(csvContent);
        var link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", "Marks.csv");
        document.body.appendChild(link);
         /* download the data file named "Marks.csv" */
        link.click();
}

function avg()
{
    var table = document.getElementById("tbl");
    var rows =[];
    var totalSum = 0;
    for(let i=1;i<table.rows.length-1;i++){
        totalSum = totalSum + parseInt(table.rows[i].children[1].innerText)
    }
    document.getElementById("avg").innerHTML = "Average = " + ((totalSum)/(table.rows.length-2));
    document.getElementById("num").innerHTML = "Number of attendees = " + (table.rows.length-2);
console.log(totalSum);
}
</script>
</body>
</html>