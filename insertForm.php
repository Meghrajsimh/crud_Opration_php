
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Add Bootstrap JS (jQuery is required) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
      .error{
        color:red;
        font-size: smaller;
      }
      .scroll {
          width: 30em;
          height: 400px;
          overflow:auto;
          background-color:blanchedalmond ;
          padding: 10px 50px;
          border-radius: 8px;
          margin-left: 19em;
      }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
      <h1 style="text-align: center;">Course Ragistration</h1>
        <form style="width: 300px;" id="form" action="./insertData.php" method="post" >
          <div class="form-group, scroll">
            <label for="firstName">First Name<span style="color:red;">*</span></label>
            <input type="text" class="form-control"   placeholder="first name" name="first_name" autofocus >
            <label for="lastName">Last Name<span style="color:red;">*</span></label>
            <input type="text" class="form-control"   placeholder="last name" name="last_name">
            <label for="age">Age<span style="color:red;">*</span></label>
            <input type="number" class="form-control"   placeholder="age" name="age">
            <label for="phoneNumber">Phone Number<span style="color:red;">*</span></label>
            <input type="number" class="form-control"   placeholder="phone number" name="phone_number"><br>

            <lable for="gender"    style="margin-top:20px;">Gender<span style="color:red;">*</span></lable><br>
              <input type="radio"   name="gender" value="Male" data-error=".error1"/>Male
              <input type="radio"  name="gender" value="Female" data-error=".error1"/>Female <br>
              <br><span class="error1"></span><br>

            <label for="selectCountry">State:<span style="color:red;">*</span></label><br>
            <select class="form-control" name="state">
                  <option value="">select</option>
                  <option value="gujarat">Gujarat</option>
                  <option value="rajasthan">Rajasthan</option>
                  <option value="maharastra">maharastra</option>
                  <option value="madhyapradesh">Madhya pradesh</option>
                  <option value="westbengal">West bengal</option>
                  <option value="punjab">Punjab</option>
                  <option value="delhi">Delhi</option>
            </select><br>

            <label for="course">Courses<span style="color:red;">*</span></label><br>
            <input type="checkbox" name="course[]" value=1/>PHP
            <input type="checkbox" name="course[]" value=2/>DBMS
            <input type="checkbox" name="course[]" value=3/>DSA <br>

            <label for="addres">Address<span style="color:red;">*</span></label>
            <textarea class="form-control" name="addres" rows=5 maxlength=2000></textarea> 
            <label for="exampleInputEmail1">Email address<span style="color:red;">*</span></label>
            <input type="email" class="form-control"   placeholder="Enter email" name="email">

      
              <label for="exampleInputPassword1">Password<span style="color:red;">*</span></label>
              <input type="password" class="form-control"  placeholder="Password" name="password"><br>
          </div>
          <button type="submit" style="display:block;margin-top:20px;margin-left:30em;" class="btn btn-primary" name="submit">Submit</button>
        </form>
       
      </div>
      

      
</body> 
<script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" ></script>
<script src="validate.js"></script>
</html>