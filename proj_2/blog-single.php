<?php
require_once('functions/manage.php');
require_once('config.php');
get_header();
if(!empty($_POST)){
$name=$_POST['name'];
$email=$_POST['email'];
$website=$_POST['website'];
$messege=$_POST['messege'];


}

if(!empty($name)){
  if(!empty($email)){
    if(!empty($website)){
      if(!empty($messege)){
        $insert="INSERT INTO my_tab(u_name,u_email,u_website,u_messege)VALUES('$name','$email','$website','$messege')";
        if(mysqli_query($con,$insert)) {
      //    echo "succesfully Entry";
        }
      //  echo "Please enter messege";
      }
    //  echo "please enter website";
    }
  //  echo "please enter email";

  }
  //echo "please enter name";
}
 ?>
    <section class="hero-wrap hero-wrap-2" style="background-image:url(images/xbg_1.jpg.pagespeed.ic.4zslKVf4er.jpg)">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Blog Single</h1>
            <p class="breadcrumbs">
              <span class="mr-2">
                <a href="index.html">Home <i class="ion-ios-arrow-forward"></i>
                </a>
              </span>
              <span class="mr-2">
                <a href="index.html">Blog <i class="ion-ios-arrow-forward"></i>
                </a>
              </span>
              <span>Blog Single <i class="ion-ios-arrow-forward"></i>
              </span>
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">#2. Creative WordPress Themes</h2>
            <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
            <p>
              <img src="images/ximage_2.jpg.pagespeed.ic.__ePxgvLdY.jpg" alt="" class="img-fluid">
            </p>
            <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
            <p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p>
            <p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p>
            <p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
              </div>
            </div>
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="images/xteacher-1.jpg.pagespeed.ic.AyWvtajk8X.jpg" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3>George Washington</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              </div>
            </div>
            <div class="pt-5 mt-5">
              <h3 class="mb-5 h4 font-weight-bold">6 Comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/xteacher-1.jpg.pagespeed.ic.AyWvtajk8X.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta mb-2">June 27, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p>
                      <a href="#" class="reply">Reply</a>
                    </p>
                  </div>
                </li>
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/xteacher-1.jpg.pagespeed.ic.AyWvtajk8X.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta mb-2">June 27, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p>
                      <a href="#" class="reply">Reply</a>
                    </p>
                  </div>
                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="images/xteacher-1.jpg.pagespeed.ic.AyWvtajk8X.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>John Doe</h3>
                        <div class="meta mb-2">June 27, 2019 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p>
                          <a href="#" class="reply">Reply</a>
                        </p>
                      </div>
                      <ul class="children">
                        <li class="comment">
                          <div class="vcard bio">
                            <img src="images/xteacher-1.jpg.pagespeed.ic.AyWvtajk8X.jpg" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>John Doe</h3>
                            <div class="meta mb-2">June 27, 2019 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p>
                              <a href="#" class="reply">Reply</a>
                            </p>
                          </div>
                          <ul class="children">
                            <li class="comment">
                              <div class="vcard bio">
                                <img src="images/xteacher-1.jpg.pagespeed.ic.AyWvtajk8X.jpg" alt="Image placeholder">
                              </div>
                              <div class="comment-body">
                                <h3>John Doe</h3>
                                <div class="meta mb-2">June 27, 2019 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p>
                                  <a href="#" class="reply">Reply</a>
                                </p>
                              </div>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/xteacher-1.jpg.pagespeed.ic.AyWvtajk8X.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta mb-2">June 27, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p>
                      <a href="#" class="reply">Reply</a>
                    </p>
                  </div>
                </li>
              </ul>
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5 h4 font-weight-bold">Leave a comment</h3>
                <form method="post" action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" name="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" name="website">
                  </div>
                  <div class="form-group">
                    <label for="message">Messege</label>
                    <textarea  name="messege" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <h3>Category</h3>
              <ul class="categories">
                <li>
                  <a href="#">Art <span>(6)</span>
                  </a>
                </li>
                <li>
                  <a href="#">Sports <span>(8)</span>
                  </a>
                </li>
                <li>
                  <a href="#">Language <span>(2)</span>
                  </a>
                </li>
                <li>
                  <a href="#">Food <span>(2)</span>
                  </a>
                </li>
                <li>
                  <a href="#">Music <span>(2)</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="sidebar-box ftco-animate">
              <h3>Popular Articles</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image:url(images/ximage_1.jpg.pagespeed.ic.qblUUzQElE.jpg)"></a>
                <div class="text">
                  <h3 class="heading">
                    <a href="#">Even the all-powerful Pointing has no control about the blind texts</a>
                  </h3>
                  <div class="meta">
                    <div>
                      <a href="#">
                        <span class="icon-calendar"></span> June 27, 2019 </a>
                    </div>
                    <div>
                      <a href="#">
                        <span class="icon-person"></span> Dave Lewis </a>
                    </div>
                    <div>
                      <a href="#">
                        <span class="icon-chat"></span> 19 </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image:url(images/ximage_2.jpg.pagespeed.ic.__ePxgvLdY.jpg)"></a>
                <div class="text">
                  <h3 class="heading">
                    <a href="#">Even the all-powerful Pointing has no control about the blind texts</a>
                  </h3>
                  <div class="meta">
                    <div>
                      <a href="#">
                        <span class="icon-calendar"></span> June 27, 2019 </a>
                    </div>
                    <div>
                      <a href="#">
                        <span class="icon-person"></span> Dave Lewis </a>
                    </div>
                    <div>
                      <a href="#">
                        <span class="icon-chat"></span> 19 </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image:url(images/ximage_3.jpg.pagespeed.ic.eS72JKpT5C.jpg)"></a>
                <div class="text">
                  <h3 class="heading">
                    <a href="#">Even the all-powerful Pointing has no control about the blind texts</a>
                  </h3>
                  <div class="meta">
                    <div>
                      <a href="#">
                        <span class="icon-calendar"></span> June 27, 2019 </a>
                    </div>
                    <div>
                      <a href="#">
                        <span class="icon-person"></span> Dave Lewis </a>
                    </div>
                    <div>
                      <a href="#">
                        <span class="icon-chat"></span> 19 </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <ul class="tagcloud m-0 p-0">
                <a href="#" class="tag-cloud-link">School</a>
                <a href="#" class="tag-cloud-link">Kids</a>
                <a href="#" class="tag-cloud-link">Nursery</a>
                <a href="#" class="tag-cloud-link">Daycare</a>
                <a href="#" class="tag-cloud-link">Care</a>
                <a href="#" class="tag-cloud-link">Kindergarten</a>
                <a href="#" class="tag-cloud-link">Teacher</a>
              </ul>
            </div>
            <div class="sidebar-box ftco-animate">
              <h3>Archives</h3>
              <ul class="categories">
                <li>
                  <a href="#">December 2018 <span>(30)</span>
                  </a>
                </li>
                <li>
                  <a href="#">Novemmber 2018 <span>(20)</span>
                  </a>
                </li>
                <li>
                  <a href="#">September 2018 <span>(6)</span>
                  </a>
                </li>
                <li>
                  <a href="#">August 2018 <span>(8)</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li>
                    <span class="icon icon-map-marker"></span>
                    <span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span>
                  </li>
                  <li>
                    <a href="#">
                      <span class="icon icon-phone"></span>
                      <span class="text">+2 392 3929 210</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="icon icon-envelope"></span>
                      <span class="text">
                        <span class="__cf_email__" data-cfemail="a8c1c6cec7e8d1c7dddaccc7c5c9c1c686cbc7c5">[email&#160;protected]</span>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image:url(images/ximage_1.jpg.pagespeed.ic.qblUUzQElE.jpg)"></a>
                <div class="text">
                  <h3 class="heading">
                    <a href="#">Even the all-powerful Pointing has no control about</a>
                  </h3>
                  <div class="meta">
                    <div>
                      <a href="#">
                        <span class="icon-calendar"></span> June 27, 2019 </a>
                    </div>
                    <div>
                      <a href="#">
                        <span class="icon-person"></span> Admin </a>
                    </div>
                    <div>
                      <a href="#">
                        <span class="icon-chat"></span> 19 </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image:url(images/ximage_2.jpg.pagespeed.ic.__ePxgvLdY.jpg)"></a>
                <div class="text">
                  <h3 class="heading">
                    <a href="#">Even the all-powerful Pointing has no control about</a>
                  </h3>
                  <div class="meta">
                    <div>
                      <a href="#">
                        <span class="icon-calendar"></span> June 27, 2019 </a>
                    </div>
                    <div>
                      <a href="#">
                        <span class="icon-person"></span> Admin </a>
                    </div>
                    <div>
                      <a href="#">
                        <span class="icon-chat"></span> 19 </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li>
                  <a href="#">
                    <span class="ion-ios-arrow-round-forward mr-2"></span>Home </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ion-ios-arrow-round-forward mr-2"></span>About </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ion-ios-arrow-round-forward mr-2"></span>Services </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ion-ios-arrow-round-forward mr-2"></span>Deparments </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ion-ios-arrow-round-forward mr-2"></span>Contact </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate">
                  <a href="#">
                    <span class="icon-twitter"></span>
                  </a>
                </li>
                <li class="ftco-animate">
                  <a href="#">
                    <span class="icon-facebook"></span>
                  </a>
                </li>
                <li class="ftco-animate">
                  <a href="#">
                    <span class="icon-instagram"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p> Copyright &copy; <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
              <script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
            </p>
          </div>
        </div>
      </div>
    <?php

get_footer();

     ?>