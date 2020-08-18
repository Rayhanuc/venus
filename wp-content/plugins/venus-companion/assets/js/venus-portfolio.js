;(function($){
    $(window).on('elementor/frontend/init',function(){
        if(window.elementorFrontEnd){
            setTimeout(function(){
                elementorFrontEnd.hooks.addAction('frontend/element_ready/portfolio.default',function(scope,$){
                    var $portfolio = $(scope).find('.portfolio-grid');
                    if ($.fn.imagesLoaded && $portfolio.length > 0) {
                        imagesLoaded($portfolio, function () {
                            $portfolio.isotope({
                                itemSelector: '.portfolio-item',
                                filter: '*'
                            });
                            $(window).trigger("resize");
                        });
                    }
    
                    $(scope).find('.portfolio-filter').on('click', 'a', function (e) {
                        e.preventDefault();
                        $(this).parent().addClass('active').siblings().removeClass('active');
                        var filterValue = $(this).attr('data-filter');
                        $portfolio.isotope({filter: filterValue});
                    });
                });
            },2000);
        }
    });
}(jQuery));