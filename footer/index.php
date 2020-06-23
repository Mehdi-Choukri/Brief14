<?php
/*
Plugin Name: brief 13
Plugin URI: https://simplonline.co/
Description: voici mon premier plugin footer wp
Author: Choukri Mohammed elmehdi
Version: 2.0
Author URI: https://www.facebook.com/Mehdi.Ironside
*/

if(!defined('ABSPATH'))
{
    exit;
}

add_action("admin_menu","addMenu");
function addMenu()
{
 
    add_menu_page("footer","footer",4,"footer","examplefooter",'dashicons-networking');
}
function examplefooter()
{
    include_once('footer.php');
}
function your_function() {
    // echo "<div style='background-color: #001524;text-align: center;
    // font-size: 30px;
    // padding: 20px;'><a>Copyright2020</a><a style='color: rgba(255,255,255,0.72);' onMouseOver=\"this.style.color='#8bc34a'\"
    // onMouseOut=\"this.style.color='rgba(255,255,255,0.72)'\" href='".get_option('footer_link')."'>".get_option('footer_text')."</a></div>";

    echo"<footer id='main-footer' style='
      padding: center;
      background:#001524  ;
      color: white;
      height: 60px;
      display: flex;
      align-items: center;
      justify-content: space-between;

    '>
 
    <div class='footer_icons' style='margin-left: 5%;
    text-align: center;
    display: block;
    width: 100px;
    padding: 4px;'>
      <a href='https://www.instagram.com/mehdishoty/?hl=fr'>
        <i class='fab fa-instagram fa-2x'>IG</i>
      </a>
      <a href='https://www.linkedin.com/in/mohamed-elmehdi-choukri-322327190/'>
        <i class='fab fa-linkedin fa-2x'>LI</i>
      </a>
     
    </div>
    <a href='".get_option('footer_link')."'>
    ".get_option('footer_text')."
      </a>
     
     <div class='footer_text' style='
      
       text-align: right;
       font-size: 17px;
     '>Copyright &copy; 2020</div>
  
  </footer>";
}
add_action( 'wp_footer', 'your_function' );
?>
