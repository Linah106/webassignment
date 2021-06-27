<!Doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Layout</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="form.css">
  </head>
  <body>
    <div class="main">
  <div class="header">
      <h1 style="color:orange;">WELCOME TO MY SITE</h1>
          <ul>

            <li><a href="index.html" class="active">Home</a><label for="" style="color:white;">>Register</label></li>
          </ul>
  </div>
  <div class="welc">
  <p>  <marquee>WELCOME TO MY WEB SITE</marquee></p>

  </div>
    <div class="menu">
      <div class="headerform">
      <h1>Course register</h1>
    </div>
    <form class="myform" action="register.php" method="POST">
      <div class="input-group">
      <select class="" name="">
        <option value="cs171">Networking</option>
        <option value="cs173">Bussiness Communication</option>
        <option value="is181">Web Programming</option>
      </select>
      </div>
      <div class="input-group">
      <select class="" name="">
        <option value="net">CS171</option>
        <option value="buss">CS173</option>
        <option value="web">IS181</option>
      </select>
      </div>
      <div class="input-group">
<textarea name="corse_descrp" rows="8" cols="10"></textarea>
      </div>
      <div class="input-group">
      <select class="" name="">
        <option value="">Select Department</option>
        <option value="cse">Computer Science and Engineering</option>
        <option value="ete">Electronic and Telecommunication Engineering</option>
        <option value="ds">Deevlopment Perspective</option>
      </select>
      </div>
      <div class="input-group">
      <select class="" name="">
        <option value="one">I</option>
        <option value="two">II</option>
        <option value="three">III</option>
        <option value="four">IV</option>
        <option value="five">V</option>
        <option value="six">VI</option>
        <option value="seven">VII</option>
        <option value="eight">VIII</option>
      </select>
      </div>
      <div class="input-group">
      <select class="" name="">
        <option value="year1">2018/2019</option>
        <option value="year2">2019/2020</option>
        <option value="year3">2020/2021</option>

      </select>
      </div>


      <div class="input-group">

        <button type="submit" name="register" class="btn">Save</button>
      </div>

    </form>


</div>
    <div class="footer">
      <hr>
      <p style="text-align:center;color:orange">email: <a href="http://linahlawrence4@gmail.com" style="color:white;">linahlawrence4@gmail.com</a> </p>
    </div>
      </div>
  </body>
</html>
