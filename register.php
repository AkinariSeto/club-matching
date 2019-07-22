<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 mt-5">
                <div class="card">
                    <div class="card-header py-5 bg-primary">
                        <h3 class="text-light text-center py-3">Register</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="admin/user_action.php?action=add">
                        <div class="form-group">
                                        <label for="user" class="form-control-label">User Name</label>
                                        <input type="user" id="user" class="form-control" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="firstname" class="form-control-label">First Name</label>
                                        <input type="user" id="firstname" class="form-control" name="user_firstname">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname" class="form-control-label">Last Name</label>
                                        <input type="user" id="lastname" class="form-control" name="user_lastname">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-control-label">Email</label>
                                        <input type="email" id="email" class="form-control" name="user_email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="form-control-label">Password</label>
                                        <input type="password" id="password" class="form-control" name="user_password">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm_password" class="form-control-label">Confirm
                                            password</label>
                                        <input type="password" id="confirm_password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="bio" class="form-control-label">Bio</label>
                                        <br>
                                        <textarea type="text" name="user_bio" id="bio" class="form-control"></textarea>
                                    </div>
                            <button type="submit" class="btn btn-outline-success btn-sm mt-3" name="register">Register</button>
                            <p class="float-right mt-3 text-muted">Don't have an account?
                                <strong><a href="" class="text-decoration-none text-dark">Log in</a></strong>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>