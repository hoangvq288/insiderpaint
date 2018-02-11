jQuery(document).ready(function($) {

  $( '.productdetail__tab--content li' ).on( 'click', function() {
      $(this).parent().find( 'li.active' ).removeClass( 'active' );
      $(this).addClass('active');
      if($(this).text().trim() == "Color Range") {
        $('.productdetail__tab--feature').hide();
        $('.productdetail__tab--color').show();
      } else {
        $('.productdetail__tab--feature').show();
        $('.productdetail__tab--color').hide();
      }
  });
  $('.see-more').on('click', function(){
    
    project_id = $(this).attr('href').replace('#', '');
    $('.product__list.active').removeClass('active');
    $('.project__detail.detail_current').hide();
    $('project__detail.detail_current').removeClass('detail_current');
    
    $('.project__detail.no_'.concat(project_id)).show();
    $('.project__detail.no_'.concat(project_id)).addClass('detail_current')
    console.log($('.bxslider-project'))
    $(this).closest('li').addClass('active');
  });
  
})

