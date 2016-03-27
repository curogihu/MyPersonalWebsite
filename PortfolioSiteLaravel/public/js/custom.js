//console.log("12345");
/*
$("h3").hover(
  function(){
    console.log("mouse over");
  },
  function(){
    console.log("mouse out");
  }
);
*/

$(function(){
  $('.dropdown').children('a').on('click', function(){
     //console.log("ok");
    //$(this).children('h3').hide();

    event.preventDefault();
    event.stopPropagation();

    var $this = $(this);

    if($this.hasClass('open')){
      $('div[class^=categoryItem]').hide();
      $this.removeClass('open');
      //$('div[class^=categoryItem]').hide();
    }else{
      $('div[class^=categoryItem]').show();
      $this.addClass('open');
    }
  });
});