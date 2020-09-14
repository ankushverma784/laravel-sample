<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">
    
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include("include/header.php"); ?>

        <!-- Page Content  -->

        <div id="content">
        	<?php include("include/navbar.php"); ?> 

       	  <section class="section-padding bg-color">
       	  	<div class="container">
       	  		<div class="row">
                        <div class="col-lg-12 section-heading">
                            <div class="d-flex">
                                <h1>Datatables <small>View all the details here</small></h1>
                            </div>
                        </div>
       	  			<div class="col-lg-12">
       	  				    <div class="card-spacer">
                                <table id="table_id" class="display nowrap dataTable dtr-inline collapsed">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th>Client</th>
                                            <th>Email</th>
                                            <th>Email</th>
                                            <th>Email</th>
                                            <th>Subscription</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>                   
                                            <td>client1</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>client1@company.com</td>
                                            <td>Business</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>client2@company.com</td>
                                            <td>Personal</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>client2@company.com</td>
                                            <td>Personal</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>client2@company.com</td>
                                            <td>Personal</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>client2@company.com</td>
                                            <td>Personal</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>client2@company.com</td>
                                            <td>Personal</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>client2@company.com</td>
                                            <td>Personal</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>client2@company.com</td>
                                            <td>Personal</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>client2@company.com</td>
                                            <td>Personal</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">8</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>client2@company.com</td>
                                            <td>Personal</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">9</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>client2@company.com</td>
                                            <td>Personal</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">10</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>lient2</td>
                                            <td>client2@company.com</td>
                                            <td>Personal</td>
                                        </tr>
                                        </tbody>
                                    </table>
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

      <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <!-- <script src="js/custom.js"></script> -->

	<script src="js/custom.js"></script>
    
</body>

</html>