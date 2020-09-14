<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include("include/header.php"); ?>

        <!-- Page Content  -->

        <div id="content">
            <?php include("include/navbar.php"); ?> 
            
            <section id="profile-form-01" class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 section-heading">
                            <div class="d-flex">
                                <h1>Profile Form <small>Fill Your Details</small></h1>
                            </div>
                        </div>
                    </div>
                <div class="card-spacer">
                    <div class="row">
                       <div class="col-lg-12">
                           <form id="profile-form" method="post" role="form">
                              <div class="controls">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="enroll_form_name">Name <span class="text-danger">*</span></label>
                                          <input id="enroll_form_name" type="text" name="name" class="form-control" placeholder="Enter Your Name" required="required">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="enroll_form_email">Email<span class="text-danger">*</span></label>
                                          <input id="enroll_form_email" type="email" name="email" class="form-control" placeholder="Enter Your Email" required="required">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="enroll_form_number">Contact No<span class="text-danger">*</span></label>
                                          <input id="enroll_form_number" type="number" name="number" class="form-control" placeholder="Enter Your Contact No" required="required">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="enroll_form_email">Login Id <span class="text-danger">*</span></label>
                                          <input id="enroll_form_email" type="email" name="email" class="form-control" placeholder="Enter Your Login Id" required="required">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="enroll_form_cpswd">Password <span class="text-danger">*</span></label>
                                          <input id="enroll_form_pswd" type="password" name="password" class="form-control" placeholder="Enter Your password" required="required">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="enroll_form_cpswd">Confirm Password <span class="text-danger">*</span></label>
                                          <input id="enroll_form_cpswd" type="password" name="cpassword" class="form-control" placeholder="Enter Your password" required="required">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="messages" id="enroll-form-response"></div>
                                       <input type="submit" class="submit-button btn-01 " value="Submit Now" id="enroll-form-btn">
                                    </div>
                                 </div>
                              </div>
                           </form>
                       </div>
                    </div>
                </div>
            </div>
            </section>
            <?php include("include/footer.php"); ?>
          </div>

          
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>

</body>

</html>