<?php include "dbconnect.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content ="width=device-width, initial-scale=1.0">
     <title> Add Schedule</title>
     <link rel="stylesheet" href="style.css">
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

</head>
     </head>
    </head>
  <body>

  <div class="wrapper">
    <div class="container">
<div class="AddSchedule">

    <form action="submit_form.php" method="post">
        
       <div class ="inputgroup4">
       <input autocomplete="off" required="" type="text" name="subject_description">
       <label for="Subject">Select Subject</label>
       </div>

        <select id="select-Semester" name="semester">
            <option value="">Select Semester</option>
            <option value="1st Sem">First Semester</option>
            <option value="2nd Sem">Second Semester</option>
          
        </select>

        <div id="select-Day" name="day">
            <label><input type="checkbox" name="day[]" value="M"> Monday</label>
            <label><input type="checkbox" name="day[]" value="T"> Tuesday</label>
            <label><input type="checkbox" name="day[]" value="W"> Wednesday</label>
            <label><input type="checkbox" name="day[]" value="TH"> Thursday</label>
            <label><input type="checkbox" name="day[]" value="F"> Friday</label>
            <label><input type="checkbox" name="day[]" value="Sat"> Saturday</label>
        </div>

        <select id="select-Room" name="room">
            <option value="">Select Room</option>
        </select>

        <select id="select-Campus" name="campus">
            <option value="">Select Campus</option>
            <option value="Main Campus">Main Campus</option>
            <option value="Engineering Campus">Engineering Campus</option>
        </select>

       <select id="select-StartTime" name="start_time">
        <option value="">Start Time</option>
        <option value="7:15AM">7:15AM</option>
        <option value="7:30AM">7:30AM</option>
        <option value="7:45AM">7:45AM</option>
        <option value="8:00AM">8:00AM </option>
        <option value="8:15AM">8:15AM </option>
        <option value="8:30AM">8:30AM </option>
        <option value="8:45AM">8:45AM </option>
        <option value="9:00AM">9:00AM </option>
        <option value="9:15AM">9:15AM </option>
        <option value="9:30AM">9:30AM </option>
        <option value="9:45AM">9:45AM </option>
        <option value="10:00AM">10:00AM </option>
        <option value="10:15AM">10:15AM</option>
        <option value="10:30AM">10:30AM</option>
        <option value="10:45AM">10:45AM</option>
        <option value="11:00AM">11:00AM</option>
        <option value="11:15AM">11:15AM</option>
        <option value="11:30AM">11:30AM</option>
        <option value="11:45AM">11:45AM</option>
        <option value="12:00PM">12:00PM</option>
        <option value="12:15PM">12:15PM</option>
        <option value="12:30PM">12:30PM</option>
        <option value="12:45PM">12:45PM</option>
        <option value="1:00PM">1:00PM</option>
        <option value="1:15PM">1:15PM</option>
        <option value="1:30PM">1:30PM</option>
        <option value="1:45PM">1:45PM</option>
        <option value="2:00PM">2:00PM</option>
        <option value="2:15PM">2:15PM</option>
        <option value="2:30PM">2:30PM</option>
        <option value="2:45PM">2:45PM</option>
        <option value="3:00PM">3:00PM</option>
        <option value="3:15PM">3:15PM</option>
        <option value="3:30PM">3:30PM</option>
        <option value="3:45PM">3:45PM</option>
        <option value="4:00PM">4:00PM</option>
        <option value="4:15PM">4:15PM</option>
        <option value="4:30PM">4:30PM</option>
        <option value="4:45PM">4:45PM</option>
        <option value="5:00PM">5:00PM</option>
        <option value="5:15PM">5:15PM</option>
        <option value="5:30PM">5:30PM</option>
        <option value="5:45PM">5:45PM</option>
        <option value="6:00PM">6:00PM</option>
        <option value="6:15PM">6:15PM</option>
        <option value="6:30PM">6:30PM</option>
        <option value="6:45PM">6:45PM</option>
        <option value="7:00PM">7:00PM</option>
        <option value="7:15PM">7:15PM</option>
        <option value="7:30PM">7:30PM</option>
        <option value="7:45PM">7:45PM</option>
        <option value="8:00PM">8:00PM</option>
       </select>

       <select id="select-EndTime" name="end_time">
        <option value="">End Time</option>
        <option value="7:15AM">7:15AM</option>
        <option value="7:30AM">7:30AM</option>
        <option value="7:45AM">7:45AM</option>
        <option value="8:00AM">8:00AM </option>
        <option value="8:15AM">8:15AM </option>
        <option value="8:30AM">8:30AM </option>
        <option value="8:45AM">8:45AM </option>
        <option value="9:00AM">9:00AM </option>
        <option value="9:15AM">9:15AM </option>
        <option value="9:30AM">9:30AM </option>
        <option value="9:45AM">9:45AM </option>
        <option value="10:00AM">10:00AM </option>
        <option value="10:15AM">10:15AM</option>
        <option value="10:30AM">10:30AM</option>
        <option value="10:45AM">10:45AM</option>
        <option value="11:00AM">11:00AM</option>
        <option value="11:15AM">11:15AM</option>
        <option value="11:30AM">11:30AM</option>
        <option value="11:45AM">11:45AM</option>
        <option value="12:00PM">12:00PM</option>
        <option value="12:15PM">12:15PM</option>
        <option value="12:30PM">12:30PM</option>
        <option value="12:45PM">12:45PM</option>
        <option value="1:00PM">1:00PM</option>
        <option value="1:15PM">1:15PM</option>
        <option value="1:30PM">1:30PM</option>
        <option value="1:45PM">1:45PM</option>
        <option value="2:00PM">2:00PM</option>
        <option value="2:15PM">2:15PM</option>
        <option value="2:30PM">2:30PM</option>
        <option value="2:45PM">2:45PM</option>
        <option value="3:00PM">3:00PM</option>
        <option value="3:15PM">3:15PM</option>
        <option value="3:30PM">3:30PM</option>
        <option value="3:45PM">3:45PM</option>
        <option value="4:00PM">4:00PM</option>
        <option value="4:15PM">4:15PM</option>
        <option value="4:30PM">4:30PM</option>
        <option value="4:45PM">4:45PM</option>
        <option value="5:00PM">5:00PM</option>
        <option value="5:15PM">5:15PM</option>
        <option value="5:30PM">5:30PM</option>
        <option value="5:45PM">5:45PM</option>
        <option value="6:00PM">6:00PM</option>
        <option value="6:15PM">6:15PM</option>
        <option value="6:30PM">6:30PM</option>
        <option value="6:45PM">6:45PM</option>
        <option value="7:00PM">7:00PM</option>
        <option value="7:15PM">7:15PM</option>
        <option value="7:30PM">7:30PM</option>
        <option value="7:45PM">7:45PM</option>
        <option value="8:00PM">8:00PM</option>
       </select>

       
        <div class="inputGroup3">
            <input autocomplete="off" required="" type="text" name="course">
            <label for="Course">Course</label>
        </div>
       
        <select id="select-department" name="department" required>
            <option value="">Select Department</option>
            <option value="CET">CET</option>
            <option value="CASE">CASE</option>
            <option value="CHTM">CHTM</option>
            <option value="CBMA">CBMA</option>
            <option value="Law">Law</option>
            <option value="Marine">Marine</option>
            <option value="Crim">Criminology</option>
        </select>

        <div class="button-submit">
            <button type="submit">SUBMIT</button>
        </div>
    </form>
