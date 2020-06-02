<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="design/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
      <div class="col-lg-6 m-auto">
         <div class="card bg-info mt-5">
         <div class="card-title bg-dark text-white mt-5">
            <h3 class="text-center py-3">FoodFun Login Form</h3>
               </div>
         
         <div class="card-body">
           <form action="login_check.php" method="POST">
           <input type="text" name="uname" placeholder=" User Name" class="form-control mb-3">
          <input type="password" name="password" placeholder=" Password" class="form-control mb-3">
           <button class="btn btn-success mt-3" type="submit" name="submit" value="Login">Login</button>
             
           </form>
         </div>
         </div>
        </div>
      </div>
    </div>
  </body>
</html>