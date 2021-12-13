  <?php
require_once('function/manage.php');

needLogged();
if($_SESSION['role']==4){


get_header();
get_sidebar();

?>
                    <div class="row">
                        <div class="col-md-12 main_content">
                            <div class="card">
                              <div class="card-header">
                                  <div class="row">
                                      <div class="col-md-8">
                                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Table All Data</h4>
                                      </div>
                                      <div class="col-md-4 text-right">
                                          <a class="btn btn-sm btn-dark card_top_btn" href="add-user.php"><i class="fa fa-plus-circle"></i> add user</a>
                                      </div>
                                      <div class="clearfix"></div>
                                  </div>
                              </div>
                              <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover custom_table">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Name</th>

                                        <th scope="col">Email</th>
                                        <th scope="col">Text</th>
                                        <th scope="col">Messege</th>

                                        <th scope="col">Manage</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $i=1;
                                      $sel="SELECT * FROM blog_table NATURAL JOIN role ORDER BY id DESC";
                                      $Q=mysqli_query($con,$sel);
                                      while($data=mysqli_fetch_assoc($Q)){
                                       ?>

                                      <tr>
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $data['user_name']; ?></td>
                                        <td><?php echo $data['user_email']; ?></td>
                                        <td><?php echo $data['user_text']; ?></td>
                                        <td><?php echo $data['user_messege']; ?></td>


                                        <td>


                                            <a href="view.php?v=<?= $data['id'];?>"><i class="fa fa-plus-square fa-lg"></i></a>
                                            <a href="edit-user.php?e=<?= $data['id'];?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                                            <a href="delete.php?d=<?= $data['id'];?>"><i class="fa fa-trash fa-lg"></i></a>
                                            <a href="delete.php?d=<?= $data['id'];?>"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                      </tr>
                                    <?php } ?>
                                    </tbody>
                                  </table>
                              </div>
                              <div class="card-footer text-center">
                                  .
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
}
else {
  header('Location:access.php');
}
 ?>
