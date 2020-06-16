<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Admin Login</title>


    <link href="./bootstrap.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="header">
            
            <h3 class="text-muted">User Control System</h3>
        </div>
        
      <div class="jumbotron">
        <p class="lead"></p>
        <div class="login-form">
            <form role="form" action="check.php" method="GET">
                <div class="form-group">
                    <input type="text" name="user" id="username" class="form-control input-lg" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                </div>
                <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
                </div>
            </div>
            </form></div>
            
        
    </div>

</div>


</body></html>
