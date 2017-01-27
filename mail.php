<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log In &middot; Tathmini &middot;</title>
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/elephant.min.css">
    <link rel="stylesheet" href="css/login-1.min.css">
  </head>
  <body>
    <div class="login">
      <div class="login-body">
        <a class="login-brand" href="index.html">
          <img class="img-responsive" src="img/logoo.png" alt="Elephant">
        </a>
        <h3 class="login-heading">Send mail</h3>
        <div class="login-form">
          <form data-toggle="validator" action="home.html">
            <div class="form-group">
              <label for="username" class="control-label">Email</label>
              <input id="username" class="form-control" type="email" name="username" spellcheck="false" autocomplete="off" data-msg-required="Please enter your username." required>
            </div>
            <div class="form-group">
              <label for="password" class="control-label">Message</label>
              <textarea class="form-control" rows="5" id=""></textarea>
            </div>
            <div class="form-group">
             <!--  <button class="btn btn-primary btn-block" target= "_blank" type="submit">Sign in</button> -->
              <input type="submit" name="" value="Send" class="btn btn-block btn-primary">
            </div>
          </form>
        </div>
      </div>
      <div class="login-footer">
        <ul class="list-inline">
          <!-- <li><a class="link-muted" href="signup-1.html">Sign up</a></li>
          <li>|</li> -->
          <li><a class="link-muted" href="#">Privacy Policy</a></li>
          <li>|</li>
          <li><a class="link-muted" href="#">Terms</a></li>
          <li>|</li>
          <li><a class="link-muted" href="#">Cookie Policy</a></li>
          <li>|</li>
          <li>© Tathmini 2017</li>
        </ul>
      </div>
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-83990101-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>