<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
a:link{
    text-decoration: none;
    color: beige;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<div class="content">

<div>
    @if(session()->has('success'))
    <div>{{session->get('success')}}</div>
</div>
@endif

<h2 style="text-align:center;">Form Two Student Page</h2>

<form action="{{route('form_2')}}" method="POST">
    @csrf
  <div class="container">
  <label for="name"><b>Candidate number</b></label>
  <input type="text" placeholder="Enter candidate number" name="cdn" required><br><br>

    <label for="name"><b>First name</b></label>
    <input type="text" placeholder="Enter first name" name="first_name" required><br><br>

    <label for="email"><b>Surname</b></label><br>
    <input type="text" placeholder="Enter surname" name="surname" required><br><br>

    <label for="password"><b>Last_name</b></label>
    <input type="text" placeholder="Enter last name" name="last_name" required><br><br>

    <button type="submit">Save</button>
</form>
</div>
