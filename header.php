<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=he, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   <link
         href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Lilita+One|Margarine|Oswald|PT+Serif|Roboto+Slab|Sniglet"
         rel="stylesheet">

   <?php wp_head();?>

   <title>DodgyDog</title>
</head>
<body>

      
    <div id="slideout-menu"> 
      <ul>
         
         <li><a href="<?php echo site_url('/home');?>">Home</a></li>
         <li><a href="<?php echo site_url('/news');?>">News</a></li>
         <li><a href="<?php echo site_url('/blog');?>">Blog</a></li>
         <li><a href="<?php echo site_url('/about');?>">About</li>

         <input id="searchbox" type="text" placeholder="Search Here">
         <br>
       
      </ul>

   </div>
   
   <nav>
      <div id="logo-img">
         <a href="#">
         <img src="<?php echo get_template_directory_uri(); ?>/img/it7.jpg" alt="it7"></a>
      </div>
      
      <div id="menu-icon">
         <i class="fas fa-bars"></i>
      </div>

      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

   <!-- <ul>
      <li>
         <a href="<?php echo site_url('/home');?>">Home</a>
      </li>

      <li>
         <a href="<?php echo site_url('news');?>">News</a>
      </li>

      <li>
         <a href="<?php echo site_url('blog');?>">Blog</a>
      </li>

      <li>
         <a href="<?php echo site_url('/about');?>">About</a>
</li>

   </ul> -->
   
    </nav>

   <div id="searchbox">
      <input type="text" placeholder="Search Here">
      <br>
   </div>
  