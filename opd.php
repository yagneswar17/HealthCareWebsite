<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPD form</title>
    <link rel="stylesheet" href="opd.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-database.js"></script>
    <div class="container">
        <div class="formBx">
            <form action="add_patient.php" method="post">
                <h2>OPD Form</h2>
                <div class="inputBox">
                    <input type="text" name="uhid" required="required" id="UHID"></input>
                    <span>UHID</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="adhno" required="required" id="Aadhar"></input>
                    <span>Aadhar Number</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="age" required="required" id="Age"></input>
                    <span>Age</span>
                </div>
                <div class="inputBox">
                    <h4>Enter date</h4>
                    <input type="date"  name="Date" value="" placeholder="dd-mm-yyyy"></input>
                </div>
                <div class="inputBox">
                    <h4>Select time</h4>
                    <select class="select" name="time" id="Time">
                        <option value="9.00">9:00 AM</option>
                        <option value="10.00">10:00 AM</option>
                        <option value="11.00">11:00 AM</option>
                        <option value="12.00">12:00 AM</option>
                    </select>
                </div>
                <div class="inputBox">
                    <select class="select" name="opd_type" id="OPD">
                        <option value="">Select OPD</option>
                        <option value="SUR">Surgery</option>
                        <option value="ORT">Orthopaedics</option>
                        <option value="MED">Medical</option>
                        <option value="DER">Dermatology</option>
                        <option value="DEN">Dental</option>
                        <option value="CAR">Cardialogy</option>
                        <option value="PSY">Psychiatry</option>
                        <option value="EYE">Eye</option>
                        <option value="PAE">Paediatric</option>
                        <option value="ENT">ENT</option>
                        <option value="OGY">Gynacelogy</option>
                   </select>
                </div>
                <div class="inputBox">
                    <h4>Select Gender</h4>
                    <select class="select" name="gen" id="Time">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="inputBox">
                    <button name="add" id="insert">SUBMIT</button>
                </div>
                
            </form>
        </div>

        <div class="imgBx">
            <img src="doc.svg" height="600px" width="600px">
        </div>
    </div>
</body>

</html>