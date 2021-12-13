<?php
echo rand(10000,10000000);
require_once('function/manage.php');
if($_SESSION['role']==4){


needLogged();

get_header();
get_sidebar();
if(!empty($_POST)){
  $title=$_POST['title'];
  $details=$_POST['details'];
  $icon=$_POST['icon'];

$insert="INSERT INTO cs_services(service_title,service_details,service_icon)VALUES('$title','$details','$icon')";
if(mysqli_query($con,$insert)){
  echo "SAVE SUCCESSFULL";
}else {
  echo "SAVE NOT SUCCESSFULL";
}



}


 ?>
            <div class="row">
                        <div class="col-md-12 main_content">
                            <form method="post" action="" enctype="multipart/form-data">
                              <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-8">
                                              <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Form Design</h4>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a class="btn btn-sm btn-dark card_top_btn" href="all-services.php"><i class="fa fa-th"></i> All Services</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Service Title:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="title">
                                        </div>
                                      </div>

                                      <div class="form-group row custom_form_group">
                                         <label class="col-sm-3 col-form-label">Service Details:</label>
                                         <div class="col-sm-7">
                                           <input type="text" class="form-control" id="" name="details">
                                         </div>
                                       </div>


                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Service Icon:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="icon">
                                        </div>
                                      </div>

                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-sm btn-dark submit_btn">SAVE</button>
                                </div>
                              </div>
                          </form>
                        </div>
                    </div>
<?php
get_footer();
}
else {
  header('Location:access.php');
}
 ?>
