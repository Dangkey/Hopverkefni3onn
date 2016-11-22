$(document).ready(function(){

/* insert element to click and element to scroll to */
$('#Overwatch').click(function (){
                
           scrollToElement('#Overwatch1');               
    });
    $('#Heroes').click(function (){
                
      scrollToElement('#Heroes1');               
    });
        $('#Home').click(function (){
                
      scrollToElement('#Home1');               
    });

});

var scrollToElement = function(element)
{
$('body').animate({
               scrollTop: ($(element).offset().top)
           }, 1000);
}
