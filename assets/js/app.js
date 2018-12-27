jQuery(document).ready(function ($) {
    
    let header = $('header');
    
    let backgrounds = [
        'url(wp-content/themes/startupweb/assets/img/slider-1.jpg)',
        'url(wp-content/themes/startupweb/assets/img/slider-2.jpg)',
        'url(wp-content/themes/startupweb/assets/img/slider-3.jpg'];
  let current = 0;
 
    
    function nextBackground() {
    header.css(
     'background',
      backgrounds[current = ++current % backgrounds.length]
   );
  
      setTimeout(nextBackground, 5000);
      header.css('background-size', 'cover');
      
   }
   setTimeout(nextBackground, 5000);
    header.css('background', backgrounds[0]);
    header.css('background-size', 'cover');


    $('.next').click(function () {
        $('.carousel').carousel('next');
        return false;
    });
    $('.prev').click(function () {
        $('.carousel').carousel('prev');
        return false;
    });

});
    

