<?php include 'include/header.php'; ?>

    <body>
        <div class="button-menu"><i class="fa fa-bars"></i></div>
        <div class="btnClose"><i class="fa fa-times"></i></div>

        <?php include 'include/menu.php'; ?>
  
            <div class="container mt-5">
              <div class="col-lg-12">
                <div>
                <?php
                    require_once 'Models/Connection.php';
                    $id = $_GET['id'];
                    $son = new Connection();
                    $sql = "SELECT * FROM posts WHERE id = '$id' ";
                    $query = mysqli_query($son->conn,$sql);
                    $data = mysqli_fetch_array($query);

                ?>                      
                <?php  {?>          
                  <div class="row">
                    <div style="width: 80%; margin: auto;">
                      <a href="#"><img style="width: 100%; height: 600px" class="card-img-top" src="Public/frontend/img/<?php echo($data['thumbnail']) ?>" alt=""></a>
                      <div>
                        <h4>
                          <a href="index.php?mod=auth&act=home&id=<?php echo $data['id']?>"><?php echo($data['title']) ?></a>
                        </h4>
                        <p style="font-size: 18px"><?php echo ($data['description']); ?></p>
                        <h style="font-size: 20px"><?php echo ($data['content']); ?></h>
                      </div>
                    </div>
                  </div>
                <?php } ?>

                </div>
                <!-- /.row -->

              </div>
              <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->

          </div>
          <!-- /.container -->

           <!--  
            <div class="middle">
                <div class="container text-center">
                  
                </div>
            </div> -->

            <!-- Team -->
            <hr/>
            <h3 class="text-center">Team Member</h3>
            <div class="team-section mt-3">
                <div class="person">
                    <img src="images/p1.png" alt="" class="person-pic">
                    <div class="person-info">
                        <h2>Person Name</h2>
                        <p>Developer</p>
                        <div class="socialmedia">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <img src="images/p2.png" alt="" class="person-pic">
                    <div class="person-info">
                        <h2>Person Name</h2>
                        <p>Developer & Designer</p>
                        <div class="socialmedia">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <img src="images/p3.png" alt="" class="person-pic">
                    <div class="person-info">
                        <h2>Person Name</h2>
                        <p>Game Developer</p>
                        <div class="socialmedia">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <img src="images/p4.png" alt="" class="person-pic">
                    <div class="person-info">
                        <h2>Person Name</h2>
                        <p>Designer</p>
                        <div class="socialmedia">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- bottom --> 
            <div class="bottom">
                <div class="container text-center">
                    <!-- <h2>The buttons below are impossible to resist.</h2>
                    <a href=""><button class="btn btn-default btnClickMe">Click Me!</button></a>
                    <a href=""><button class="btn btn-default btnLookAtMe">Look At Me</button></a> -->
                </div>
            </div><!-- end bottom -->

         

            
            

            <!-- footer -->
            <?php include 'include/footer.php'; ?>
            <!-- end footer -->

            

        </body>

        </html>