</div>
</div>

<div class="button-back">
<button type="button" onclick="window.location.href='Schedule.php'">BACK</button>
</div>
</div>
</div>
  </body>


<script> 
src="https://code.jquery.com/jquery-3.6.0.min.js"
src="script.js"
  $(document).ready(function() {
    $('#select-Subject').select2({
      placeholder: 'Select Subject',
      allowClear: true
    });
  });

  $(document).ready(function(){
    $('#select-Room').select2({
        placeholder:'Select Room',
        allowClear:true
    });
  })

  $(document).ready(function(){
    $('#select-StartTime').select2({
        placeholder:'Select Start Time',
        allowClear:true
    });
  })

  $(document).ready(function(){
    $('#select-EndTime').select2({
        placeholder:'Select End Time',
        allowClear:true
    });
  })

  $(document).ready(function() {

$('#select-Semester').change(function() {

    var semester = $(this).val();
    var subjectSelect = $('#select-Subject');
    subjectSelect.empty();
    subjectSelect.append('<option value="">Select Subject</option>');
    if (semester) {
        $.ajax({
            url: 'GetSemesterSubject.php', 
            type: 'GET',
            data: { semester: semester },
            success: function(data) {
                var subjects = JSON.parse(data);
                $.each(subjects, function(index, subject) {
                    subjectSelect.append('<option value="' + subject.Subject_Code + '">' + subject.Subject_Code + '</option>');
                });
            },
            error: function() {
                alert('Error fetching subjects');
            }
        });
    }
});
});

