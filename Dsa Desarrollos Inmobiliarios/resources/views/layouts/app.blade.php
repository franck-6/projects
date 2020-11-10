<!DOCTYPE html>
 
<html lang="en">
 
 <head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121043609-5"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121043609-5');
</script>
 
   @include('layouts.partials.head')
 
 </head>
 
 <body>

@include('layouts.partials.header')
 
@yield('content')
 
@include('layouts.partials.footer')
 
@include('layouts.partials.footer-scripts')

@yield('jsfooter')
 
 </body>
 
</html>

<script type="text/javascript">
      
     $(function(){
          $('#button-menu').click(function(){                           
            if($('#button-menu').hasClass('collapsed')){
              console.log("FRANCO");
              $('#button-menu').css('height', 'auto');              
              $('.icon-bar').fadeOut(0);
              $('.exit-icon').css('color','black');
              $('#button-menu').css('padding-bottom', '0px');
              $('.exit-icon').fadeIn(0);
            }else{
              $('#button-menu').css('padding-bottom', '7px');
              $('#button-menu').css('height', '15px');
              $('.exit-icon').fadeOut(0);
              $('.icon-bar').fadeIn(0);
            }

          });

        
          $('#franco').css('position','fixed');
          $('#franco').css('width','100%');
          $('#franco').css('top','0');
          //$('#franco').css('position','center');
          $('#franco').css('z-index','10');
          $('#franco').css('background','white');
          $('#franco').css('padding-top','2%');
        });

        

     

     
			
   /* position: fixed;
    width: 100%;
    top: 0;
    z-index: 10;
    background: white*/
</script>