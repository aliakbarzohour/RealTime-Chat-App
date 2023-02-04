<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ZCHAT | SignUp</title>
    <!-- Global Styles -->
    <link rel="stylesheet" href="styles/style.css" />
    <!-- SignUp Page Styles -->
    <link rel="stylesheet" href="./styles/signup.css" />
    <!-- FontAwsome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <script src="./Js/pass-show-hide.js" defer></script>
    <script src="./Js/signup.js" defer></script>
  </head>
  <body>
    <div class="wrapper">
      <section class="form signup">
        <header>Realtime Chat App</header>
        <form action="#" enctype="multipart/form-data">
          <div class="error-txt"></div>
          <div class="name-details">
            <!-- First Name -->
            <div class="field input">
              <label>First Name</label>
              <input type="text" name="fname" placeholder="First Name" required/>
            </div>
            <!-- Last Name -->
            <div class="field input input">
              <label>Last Name</label>
              <input type="text" name="lname" placeholder="Last Name" required/>
            </div>
          </div>
          <!-- Email Address -->
          <div class="field input">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="Enter Your Email " reqired/>
          </div>
          <!-- Password -->
          <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter New Password" reqired/>
            <i class="fas fa-eye"></i>
          </div>
          <!-- Profile Image -->
          <div class="field image">
            <label>Select Profile Image</label>
            <input type="file" name="image"reqired/>
          </div>
          <!-- Submit -->
          <div class="field button">
            <input type="submit" value="Continue To Chat" />
          </div>
        </form>

        <div class="link">
          Already Signed Up ? <a href="./login/login.php">Login Now</a>
        </div>
      </section>
    </div>

  </body>
</html>
