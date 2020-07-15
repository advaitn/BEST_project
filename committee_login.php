
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
    <body>
        <h1>REGISTER COMMITTEE MEMBER</h1>
        <div class="col-lg-4 m-auto">
            <form id="myform" action="committee_login_check.php" method="post">

                <div class="form-group">
                    <label for="uniqueid">Unique Id</label>
                    <input type="text" class="form-control" name="uniqueid" placeholder="unique id">
                </div>
                
                <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div> -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Password">
                </div>
            
            <button type="submit" class="btn btn-primary" name="cl_submit" id="submit">Submit</button>
            </form>
        </div>    
    </body>
</html>
