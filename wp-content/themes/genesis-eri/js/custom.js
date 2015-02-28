jQuery(document).ready(function($) {
  $('.scroll-pane').jScrollPane();
  $(function()
  {
   $('.scroll-pane').each(
    function()
    {
     $(this).jScrollPane(
     {
       showArrows: $(this).is('.arrow')
     }
     );
     var api = $(this).data('jsp');
     var throttleTimeout;
     $(window).bind(
      'resize',
      function()
      {
       if (!throttleTimeout) {
        throttleTimeout = setTimeout(
         function()
         {
          api.reinitialise();
          throttleTimeout = null;
        },
        50
        );
      }
    }
    );
   }
   )
 });
});
