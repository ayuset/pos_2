<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registration</title>
        <link href="<?php echo base_url('css/styles.css')?>" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form class="user" method="post" action="<?php echo config_item('base_url'); ?>index.php/login/registration">
                                            <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Username</label>
                                                        <input class="form-control form-control-user" id="name" name ="username" type="text" value="<?= set_value('username');?>" placeholder="Enter username" />
                                                        <?= form_error('username', '<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control form-control-user" id="email" name="email" type="email" aria-describedby="emailHelp"  value="<?= set_value('email');?>" placeholder="Enter email address" />
                                                <?= form_error('email', '<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                            <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Full Name</label>
                                                        <input class="form-control form-control-user" id="fullname" name ="fullname" type="text" value="<?= set_value('fullname');?>" placeholder="Enter full name" />
                                                        <?= form_error('fullname', '<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Phone Number</label>
                                                <input class="form-control form-control-user" id="phone" name="phone" type="text" aria-label="phoneHelp"  value="<?= set_value('phone');?>" placeholder="Enter Phone number" />
                                                <?= form_error('phone', '<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input class="form-control py-4" id="password1" name="password1" type="password" placeholder="Enter password" />
                                                        <?= form_error('password1', '<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input class="form-control py-4" id="password2" name="password2"type="password" placeholder="Confirm password" />
                                                    </div>
                                                </div>
                                            </div>                                            
                                            <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="<?php echo config_item('base_url'); ?>index.php/login/index">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
