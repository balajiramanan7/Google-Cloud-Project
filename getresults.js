const list_div=document.querySelector("#list_div");
var db=firebase.firestore();
db.collection("Results").get().then((querySnapshot) => {
    querySnapshot.forEach((doc) => {
        list_div.innerHTML+="<div class='list-item'><h3>" + doc.data().Reg_Num +"</h3></div>"
        console.log(`${doc.id} => ${doc.data()}`);
    });
});