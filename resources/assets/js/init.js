(function () {
  "use strict";
  $(document).ready(funuction () {
     //SWITCH PAGES
    switch ($("body").data("page-id")){
      case "home":
        break;
      case "adminEvents" :
        ATAZ.admin.update();
        break;
      default:
        //do nothing
    
    }
  })
}) ();
