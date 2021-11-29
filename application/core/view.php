<?php

class View

{
    function generate($content_view, $template_view, $data = null) {
        include 'application/views/' .$template_view;
    }
}

//class View
//{
  //  function generate($content_view,$data=null, $username = null)
    //{
      //  include 'application/views/template_view.php';
    //}
//}


 