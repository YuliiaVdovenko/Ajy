$(document).ready(function () {
    var $grid = $('.portfolio-list').masonry({
        itemSelector: '.portfolio-item'
    });

    $grid.imagesLoaded().progress( function() {
        $grid.masonry('layout');
    });


    $('#filters').on( 'click', 'span', function() {
        var filterValue = $( this ).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });

    $('.go-anchor').click(function () {
        $('html, body').animate({
            scrollTop: $('.home-block-welcome').offset().top-60
        }, 800);
    });
});
