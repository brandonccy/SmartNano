<!-- Header -->
<header id="header" class="header">
  <div class="header-nav navbar-fixed-top navbar-white navbar-transparent navbar-sticky-animated animated-active">
    <div class="header-nav-wrapper">
      <div class="container">
        <nav id="menuzord-right" class="menuzord">
          <a class="menuzord-brand pull-left flip pb-20" href="/">
            <img src="/images/smartnano-logo.png" alt="">
          </a>
          <ul class="menuzord-menu">

            <li<?php if($page=="index"||$page=="home"||$page==""){ ?> class="active"<?php } ?>>
              <a href="/"><i class="fa fa-home fa-fw" aria-hidden="true"></i><?=translate("header_menu_home", $selectLanguage)?></a>
            </li>

            <li<?php if($page=="about-us"){ ?> class="active"<?php } ?>>
              <a href="/about-us"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i><?=translate("header_menu_about", $selectLanguage)?></a>
            </li>

            <li<?php if($page=="category"||$page=="products"){ ?> class="active"<?php } ?>>
              <a href="#"><i class="fa fa-shopping-bag fa-fw" aria-hidden="true"></i><?=translate("header_menu_product", $selectLanguage)?></a>
              <ul class="dropdown">
                <?php
                $result=getTable("db_products_cate", "WHERE cate_stat<>'3' ORDER BY cate_sort ASC");
                foreach ($result as $row) {
                ?>
                <li><a href="/category/<?=$row["cate_slug"]?>"><?=$row["cate_name"]?></a></li>
                <?php } ?>
              </ul>
            </li>

            <li<?php if($page=="contact-us"){ ?> class="active"<?php } ?>>
              <a href="/contact-us"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i><?=translate("header_menu_contact", $selectLanguage)?></a>
            </li>
                
            <?php
            $ref="";
            if($page<>""){
              $ref=$page;
              if($cate<>""){
                $ref=$page."/".$cate;
              }
            }
            ?>
            <?php
            if($selectLanguage=="zh-cn"){ 
              $outputLanguage="en-gb"; 
            }else{
              $outputLanguage="zh-cn"; 
            }
            ?>
            
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>