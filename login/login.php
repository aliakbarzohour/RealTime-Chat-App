<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ZCHAT | Login</title>
    <!-- Global Styles -->
    <link rel="stylesheet" href="../styles/style.css" />
    <!-- Login Page -->
    <link rel="stylesheet" href="../styles/login.css" />
    <!-- FontAwsome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <script src="../Js/pass-show-hide.js" defer></script>
  </head>
  <body>
    <div class="wrapper">
      <section class="form login">
        <header>Realtime Chat App</header>
        <form action="#">
          <div class="error-txt">This is an error massage !</div>
          <!-- Email Address -->
          <div class="field input">
            <label>Email Address</label>
            <input type="text" placeholder="Enter Your Email " />
          </div>
          <!-- Password -->
          <div class="field input">
            <label>Password</label>
            <input type="password" placeholder="Enter Your Password" />
            <i class="fas fa-eye"></i>
          </div>
          <!-- Submit -->
          <div class="field button">
            <input type="submit" value="Continue To Chat" />
          </div>
        </form>

        <div class="link">
          Not Yet Signed Up ? <a href="../index.php">SignUp Now</a>
        </div>
      </section>
    </div>
  </body>
</html>
