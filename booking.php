<html>
<head>
<style>
  .main{
    background-image="1.jfif";
   background-repeat="no-repeat"; 
  background-size="cover";
  }
  body {
  width: 500px;
  margin: 0 auto;
  padding: 50px;
}

div.elem-group {
  margin: 20px 0;
}
div.main{
  
   background-repeat="no-repeat"; 
  background-size="cover";
}
div.elem-group.inlined {
  width: 49%;
  display: inline-block;
  float: left;
  margin-left: 1%;
  
}

label {
  display: block;
  font-family: 'Nanum Gothic';
  padding-bottom: 10px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  width: 100%;
  padding: 10px;
}

div.elem-group.inlined input {
  width: 95%;
  display: inline-block;
}

textarea {
  height: 250px;
}

hr {
  border: 1px dotted #ccc;
}

button {
  height: 50px;
  background: orange;
  border: none;
  color: white;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  border: 2px solid black;
}
</style>
</head>
    <body style="background-image: url('hd3.jpg');">   
        <script>
            var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10) {
  date = '0' + date;
}
if(month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}
        </script>
<form action="register.php" method="POST" id="register_form">
<div class=main>
        <form action="reservation.php" method="post">
            <div class="elem-group inlined">
                <label for="checkin-date">Check-in Date</label>
                <input type="date" id="checkin-date" name="checkin" required>
              </div>
              <div class="elem-group inlined">
                <label for="checkout-date">Check-out Date</label>
                <input type="date" id="checkout-date" name="checkout" required>
              </div>
              <div class="elem-group">
                <label for="room-selection">Choose seminar hall</label>
                <select id="room-selection" name="room_preference" required>
                    <option value="">Choose a Hall from the List</option>
                    <option value="connecting">MAHARAJA AUDITORIUM</option>
                    <option value="adjoining">CONVENTIONAL CENTER</option>
                    <option value="adjacent">THIRUVALLUVAR HALL</option>
                    <option value="connecting">SARVEPALLI RADHAKRISHNAN HALL</option>
                    <option value="adjoining">RAMAKRISHNA PARAMAHAMSAR HALL</option>
                    <option value="adjacent">HOMI J BABA</option>
                    <option value="connecting">MAHATMA GANDHI</option>
                    <option value="adjoining">MCA SEMINAR HALL</option>
                    <option value="adjacent">MBA SEMINAR HALL</option>
                    <option value="connecting">KALINGARAYAN SEMINAR HALL</option>
                    <option value="adjoining">SIR C V RAMAN SEMINAR HALL</option>
                    <option value="adjacent">CONFERENCE HALL(ADMIN)</option>
                    <option value="connecting">JAWAHARLAL NEHRU HALL</option>
                </select>
              </div>
    <div class="elem-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="visitor_name"  pattern=[A-Z\sa-z]{3,20} required>
    </div>
    <div class="elem-group">
      <label for="email">E-mail</label>
      <input type="email" id="email" name="visitor_email"  required>
    </div>
    <div class="elem-group">
      <label for="phone">Phone</label>
      <input type="tel" id="phone" name="visitor_phone"  pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
    </div>
    <div class="elem-group inlined">
      <label for="adult">Number of persons expected</label>
      <input type="number" id="adult" name="total_adults"  min="1" required>
    </div>
    <br>
    <br>
    <br><br><br><br><br>
    <div class="elem-group">
      <label for="session">Choose session</label>
      <select id="session" name="session_preference" required>
          <option value="">Choose a session</option>
          <option value="connecting">Morning</option>
          <option value="adjoining">Afternoon</option>
          <option value="adjoining">Full day</option>
        </select>
  </div>
    <div class="elem-group inlined">
      <label for="child">Purpose of the event</label>
      <input type="text" id="child" name="total_children" min="0" required>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <button type="submit" id="submit" >Book The Rooms</button>
  </form>
</div>
    </body>
</html>
