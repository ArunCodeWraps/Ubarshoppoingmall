<header>
  <div class="top1">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xs-12 col-sm-4 wel">Welcome to Uber Shoping Mall</div>
        <div class="col-xs-12 col-sm-8 text-right topmenu"> 
          <ul class="newTopMenus">
            <?php
            if(!empty($_SESSION['user_id'])){?>
              <li><a href="dashboard.php">My Account</a> </li>
            <?php }else{?>
              <li><a href="register.php">Become Member</a> </li>
              <li><a href="login.php">Sign In</a></li>
            <?php }?>            
            <li><a href="#">Faq</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="mid1">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xs-12 col-sm-6"><a href="index.php"><img src="img/logo.png" class="img-responsive"></a></div>
        <div class="col-xs-12 col-sm-6">
          <div class="row">
            <div class="col-xs-10 col-sm-10">
              <div class="search">
                <form method="post" action="http://xanta-tech.com/dev2020/uber_live/sh/">
                  <input type="text" placeholder="Search for Products" name="q3" class="in1">
                  <select name="cat_slug" class="in2">
                    <option value="">All categories</option>
                    <?php
                    $hCSql = $obj->query("select * from $tbl_category where status=1");
                    while($hCResult = $obj->fetchNextObject($hCSql)){?>
                    <option value="<?php echo $hCResult->id; ?>"><?php echo $hCResult->category; ?></option>
                    <?php }?>
                    
                  </select>
                  <span><button name="sdf" type="submit" style="background: none;border: none;"><i class="fa fa-search" aria-hidden="true"></i></button></span>
                </form>
              </div>
            </div>
            <div class="col-xs-2 col-sm-2 text-center cart">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              <div class="number" id="c_itmes">0</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="megamenu">
    <!-- mega menu main  -->
    <nav class="navbar navbar-expand-lg navbar main-menu">
      <a class="navbar-brand" href="#">
        <select class="dropSelect">
          <option>All</option>
          <option>Men</option>
          <option>Women</option>
          <option>Kids</option>
          <option>Home</option>
          <option>Luxury</option>
        </select>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ul-hover">
          <?php $catSql = $obj->query("select * from tbl_category where status=1  order by id asc",-1);
            while($catResult = $obj->fetchNextObject($catSql)){  ?> 
              <li class="nav-item dropdown has-mega-menu" style="position:static;">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="category/<?php echo $catResult->slug ?>" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $catResult->category ?></a>
            <div class="dropdown-menu">
              <div class="px-0">
                <div class="row">
                  <?php $subcatSql = $obj->query("select * from tbl_subcategory where status=1 and cat_id='$catResult->id' order by id asc",-1);
                    while($subCatResult = $obj->fetchNextObject($subcatSql)){  ?> 
                  <div class="col-md-3">
                    <div class="dropdown-items">
                      <h5><a href="category/<?php echo $subCatResult->slug ?>"> <?php echo $subCatResult->subcategory ?></a></h5>

                      <?php $subsubcatSql = $obj->query("select * from tbl_subsubcategory where status=1 and subcat_id='$subCatResult->id' order by id asc",-1);
                    while($subSubCatResult = $obj->fetchNextObject($subsubcatSql)){  ?> 

                        <a class="dropdown-item" href="category/<?php echo $subSubCatResult->slug ?>"><?php echo $subSubCatResult->subsubcategory ?></a>
                    <?php } ?>
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </li>
          <?php } ?>


          <li class="nav-item dropdown has-mega-menu" style="position:static;">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Brands</a>
            <div class="dropdown-menu">
              <div class="px-0">
                <div class="row">
                   
                  <div class="col-md-3">
                    <div class="dropdown-items">
                      <h5>Women Brands</h5>
                      <?php $womenBrandSql = $obj->query("select * from tbl_brand where status=1 and cat_id='3' order by id asc limit 0,10",-1);
                       while($womenBrandResult = $obj->fetchNextObject($womenBrandSql)){  ?> 
                        <a class="dropdown-item" href="#"><?php echo $womenBrandResult->brand ?></a>
                    <?php } ?>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="dropdown-items">
                      <h5>Men Brands</h5>
                      <?php $womenBrandSql = $obj->query("select * from tbl_brand where status=1 and cat_id='4' order by id asc limit 0,10",-1);
                       while($womenBrandResult = $obj->fetchNextObject($womenBrandSql)){  ?> 
                        <a class="dropdown-item" href="#"><?php echo $womenBrandResult->brand ?></a>
                    <?php } ?>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="dropdown-items">
                      <h5>Kids Brands</h5>
                      <?php $womenBrandSql = $obj->query("select * from tbl_brand where status=1 and cat_id='5' order by id asc limit 0,10",-1);
                       while($womenBrandResult = $obj->fetchNextObject($womenBrandSql)){  ?> 
                        <a class="dropdown-item" href="#"><?php echo $womenBrandResult->brand ?></a>
                    <?php } ?>
                    </div>
                  </div>


                  <div class="col-md-3">
                    <div class="dropdown-items">
                      <h5>Home Brands</h5>
                      <?php $womenBrandSql = $obj->query("select * from tbl_brand where status=1 and cat_id='6' order by id asc limit 0,10",-1);
                       while($womenBrandResult = $obj->fetchNextObject($womenBrandSql)){  ?> 
                        <a class="dropdown-item" href="#"><?php echo $womenBrandResult->brand ?></a>
                    <?php } ?>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </li>
        </ul>
        <!-- <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">How it Works </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><img src="img/sale.png"> Sell on Uber</a>
          </li>
        </ul> -->
      </div>
    </nav>
  </div>
</header>
<div class="clearfix"></div>