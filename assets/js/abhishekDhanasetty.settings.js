var $gallery =  $('.gallery').isotope({
    // options
    itemSelector: '.photo',
    layoutMode: 'masonry',
    masonry: {
      /*columnWidth: 300,
      gutter: 25,
      fitWidth: true*/
    }
  });

  $gallery.imagesLoaded().progress( function(){
    $gallery.isotope('layout');
  });


  $('.filter-list button').on('click', function(){
      
     if($(this).hasClass('checked')){
       $(this).removeClass('checked');
       $gallery.isotope({filter: '*'});
     } 
    else{
      $('.filter-list button').removeClass('checked');
      var filterValue=$(this).attr('data-filter');
      $gallery.isotope({filter: filterValue});
      $(this).addClass('checked');
    }
  });

  $('.filter-list a').on('click', function(){
    
   if($(this).hasClass('checked')){
     $(this).removeClass('checked');
     $gallery.isotope({filter: '*'});
   } 
  else{
    $('.filter-list a').removeClass('checked');
    var filterValue=$(this).attr('data-filter');
    $gallery.isotope({filter: filterValue});
    $(this).addClass('checked');
  }
});