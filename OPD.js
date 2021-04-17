var firebaseConfig = {
    apiKey: "AIzaSyAb5rcc8qgEJSzgg5ClOPN-3BVHyZL05rI",
    authDomain: "healthisimportant4us.firebaseapp.com",
    databaseURL: "https://healthisimportant4us-default-rtdb.firebaseio.com",
    projectId: "healthisimportant4us",
    storageBucket: "healthisimportant4us.appspot.com",
    messagingSenderId: "604815506249",
    appId: "1:604815506249:web:e622cd60209544b9023898",
    measurementId: "G-RZ7KL407T5"
};

firebase.initializeApp(firebaseConfig);
const auth = firebase.auth();
var uhid, ano, age, date, time, opd;
var database = firebase.database();

function GET() {
    uhid = document.getElementById('UHID').value;
    ano = document.getElementById('Aadhar').value;
    age = document.getElementById('Age').value;
    //date = document.getElementById('Date').value;
    //time = document.getElementById('Time').value;
    //opd = document.getElementById('OPD').value;
}

function Insert() {
    GET();
    firebase.database().ref('patient/' + ano).set({
        UHID: uhid,
        AadharNumber: ano,
        Age: age,
        /*Date: date,
        Time: time,
        OPD: opd*/
    });

}