$(document).ready(function() {

$('#select-Campus').change(function() {

    var campus = $(this).val();

    var roomSelect = $('#select-Room');

    roomSelect.empty();

    roomSelect.append('<option value="">Select Room</option>');

    

    if (campus) {

        $.ajax({

            url: 'GetCampusRoom.php', 

            type: 'GET',

            data: { campus: campus },

            success: function(data) {

                var rooms = JSON.parse(data);

                $.each(rooms, function(index, room) {

                    roomSelect.append('<option value="' + room.Room + '">' + room.Room + '</option>');

                });

            },

            error: function() {

                alert('Error fetching rooms');

            }

        });

    }

});

});

 

new MultiSelectTag('select-Day')
</script>

  <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
      *{
        font-family: "Montserrat", sans-serif;
      }
      body {
              background-image: url("cpc4.jpg");
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;
              
          }
          .wrapper{
          border-radius: 50px;
          background-color:#fff;
          height: 900px;
          width: 600px;
          margin-top: 150px;
          margin-left: 500px;
          display: flex;
          justify-content: center;
          align-items: center;
      }
      .btn {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.btn:hover {
  background-color: #3e8e41;
}

.container {
display: flex;
flex-direction: column; /* Align items vertically */
align-items: center; /* Center items horizontally */
width: 50%; /* Full width */
padding: 20px; /* Add some padding */

}


#select-Subject,
#select-Semester,
#select-Room,
#select-Campus,
#select-StartTime,
#select-EndTime,
#select-department {
width: 180px; /* Fixed width */
padding: 5px;
border: 2px solid #ccc;
border-radius: 5px;
font-size: 16px;
margin: 10px 0; /* Vertical margin for spacing */

}


#select-Day {
border: 1px solid #ccc;
padding: 10px;
width: 100%; 
height: auto; 
overflow-y: auto;
margin: 10px 0; 

}


#select-Day label {

display: block;

margin-bottom: 10px;

}


.inputGroup3 {

font-family: 'Montserrat', sans-serif;

margin: 10px 0; /* Vertical margin for spacing */

max-width: 200px;

}


.inputGroup4 input {
font-size: 100%;
padding: 0.8em;
outline: none;
border: 2px solid rgb(200, 200, 200);
background-color: transparent;
width: 100%; /* Full width */

}


.button-submit button {

padding: 1.4em 4.5em;

font-size: 12px;

width: 15em;

text-transform: uppercase;

letter-spacing: 3.5px;

font-weight: 500;

color: #fff;

background-color: #0652b5c6;

border: none;

border-radius: 25px;

transition: all 0.3s ease 0s;

cursor: pointer;

outline: none;

margin: 20px 0; /* Vertical margin for spacing */

}


.button-back button {

font-size: 20px;
text-transform: uppercase;
width: 65px;
color: #fff;
background-color: #670d04c6;
border: none;
border-radius: 13%;
transition: all 0.3s ease 0s;
cursor: pointer;
outline: none;
margin: 20px 0; /* Vertical margin for spacing */
margin-top:640px;
margin-left:-220px;

}

@media (max-width: 768px) {

.wrapper {
    height: auto; 
    width: 90%; 
    margin-left: 5%; 
    margin-top: 50px; 
}


#select-Subject,
#select-Semester,
#select-Room,
#select-department {
    width: 100%; 
}



.inputGroup3 {
    max-width: 100%; 
}

.button-submit button {
    margin-left: 500px; 
    margin-top: 10px; 
    width: 45%; 
}

.button-back button {
    width: 8%; 
    margin-left: 105px;
    font-size: 10px; 
}

}

@media (max-width: 480px) {
.button-submit button {
    padding: 1em 2em; 
}

.button-back button {
    font-size: 14px; 
}

}