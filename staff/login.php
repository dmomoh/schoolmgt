<?php require_once ("include/header.php")?>
<div class="row-cols-md-auto">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../index.php">Home</a>

        <a class="navbar-brand" href="login.php">Login</a>

        <a class="navbar-brand" href="activate.php">activate account</a>
    </nav>
</div>

<div class="row-cols-md-auto">

    <h1>
        Welcome back login to continue...
    </h1>
    <div class="row-cols-md-3">
        <form  method="post" action="dashboard/">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <br/>
        <br/>
            <div class="form-group">

                <button type="submit" class="btn btn-outline-danger">Login</button>
              </div>

        </form>

    </div>

</div>
<?php require_once ("include/footer.php")?>
