function Ph_Gallery_Mosaic(id) {
    var _this = this;
    _this.body = jQuery('body');
    _this.container = jQuery('#' + id + '.view-mosaic');
    _this.element = _this.container.find('.grid-item');
    _this.isCentered = _this.container.data("show-center") == "yes";
    //_this.ratingType = _this.content.data('rating-type');
    _this.likeContent = jQuery('.ph-g-wp_gallery_like_cont');
    _this.likeCountContainer = jQuery('.ph-g-wp_like_count');
    _this.loadMoreBtn = _this.container.find('.load_more_button8');
    _this.loadingIcon = _this.container.find('.loading8');
    _this.phGalleryId = _this.container.attr('data-ph-gallery-id');
    _this.contentPerPage = parseInt(_this.container.attr('data-content-per-page'));
    _this.pagesCount = parseInt(_this.container.attr('data-pages-count'));
    _this.defaultBlockWidth = parseInt(_this.container.attr('data-element-width'));
    _this.colomnCount = parseInt(_this.container.attr('data-colomn-count'));


    _this.addEventListeners = function () {
        _this.loadMoreBtn.on('click', _this.loadMoreClick);
        jQuery(window).resize(_this.resizeEvent);
    };
    _this.loadMoreClick = function () {
        var currentPage = _this.container.attr('data-current-page');
        var prevPage = _this.container.attr('data-current-page') - 1;
        var data = {
            action: 'photo_gallery_wp_load_images_mosaic',
            content_per_page: _this.contentPerPage,
            task: 'load_images_mosaic',
            ph_gallery_id: _this.phGalleryId,
            current_page: currentPage,
            view_style: jQuery("input[name='view_style']").val()
        };
        _this.loadingIcon.show();
        _this.loadMoreBtn.hide();
        jQuery.post(adminUrl, data, function (response) {
            if (response) {

                var mos_arr = [];

                jQuery(".mosaicflow__column").each(function (i, val) {
                    mos_arr.push(jQuery(this).html());
                });

                jQuery("#mosaic_images_section_" + prevPage).empty();
                jQuery("#mosaic_images_section_" + prevPage).parent().prepend("<div id='mosaic_images_section_" + currentPage + "'></div>");
                jQuery("#mosaic_images_section_" + prevPage).remove();

                _this.container.find('ph-g-wp-mosaic_' + _this.phGalleryId + ' #ph_mosaic_photos').css('width', '100%');
                // _this.container.find('.grid').empty();
                jQuery.each(mos_arr, function (key, val) {
                    if (val.length) {
                        _this.container.find('#mosaic_images_section_' + currentPage).append(val);
                    }
                });
                _this.container.find('#mosaic_images_section_' + currentPage).hide();
                _this.container.find('#mosaic_images_section_' + currentPage).append(response);
                setTimeout(function () {
                    jQuery('#mosaic_images_section_' + currentPage).mosaicflow();
                    _this.container.find('#mosaic_images_section_' + currentPage).show();
                }, 200);

                _this.container.find('img').on('load', function () {
                    setTimeout(function () {
                        jQuery('.ph-lightbox').lightbox();
                    }, 50);
                    jQuery('.view-fifth ').each(function () {
                        jQuery(this).hoverdir();
                    });

                });
                _this.loadMoreBtn.show();
                _this.loadingIcon.hide();
                _this.container.attr('data-current-page', parseInt(_this.container.attr('data-current-page')) + 1);
                if (_this.container.attr('data-current-page') == _this.pagesCount + 1) {
                    _this.loadMoreBtn.hide();
                }
            }
            else {
                alert('Load More Fail');
            }
        });
    };
    _this.init = function () {
        _this.addEventListeners();
    };
    if (parseInt(_this.pagesCount) == 1) {
        _this.loadMoreBtn.hide();
    }
    _this.init();
}
var galleries = [];
jQuery(document).ready(function () {
    jQuery(".ph-g-wp_gallery_container.view-mosaic").each(function (i) {
        var id = jQuery(this).attr('id');
        galleries[i] = new Ph_Gallery_Mosaic(id);
    });

});

