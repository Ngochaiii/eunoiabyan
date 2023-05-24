window.HaravanAnalytics = window.HaravanAnalytics || {};
window.HaravanAnalytics.meta = window.HaravanAnalytics.meta || {};
window.HaravanAnalytics.meta.currency = 'VND';
var meta = {
    "page": {
        "pageType": "home"
    }
};
for (var attr in meta) {
    window.HaravanAnalytics.meta[attr] = meta[attr];
}
window.HaravanAnalytics.AutoTrack = true;
var ProductReviewsAppUtil = ProductReviewsAppUtil || {};
ProductReviewsAppUtil.store = {
    name: 'EUNOIA'
};
Haravan.doNotTriggerClickOnThumb = false;

function changeImageQuickView(img, selector) {
    var src = $(img).attr("src");
    src = src.replace("_compact", "");

    var $videoEl = $(selector).parent();

    if ($(img).hasClass('video')) {
        $(selector).parent().find('img').hide()
        var codevideo = $(img).parent().data().videocode.split("_")[1];
        var videoHtml = `<iframe class="img-responsive" width="560" height="315" src="https://www.youtube.com/embed/${codevideo}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
        $videoEl.append(videoHtml);
    } else {
        $videoEl.find("iframe").remove();
        $(selector).parent().find('img').show()
        $(selector).attr("src", src);
    }
}

function validate(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode(key);
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) theEvent.preventDefault();
    }
}
var selectCallbackQuickView = function (variant, selector) {
    $('#quick-view-product form').show();
    var productItem = jQuery('.quick-view-product .product-item'),
        addToCart = productItem.find('.add_to_cart_detail'),
        installmentBtn = productItem.find('.btn-installment'),
        productPrice = productItem.find('.price'),
        comparePrice = productItem.find('.old-price'),
        discountLabel = productItem.find('.label_product'),
        form2 = jQuery('.soluong1'),
        status = productItem.find('.soluong'),
        sku = productItem.find('.sku_'),
        totalPrice = productItem.find('.total-price span');

    if (variant && variant.sku) {
        sku.text(variant.sku);
    } else {
        sku.text('Đang cập nhật');
    }
    if (variant && variant.available) {
        var form = jQuery('#' + selector.domIdPrefix).closest('form');
        for (var i = 0, length = variant.options.length; i < length; i++) {
            var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] + '"]');
            if (radioButton.size()) {
                radioButton.get(0).checked = true;
            }
        }

        addToCart.removeClass('disabled').removeAttr('disabled');
        addToCart.html(`THÊM VÀO GIỎ`).removeAttr('disabled');
        if (variant.price / 100 >= +1000000) {
            installmentBtn.removeClass('hidden')
            addToCart.removeClass('is-full')
        }
        status.text('Còn hàng');
        if (variant.price < 1) {
            $("#quick-view-product .price").html('Liên hệ');
            $("#quick-view-product del, #quick-view-product .quantity_wanted_p").hide();
            $("#quick-view-product .prices .old-price").hide();
            discountLabel.hide()
            form2.hide();
        } else {
            productPrice.html(Haravan.formatMoney(variant.price, "{{amount}}₫"));
            if (variant.compare_at_price > variant.price) {
                comparePrice.html(Haravan.formatMoney(variant.compare_at_price, "{{amount}}₫")).show();
                let save = variant.compare_at_price - variant.price;
                let savePerCent = Math.ceil(save / variant.compare_at_price * 100);
                if (savePerCent > 99) {
                    savePerCent = 99
                }
                if (savePerCent < 1) {
                    savePerCent = 1
                }
                discountLabel.html('-' + savePerCent + "%").show()
                productPrice.addClass('on-sale');
            } else {
                comparePrice.hide();
                discountLabel.hide()
                productPrice.removeClass('on-sale');
            }
            $(".quantity_wanted_p").show();
            $(".input_qty_qv_").show();
            form2.show();
        }



        updatePricingQuickView();

        /*begin variant image*/
        if (variant && variant.featured_image) {

            var originalImage = $("#product-featured-image-quickview");
            var newImage = variant.featured_image;
            var element = originalImage[0];
            Haravan.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
                $('#thumblist_quickview img').each(function () {
                    var parentThumbImg = $(this).parent();
                    var productImage = $(this).parent().data("image");
                    if (newImageSizedSrc.includes(productImage)) {
                        $(this).parent().trigger('click');
                        return false;
                    }
                });

            });
            $('#product-featured-image-quickview').attr('src', variant.featured_image.src);
        }
    } else {
        addToCart.addClass('disabled').attr('disabled', 'disabled');
        addToCart.removeClass('hidden').addClass('btn_buy is-full').attr('disabled', 'disabled').html('<div class="disabled">Hết hàng</div>').show();
        installmentBtn.addClass('hidden')
        status.text('Hết hàng');
        $(".quantity_wanted_p").show();
        if (variant) {
            if (variant.price < 1) {
                $("#quick-view-product .price").html('Liên hệ');
                $("#quick-view-product del").hide();
                //$("#quick-view-product .quantity_wanted_p").hide();
                $("#quick-view-product .prices .old-price").hide();
                discountLabel.hide()

                form2.hide();
                comparePrice.hide();
                discountLabel.hide();
                productPrice.removeClass('on-sale');
                addToCart.addClass('disabled').attr('disabled', 'disabled');
                addToCart.removeClass('hidden').addClass('btn_buy is-full').attr('disabled', 'disabled').html('<div class="disabled">Hết hàng</div>').show();
                installmentBtn.addClass('hidden')
            } else {
                productPrice.html(Haravan.formatMoney(variant.price, "{{amount}}₫"));
                if (variant.compare_at_price > variant.price) {
                    comparePrice.html(Haravan.formatMoney(variant.compare_at_price, "{{amount}}₫")).show();
                    productPrice.addClass('on-sale');
                    let save = variant.compare_at_price - variant.price;
                    let savePerCent = Math.ceil(save / variant.compare_at_price * 100);
                    if (savePerCent > 99) {
                        savePerCent = 99
                    }
                    if (savePerCent < 1) {
                        savePerCent = 1
                    }
                    discountLabel.html('-' + savePerCent + "%").show()
                } else {
                    comparePrice.hide();
                    productPrice.removeClass('on-sale');
                    $("#quick-view-product .prices .old-price").html('');
                    discountLabel.hide()

                }

                $(".input_qty_qv_").hide();
                form2.hide();
                addToCart.addClass('disabled').attr('disabled', 'disabled');
                addToCart.removeClass('hidden').addClass('btn_buy is-full').attr('disabled', 'disabled').html('<div class="disabled">Hết hàng</div>').show();
                installmentBtn.addClass('hidden')
            }
        } else {
            $("#quick-view-product .price").html('Liên hệ');
            $("#quick-view-product del").hide();
            $("#quick-view-product .quantity_wanted_p").hide();
            $("#quick-view-product .prices .old-price").hide();
            discountLabel.hide()

            form2.hide();
            comparePrice.hide();
            discountLabel.hide();

            productPrice.removeClass('on-sale');
            addToCart.addClass('disabled').attr('disabled', 'disabled');
            addToCart.removeClass('hidden').addClass('btn_buy is-full').attr('disabled', 'disabled').html('<div class="disabled">Hết hàng</div>').show();
            installmentBtn.addClass('hidden')
        }
    }
    /*begin variant image*/
    if (variant && variant.featured_image) {

        var originalImage = $("#product-featured-image-quickview");
        var newImage = variant.featured_image;
        var element = originalImage[0];
        Haravan.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
            $('#thumblist_quickview img').each(function () {
                var parentThumbImg = $(this).parent();
                var productImage = $(this).parent().data("image");
                if (newImageSizedSrc.includes(productImage)) {
                    $(this).parent().trigger('click');
                    return false;
                }
            });

        });
        $('#product-featured-image-quickview').attr('src', variant.featured_image.src);
    }


    setColorQuickview();
};

if (typeof copyButton === 'undefined' && typeof codeCopy === 'undefined') {
    const copyButton = {
        "copiedText": "Đã chép",
        "copyText": "Sao chép"
    };

    function codeCopy(el) {

        const copyText = copyButton.copyText;
        const copiedText = el.dataset.copiedText;
        const coupon = el.dataset.code;


        const _this = $(el);
        _this.html(`<span>${copiedText}</span>`);
        _this.addClass('disabled');
        setTimeout(function () {
            _this.html(`<span>${copyText}</span>`);
            _this.removeClass('disabled');
        }, 3000)
        navigator.clipboard.writeText(coupon);
    }
}

function setColorQuickview() {
    let colorHandle = $("#quick-view-product .swatch .color input:checked").parent().data().vhandle;

    let newImagesArr = [];
    if (productDetail.images && productDetail.images.length > 1) {
        productDetail.images.map(image => {
            if (image.indexOf(colorHandle) > -1) {
                newImagesArr.push(Haravan.resizeImage(image, 'large'));
            }
        })
    }

    if (newImagesArr.length) {
        let $quicviewSlider = $("#thumblist_quickview");
        $quicviewSlider.slick('unslick');
        if ($(".quickview_slider_clone").length == 0) {
            $quicviewSlider.clone().removeClass().removeAttr('id').insertAfter('.quick-view-product .more-view-wrapper ul').addClass("quickview_slider_clone hidden");
        }

        let htmlSlider = "";
        let boolMainImg = false;
        $(".quickview_slider_clone").find("li").each(function (i, v) {
            let thumbQuickviewSrc = $(v).find("img").attr("src");
            if (newImagesArr.includes(thumbQuickviewSrc)) {
                if (!boolMainImg) {
                    $('#product-featured-image-quickview').attr('src', thumbQuickviewSrc);
                    boolMainImg = true;
                }
                htmlSlider += $(v).wrap('<div/>').parent().html();
            }
        })

        $quicviewSlider.html(htmlSlider);

        $quicviewSlider.slick({
            autoplay: true,
            autoplaySpeed: 6000,
            dots: false,
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4
        }).css("visibility", "visible")
    }
}
initQuickView();
var product = {};
var currentLinkQuickView = '';
var option1 = '';
var option2 = '';

function setButtonNavQuickview() {
    $("#quickview-nav-button a").hide();
    $("#quickview-nav-button a").attr("data-index", "");
    var listProducts = $(currentLinkQuickView).closest(".slide").find("a.quick-view");
    if (listProducts.length > 0) {
        var currentPosition = 0;
        for (var i = 0; i < listProducts.length; i++) {
            if ($(listProducts[i]).data("handle") == $(currentLinkQuickView).data("handle")) {
                currentPosition = i;
                break;
            }
        }
        if (currentPosition < listProducts.length - 1) {
            $("#quickview-nav-button .btn-next-product").show();
            $("#quickview-nav-button .btn-next-product").attr("data-index", currentPosition + 1);
        }
        if (currentPosition > 0) {
            $("#quickview-nav-button .btn-previous-product").show();
            $("#quickview-nav-button .btn-previous-product").attr("data-index", currentPosition - 1);
        }
    }
    $("#quickview-nav-button a").click(function () {
        $("#quickview-nav-button a").hide();
        var indexLink = parseInt($(this).data("index"));
        if (!isNaN(indexLink) && indexLink >= 0) {
            var listProducts = $(currentLinkQuickView).closest(".slide").find("a.quick-view");
            if (listProducts.length > 0 && indexLink < listProducts.length) {
                //$(".quickview-close").trigger("click");
                $(listProducts[indexLink]).trigger("click");
            }
        }
    });
}

function initQuickView() {
    $(document).on("click", "#thumblist_quickview li", function () {
        changeImageQuickView($(this).find("img:first-child"), ".product-featured-image-quickview");
        $('#thumblist_quickview li').removeClass('active');
        $(this).addClass('active');
    });
    $(document).on('click', '.quick-view', function (e) {
        if ($(window).width() > 1025) {
            e.preventDefault();
            const proImage = $(this).parents('.product-thumbnail').find('img:not(.product-frame)')
            const frame = $(this).parents('.product-thumbnail').find('.product-frame').clone()
            const badges = $(this).parents('.item_product_main').find('.product-badge').clone()
            const promoTag = $(this).parents('.item_product_main').find('.product-promo-tag').clone()
            const promotion = $(this).parents('.item_product_main').find('.product-promotion').html();
            const reviewsRating = $(this).parents('.item_product_main').find('.product-rating').html();

            $('#qv-ega-salebox').html(promotion);

            const copyButton = {
                "copiedText": "Đã chép",
                "copyText": "Sao chép"
            };

            function convertCouponItem(content) {
                const regex = /\[(.*?)\]/gi
                content = content.replace(regex, function (str, innerString) {
                    let code = innerString.split('=')[1].replace(/"/g, '').trim();
                    return `<span onClick="codeCopy(this)" class="smb-copy smb-cursor-pointer text-danger" 
									data-code="${code}"
									data-copied-text="${copyButton.copiedText}">${copyButton.copyText}</span>`
                })
                return content
            }

            const saleboxHtml = $("#qv-ega-salebox .product-promotion__heading").siblings().clone().wrap("<div/>").parent().html()
            const newContent = convertCouponItem(saleboxHtml);
            $("#qv-ega-salebox .product-promotion__heading").siblings().replaceWith(newContent);

            var producthandle = $(this).data("handle");
            currentLinkQuickView = $(this);
            Haravan.getProduct(producthandle, function (product) {
                var qvhtml = $("#quickview-modal").html();
                $(".quick-view-product").html(qvhtml);
                var quickview = $(".quick-view-product");
                const tags = product.tags;
                quickview.find('#qv-product-tags').val(JSON.stringify(tags));


                if (product.summary != null && product.summary != "") {
                    var productdes = product.summary;
                }

                var featured_image = product.featured_image && Haravan.resizeImage(product.featured_image, "large");
                if (featured_image == null) {
                    featured_image = '../mixcdn.egany.com/themes/assets/thumb/large/noimage.gif';
                }
                // Reset current link quickview and button navigate in Quickview
                setButtonNavQuickview();
                if (featured_image != null) {
                    quickview.find(".view_full_size img").attr("src", featured_image);
                }
                const installmentBtn = jQuery('.quick-view-product .product-item').find('.btn-installment');
                if (product.price / 100 >= +1000000) {
                    installmentBtn.removeClass('hidden');
                    quickview.find(".add_to_cart_detail").removeClass('is-full')
                } else {
                    installmentBtn.addClass('hidden');
                    quickview.find(".add_to_cart_detail").addClass('is-full')
                }


                if (product.price < 1 && product.variants.length < 2) {
                    quickview.find(".price").html('Liên hệ');
                    quickview.find("del").html('');
                    quickview.find("#quick-view-product form").hide();
                    quickview.find(".prices").html('<span class="price h2">Liên hệ</span>');
                    quickview.find(".add_to_cart_detail span").html('Liên hệ');
                    installmentBtn.addClass('hidden');
                    quickview.find(".add_to_cart_detail").addClass('is-full')
                } else {
                    quickview.find("#quick-view-product form").show();

                    quickview.find(".price").html(Haravan.formatMoney(product.price, "{{amount_no_decimals_with_comma_separator}}₫"));

                }
                quickview.find(".product-item").attr("id", "product-" + product.id);
                quickview.find(".qv-link").attr("href", product.url);
                quickview.find(".variants").attr("id", "product-actions-" + product.id);
                quickview.find(".variants select").attr("id", "product-select-" + product.id);

                quickview.find(".qwp-name").html('<a class="text2line" href="' + product.url + '" title="' + product.title + '">' + product.title + '</a>');
                quickview.find(".reviews_qv .text_revi").html('<a href="' + product.url + '" title="Đánh giá ' + product.title + '"><i class="fa fa-edit"></i>&nbsp;Đánh giá</a>');

                if (product.vendor) {
                    quickview.find(".vend-qv .vendor_").append(product.vendor);
                } else {
                    quickview.find(".vend-qv .vendor_").append("Đang cập nhật");
                }
                if (product.variants.sku) {
                    quickview.find("vend-qv .sku_").append(product.variants.sku);
                } else {
                    quickview.find(".vend-qv .sku_").append("Đang cập nhật");
                }
                if (product.available) {
                    if (product.variants[0].inventory_management == 'haravan') {
                        quickview.find(".vend-qv .soluong").html('Còn hàng');
                    } else {
                        quickview.find(".vend-qv .soluong").html('Còn hàng');
                    }
                } else {
                    quickview.find(".vend-qv .soluong").html('Hết hàng');
                    $('.soluong1').hide();
                }

                quickview.find(".product-description .rte").html(productdes);
                quickview.find(".view-more").attr('href', product.url);

                if (product.compare_at_price_max > product.price) {
                    quickview.find(".old-price").html(Haravan.formatMoney(product.compare_at_price_max, "{{amount_no_decimals_with_comma_separator}}₫")).show();
                    let save = product.variants[0].compare_at_price - product.variants[0].price;
                    let savePerCent = Math.ceil(save / product.variants[0].compare_at_price * 100);
                    if (savePerCent > 99) {
                        savePerCent = 99;
                    }
                    if (savePerCent < 1) {
                        savePerCent = 1
                    }
                    quickview.find('.label_product').html('-' + savePerCent + "%").show()
                    quickview.find(".price").addClass("sale-price")
                } else {
                    quickview.find(".old-price").html("");
                    quickview.find('.label_product').hide()
                    quickview.find(".price").removeClass("sale-price")
                }
                if (!product.available) {
                    $(".quick-view-product form").show();
                    $(".quick-view-product .quantity_wanted_p").show();
                    quickViewVariantsSwatch(product, quickview);
                    if (product.price < 1) {
                        $('#quick-view-product form').hide();
                    } else {
                        $('#quick-view-product form').show();
                    }
                    $(".soluong_qv").hide();
                    $('.soluong1').hide();
                    quickview.find(".add_to_cart_detail").text("Hết hàng").addClass("disabled").attr("disabled", "disabled");
                    if (product.variants.length > 1) {
                        quickview.find(".dec, .inc, .variants label").show();
                        quickview.find("select").hide();
                    } else {
                        quickview.find("select,.dec, .inc, .variants label").hide();
                    }
                } else {
                    quickViewVariantsSwatch(product, quickview);
                    $(".quick-view-product .quantity_wanted_p").show();
                    if (product.variants.length > 1) {
                        $('#quick-view-product form').show();
                    } else {
                        if (product.price < 1) {
                            $('#quick-view-product form').hide();
                        } else {
                            $('#quick-view-product form').show();
                        }
                    }
                }

                quickview.find('.more_info_block .page-product-heading li:first, .more_info_block .tab-content section:first').addClass('active');

                $("#quick-view-product").modal();

                $(".view_scroll_spacer").removeClass("hidden");

                loadQuickViewSlider(product, quickview);
                $('.quick-view-product .product-frame').remove()
                if (frame && frame.length) {
                    $('.quick-view-product .img-product').append(frame)
                }
                let imageScale = proImage.attr('style')
                $('img#product-featured-image-quickview').attr('style', imageScale)
                $('.quickview-info  .product-badge').remove()
                if (badges && badges.length) {
                    $('.quickview-info ').append(badges)
                }
                $('.quickview-info .product-promo-tag').remove()

                if (promoTag && promoTag.length) {
                    $('.quickview-info').append(promoTag)
                }
                $('.reviews_qv').html(reviewsRating || '')

                //$('#thumblist_quickview li').eq(0).trigger('click')
                // Action
                setTimeout(function () {
                    var thumbLargeimg = $('.view_full_size .img-product #product-featured-image-quickview').attr('src');
                    var thumMedium = $('#thumbs_list_quickview .owl-item li').find('img:not(.product-frame)').attr('src');
                    if (thumbLargeimg == thumMedium) {
                        $("#thumbs_list_quickview .owl-item li").first().addClass("active");
                    }

                }, 2000);

                //initQuickviewAddToCart();

                $(".quick-view").fadeIn(500);
                if ($(".quick-view .total-price").length > 0) {
                    $(".quick-view input[name=quantity]").on("change", updatePricingQuickView)
                }
                updatePricingQuickView();
                // Setup listeners to add/subtract from the input

                $(".js-qty__adjust").on("click", function () {
                    var el = $(this),
                        id = el.data("id"),
                        qtySelector = el.siblings(".js-qty__num"),
                        qty = parseInt(qtySelector.val().replace(/\D/g, ''));

                    var qty = validateQty(qty);

                    // Add or subtract from the current quantity
                    if (el.hasClass("js-qty__adjust--plus")) {
                        qty = qty + 1;
                    } else {
                        qty = qty - 1;
                        if (qty <= 1) qty = 1;
                    }

                    // Update the input's number
                    let variantId = $(`#product-select-${product.id} `).val()
                    let validQty = validateQty(product, variantId, qty)
                    validQty ? $('#qtym').val(validQty) : qtySelector.val(qty);
                    updatePricingQuickView();
                });
                $(".js-qty__num").on("change", function () {
                    updatePricingQuickView();
                });

                function onQtyChange() {
                    let qty = parseInt($('#quantity-detail').val())
                    let variantId = parseInt(quickview.find('[name="id"]').val())
                    let validQty = validateQty(product, variantId, qty)
                    validQty ? $('#quantity-detail').val(validQty) : qty
                }

                quickview.find('.btn_num').click(onQtyChange)
                $('#quantity-detail').change(onQtyChange)
            });
            var numInput = document.querySelector('.quantity_wanted_p input');
            numInput.addEventListener('input', function () {
                // Let's match only digits.
                var num = this.value.match(/^\d+$/);
                if (num === null) {
                    // If we have no match, value will be empty.
                    this.value = "";
                }
                if (num == 0) {
                    // If we have no match, value will be empty.
                    this.value = 1;
                }
            }, false)

            return false;
        } else {
            window.location.href = $(e.currentTarget).data('href')
        }
    });
}

function loadQuickViewSlider(n, r) {
    productImage();
    var loadingImgQuickView = $('.loading-imgquickview');
    var s = Haravan.resizeImage(n.featured_image, "large");
    var video_tags = n.tags.filter(function (v, i) {
        return v.indexOf("video_") > -1
    });
    var video_code = video_tags[0];
    r.find(".quickview-featured-image").append('<a href="' + n.url + '"><img src="' + s + '" title="' + n.title + '"/><div style="height: 100%; width: 100%; top:0; left:0 z-index: 2000; position: absolute; display: none; background: url(' + window.loading_url + ') 50% 50% no-repeat;"></div></a>');
    if (n.images.length > 1 || video_code) {
        $('.thumbs_quickview').addClass('thumbs_list_quickview');
        var o = r.find(".more-view-wrapper ul");

        var videoThumb = false
        for (i in n.images) {
            var u = Haravan.resizeImage(n.images[i], "large");
            var a = Haravan.resizeImage(n.images[i], "large");
            var f = '<li><a href="javascript:void(0)" data-imageid="' + n.id + '"" data-zoom-image="' + u + '" title="title"><img src="' + u + '" alt="Office World" /></a></li>';
            if (u.indexOf("video") > -1) {
                videoThumb = true

                var icon_play = "../theme.hstatic.net/200000685745/1001041408/14/icon-button-play6704.png?v=44";
                var f = '<li><a href="javascript:void(0)"' + 'data-videocode="' + video_code + '" data-imageid="' + n.id + '"" data-zoom-image="' + u + '" title="title"><img class="video" src="' + u + '" alt="Office World" /><img class="icon-button-play" src="' + icon_play + '" alt="video-play-button" /></a></li>';
            } else {
                var f = '<li><a href="javascript:void(0)" data-imageid="' + n.id + '"" data-zoom-image="' + u + '" title="title"><img src="' + u + '" alt="Office World" /></a></li>';
            }
            if (u.indexOf("color-") == -1) {
                o.append(f)
            }
        }

        if (!videoThumb && video_code) {
            let code = video_code.split('_')[1]
            var u = `https://img.youtube.com/vi/${code}/mqdefault.jpg`

            var icon_play = "../theme.hstatic.net/200000685745/1001041408/14/icon-button-play6704.png?v=44";
            var f = '<li><a href="javascript:void(0)"' + 'data-videocode="' + video_code + '" data-imageid="' + n.id + '"" data-zoom-image="' + u + '" title="title"><img class="video" src="' + u + '" alt="Office World" /><img class="icon-button-play" src="' + icon_play + '" alt="video-play-button" /></a></li>';
            o.prepend(f)
        }

        o.find("a").click(function () {
            var t = r.find("#product-featured-image-quickview");
            if (t.attr("src") != $(this).attr("data-image")) {
                t.attr("src", $(this).attr("data-image"));
                loadingImgQuickView.show();
                t.load(function (t) {
                    loadingImgQuickView.hide();
                    $(this).unbind("load");
                    loadingImgQuickView.hide()
                })
            }
        });
        o.slick({
            autoplay: true,
            autoplaySpeed: 6000,
            dots: false,
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4
        }).css("visibility", "visible")
    } else {
        $('.thumbs_quickview').removeClass('thumbs_list_quickview');
        r.find(".quickview-more-views").remove();
        r.find(".quickview-more-view-wrapper-jcarousel").remove()
    }
}

function quickViewVariantsSwatch(t, quickview) {
    var v = '<input type="hidden" name="id" value="' + t.id + '">';
    if (t.variants.length > 1) {
        quickview.find("form.variants").append(v);
        for (var r = 0; r < t.variants.length; r++) {
            var i = t.variants[r];
            var s = '<option value="' + i.id + '">' + i.title + "</option>";
            quickview.find("form.variants > select").append(s)
        }

        var ps = "product-select-" + t.id;
        new Haravan.OptionSelectors(ps, {
            product: t,
            onVariantSelected: selectCallbackQuickView
        });

        if (t.options.length == 1) {
            quickview.find(".selector-wrapper:eq(0)").hide().prepend("<label>" + t.options[0].name + "</label>")
        }

        var options = "";
        for (var i = 0; i < t.options.length; i++) {
            options += '<div class="swatch clearfix" data-option-index="' + i + '">';
            options += '<div class="header">' + t.options[i].name + ': </div>';
            var is_color = false;
            if (/Color|Colour|Màu/i.test(t.options[i].name)) {
                is_color = true;
            }
            var optionValues = new Array();
            for (var j = 0; j < t.variants.length; j++) {
                var variant = t.variants[j];
                var value = variant.options[i];
                var valueHandle = awe_convertVietnamese(value);

                var forText = 'swatch-' + i + '-' + valueHandle;
                if (optionValues.indexOf(value) < 0) {
                    //not yet inserted
                    options += '<div class="position-relative">'
                    if (variant.featured_image != null) {
                        options += '<div data-image="' + variant.featured_image.src + '" data-value="' + value + '" class="swatch-element ' + (is_color ? "color " : " ") + valueHandle + (variant.available ? ' available ' : ' soldout ') + '">';
                    } else {
                        options += '<div ' + `data-vhandle="${valueHandle}"` + '  data-value="' + value + '" class="swatch-element ' + (is_color ? "color " : " ") + valueHandle + (variant.available ? ' available ' : ' soldout ') + '">';
                    }

                    options += '<input id="' + forText + '" type="radio" name="option-' + i + '" value="' + value + '" ' + (j == 0 ? ' checked ' : '') + (variant.available ? '' : '') + ' />';


                    if (is_color) {
                        let useVImg = true;
                        let vImgPrefix = `color-${valueHandle}`;
                        let vImgSrc = t.images.find(el => el.indexOf(vImgPrefix) > -1);
                        if (variant.featured_image != null) {
                            vImgSrc = variant.featured_image.src;
                            options += '<label for="${forText}" class="${valueHandle}" style="background-image: url(' + vImgSrc + ');background-size: cover;"></label><span></span>'
                        } else {
                            options += `<label for="${forText}" class="${valueHandle} image-type"></label><span></span>`
                        }

                    } else {
                        options += '<label for="' + forText + '">' + value + '</label>';
                    }
                    options += '</div>';
                    if (is_color) {
                        options += '<div class="tooltip">' + value + '</div>';
                    }
                    options += '</div>';
                    if (variant.available) {
                        //$('#quick-view-product .swatch[data-option-index="' + i + '"] .' + valueHandle).removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                    }
                    optionValues.push(value);
                }
            }
            options += '</div>';
        }


        quickview.find('form.variants > select').after(options);
        var chon = [];
        var qmoney = [];
        var qimage = [];
        var qid = [];
        quickview.find('.swatch :radio').change(function () {
            var optionIndex = $(this).closest('.swatch').attr('data-option-index');
            var optionValue = $(this).val();
            $(this)
                .closest('form')
                .find('.single-option-selector')
                .eq(optionIndex)
                .val(optionValue)
                .trigger('change');

            var variant_id = $('.quickview-product select[name=id]').val();

            var check = false;
            for (var i = 0; i < qid.length; i++) {
                if (qid[i] == variant_id) {
                    var quantity = parseInt($('.quickview-product input[name=quantity]').val());
                    var totalPrice = qmoney[i] * quantity;
                    var gia = Haravan.formatMoney(qmoney[i], window.money_format);
                    var totalPriceText = Haravan.formatMoney(totalPrice, window.money_format);

                    var totalPriceHtml = $('.quickview-product .price').html();


                    $('.quickview-product .total-price span').html(totalPriceText);
                    $('.quickview-product .price').html(gia);
                    currency();

                    if (qimage[i]) {
                        $('.quickview-product .featured-image img').attr('src', qimage[i]);
                    }
                }
            }
            for (var i = 0; i < chon.length; i++) {
                if (chon[i] == variant_id) {
                    var check = true;
                } else {}
            }
            if (check == true) {
                $('.quickview-product .btn-addToCart').attr('disabled', 'disabled');
                $(".quickview-product .btn-addToCart").removeAttr("disabled");
            }

        });

        quickview.find("form.variants .selector-wrapper label").each(function (n, r) {
            $(this).html(t.options[n].name)
        })
    } else {
        quickview.find("form.variants > select").remove();
        var q = '<input type="hidden" name="id" value="' + t.variants[0].id + '">';
        quickview.find("form.variants").append(q);
    }
}

function productImage() {
    $('#thumblist').slick({
        autoplay: true,
        autoplaySpeed: 6000,
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3
    });

    if (!!$.prototype.fancybox) {
        $('li:visible .fancybox, .fancybox.shown').fancybox({
            'hideOnContentClick': true,
            'openEffect': 'elastic',
            'closeEffect': 'elastic'
        });
    }
}
/* Quick View ADD TO CART */

function updatePricingQuickView() {
    //Currency.convertAll(window.shop_currency, $("#currencies a.selected").data("currency"), "span.money", "money_format")
}

function validate(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode(key);
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) theEvent.preventDefault();
    }
}

$(document).on('click', '.quickview-close, #quick-view-product .quickview-overlay, .fancybox-overlay', function (e) {
    $("#quick-view-product").fadeOut(0);
    $("#quick-view-product iframe").each(function () {
        let currSrc = $(this).attr('src')
        $(this).attr('src', currSrc)
    })
    awe_hidePopup();
    $('#quick-view-product').modal('hide');
});
$(document).on('click', '.fix_add_to_cart', function (e) {
    e.preventDefault();
    $('#quick-view-product').modal('hide');
    var $this = $(this);
    var form = $this.parents('form');

    var variantId = form.find("[name=id]").val();
    var qtt = form.find("[name=quantity]").val();

    $.ajax({
        type: 'POST',
        url: '/cart/add.js',
        async: false,
        data: `id=${form.find('[name="id"]').eq(0).val()}&quantity=${form.find('input[name="quantity"]').val()}`,
        dataType: 'json',
        error: addToCartFail,
        beforeSend: function () {},
        success: addToCartSuccess,
        cache: false
    });
});

var GLOBAL = {
    common: {
        init: function () {
            $(document).on('click', '.add_to_cart', addToCart)
            $(document).on('click', '.buynow', buynow)
        }
    },
    templateIndex: {
        init: function () {}
    },
    templateProduct: {
        init: function () {}
    },
    templateCart: {
        init: function () {}
    },
    money_format: "₫"
}
var UTIL = {
    fire: function (func, funcname, args) {
        var namespace = GLOBAL;
        funcname = (funcname === undefined) ? 'init' : funcname;
        if (func !== '' && namespace[func] && typeof namespace[func][funcname] == 'function') {
            namespace[func][funcname](args);
        }
    },
    loadEvents: function () {
        var bodyId = document.body.id;
        UTIL.fire('common');
        $.each(document.body.className.split(/\s+/), function (i, classnm) {
            UTIL.fire(classnm);
            UTIL.fire(classnm, bodyId);
        });
    }
};
$(document).ready(UTIL.loadEvents);
Number.prototype.formatMoney = function (c, d, t) {
    var n = this,
        c = isNaN(c = Math.abs(c)) ? 2 : c,
        d = d == undefined ? "." : d,
        t = t == undefined ? "." : t,
        s = n < 0 ? "-" : "",
        i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
        j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};

function addToCart(e) {
    if (typeof e !== 'undefined') e.preventDefault();
    var $this = $(this);
    var form = $this.parents('form');

    var variantId = form.find("[name=id]").val();
    var qtt = form.find("[name=quantity]").val();

    var boolCombo = false;
    var boolBuyXgetY = false;
    if ($("#add-to-cart-form").length > 0) {
        if ($("#add-to-cart-form").find(".add_to_cart").hasClass("product-combo")) {
            boolCombo = true;
        }
        if ($("#add-to-cart-form").find(".add_to_cart").hasClass("product-buyxgety")) {
            boolBuyXgetY = true;
        }
    }

    if (boolCombo) {
        $('#popupComboModal').modal();
    } else if (boolBuyXgetY) {
        buyXgetY.addCartBuyXGetY_detail(true, variantId, qtt, (jqXHR, textStatus, errorThrown) => {
            addToCartSuccess(jqXHR, textStatus, errorThrown)
        })
    } else {
        $.ajax({
            type: 'POST',
            url: '/cart/add.js',
            async: false,
            data: form.serialize(),
            dataType: 'json',
            error: addToCartFail,
            beforeSend: function () {},
            success: addToCartSuccess,
            cache: false
        });
    }
}

function buynow(e) {
    if (typeof e !== 'undefined') e.preventDefault();
    var $this = $(this);
    var form = $this.parents('form');
    const callback = (cart) => {
        location.href = 'cart.html';
    }

    $.ajax({
        type: 'POST',
        url: '/cart/add.js',
        async: false,
        data: form.serialize(),
        dataType: 'json',
        error: addToCartFail,
        beforeSend: function () {},
        success: (jqXHR, textStatus, errorThrown) => {
            addToCartSuccess(jqXHR, textStatus, errorThrown, callback)
        },
        cache: false
    });
}

function qty() {
    var dqty = $('#qtym').val();
    if (dqty == undefined) {
        return 1;
    }
    return dqty;
}

function checkCartLimit(e, totalPrice) {
    e.preventDefault();

    if ((totalPrice) < Number('150000000')) {
        swal({
            title: `Thông báo`,
            text: `Đơn hàng của bạn chưa đạt giá trị tối thiểu 1.500.000đ. 
Vui lòng chọn mua thêm sản phẩm`,
            type: "warning",
            className: 'cart-limit-modal',
            button: 'Xác nhận'
        })
        return;
    } else {
        location.href = 'cart.html';
    }

}

function addToCartSuccess(jqXHR, textStatus, errorThrown, callback) {
    $.ajax({
        type: 'GET',
        url: '/cart.js',
        async: false,
        cache: false,
        dataType: 'json',
        success: function (cart) {
            awe.hidePopup('.loading');
            var url_product = jqXHR['url'];
            var class_id = jqXHR['product_id'];
            var name = jqXHR['name'];
            var textDisplay = ('<i style="margin-right:5px; color:red; font-size:13px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm vào giỏ hàng');
            var id = jqXHR['variant_id'];
            var dataList = $(".item-name a").map(function () {
                var plus = $(this).text();
                return plus;
            }).get();
            $('.title-popup-cart .cart-popup-name').html('<a href="' + url_product + '" title="' + name + '">' + name + '</a> ');
            var nameid = dataList,
                found = $.inArray(name, nameid);
            var textfind = found;

            var src = '';
            if (!jqXHR['image'] || (Haravan.resizeImage(jqXHR['image'], 'small') == null || Haravan.resizeImage(jqXHR['image'], 'small') == "null" || Haravan.resizeImage(jqXHR['image'], 'small')) == '') {
                src = "../mixcdn.egany.com/themes/assets/thumb/large/noimage.gif"
            } else {
                src = Haravan.resizeImage(jqXHR['image'], 'small')
            }
            $(".item-info > p:contains(" + id + ")").html('<span class="add_sus" style="color:#898989;"><i style="margin-right:5px; color:#3cb878; font-size:14px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm</span>');

            var va_title = jqXHR['variant_options'].filter(opt => opt != 'Default Title').join(', ');
            var windowW = $(window).width();
            $('#popup-cart').addClass('opencart');
            $('body').addClass('opacitycart');
            $('#popup-cart').addClass('opencart');
            $('body').addClass('opacitycart');
            $('#popupCartModal').html('');
            const limit = Number('150000000')
            const cart_action = cart.total_price >= limit ? `
            <a href="/checkout" class="btn btn-main btn-full">Thanh toán</a>
            <a  href="/cart" class="btn btn-main checkout_button btn-full">Xem giỏ hàng</a>
            ` : `
            <button type="button" class="btn btn-main" data-dismiss="modal" data-backdrop="false"
                    aria-label="Close" >Mua thêm</button>
            <a  href="/cart" class="btn btn-main  checkout_button btn-full">Xem giỏ hàng</a>
            `
            let limit_message = `Đơn hàng của bạn chưa đạt giá trị tối thiểu 1.500.000đ. 
Vui lòng chọn mua thêm sản phẩm`
            limit_message = limit_message ? `<span class="mr-2"><i class="fa fa-info-circle" aria-hidden="true"></i></span> ${limit_message}` : ''
            var $popupMobile = `<div class="modal-dialog align-vertical">
<div class="modal-content "><button type="button" class="close" data-dismiss="modal" data-backdrop="false"
    aria-label="Close" style="z-index: 9;"><span aria-hidden="true">×</span></button>
  <div class="row row-noGutter">
    <div class="modal-left col-sm-12 col-lg-12 col-md-12">
      <h3 class="modal-title"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.00006 15.3803C12.0761 15.3803 15.3804 12.076 15.3804 7.99995C15.3804 3.92391 12.0761 0.619629 8.00006 0.619629C3.92403 0.619629 0.619751 3.92391 0.619751 7.99995C0.619751 12.076 3.92403 15.3803 8.00006 15.3803Z" fill="#2EB346"/>
        <path d="M8 16C3.58916 16 0 12.4115 0 8C0 3.58916 3.58916 0 8 0C12.4115 0 16 3.58916 16 8C16 12.4115 12.4115 16 8 16ZM8 1.23934C4.27203 1.23934 1.23934 4.27203 1.23934 8C1.23934 11.728 4.27203 14.7607 8 14.7607C11.728 14.7607 14.7607 11.7273 14.7607 8C14.7607 4.27203 11.728 1.23934 8 1.23934Z" fill="#2EB346"/>
        <path d="M7.03336 10.9434C6.8673 10.9434 6.70865 10.8771 6.59152 10.7582L4.30493 8.43438C4.06511 8.19023 4.06821 7.7986 4.31236 7.55816C4.55652 7.31898 4.94877 7.32145 5.18858 7.5656L7.0154 9.42213L10.7948 5.25979C11.0259 5.00635 11.4176 4.98838 11.6698 5.21766C11.9232 5.44757 11.9418 5.8392 11.7119 6.09326L7.49193 10.7408C7.3773 10.8672 7.21618 10.9403 7.04577 10.944C7.04143 10.9434 7.03771 10.9434 7.03336 10.9434Z" fill="white"/>
        </svg>
        <span>Thêm vào giỏ hàng thành công</span></h3>
      <div class="modal-body">
        <div class="media">
          <div class="media-left thumb_img">
            <div class="thumb-1x1"><img loading="lazy"
                src="${src}"
                alt="${jqXHR['title']}"></div>
          </div>
          <div class="media-body body_content">
            <div class="product-title">${jqXHR['title']}</div>
            <div class="variant_title font-weight-light"><span>${va_title}</span></div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-right margin-top-10 col-sm-12 col-lg-12 col-md-12">
      <div class="title right_title d-flex justify-content-between" ><a href="/cart"> Giỏ hàng hiện có </a>
    <div class="text-right">
        <span class="price">${Haravan.formatMoney(cart.total_price, '')}</span>
        <div class="count font-weight-light">
            (<span
        class="cart-popup-count">4</span>) sản phẩm 
        </div>
    </div>
        
  
      </div>
        
        ${cart.total_price < limit ? `  <div class="cart-message">${limit_message}</div>`:'' }
          
          <div class="cart-action">
                        ${cart_action}

          </div>
    </div>
  </div>
</div>
</div>`;
            $('#popupCartModal').html($popupMobile);

            if (typeof callback == 'function' && cart.total_price >= limit) {
                return callback(cart)
            }
            $('#popupCartModal').modal();
            Haravan.updateCartFromForm(cart, '.top-cart-content .mini-products-list');
            Haravan.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');

        }
    });
}

function addToCartFail(jqXHR, textStatus, errorThrown) {
    var response = $.parseJSON(jqXHR.responseText);
    var $info = '<div class="error">' + response.description + '</div>';
}

function getDelivery() {
    if (!$('.ega-delivery').length && window.egaDeliveryValid) {
        var head = document.getElementsByTagName('head').item(0);
        var script = document.createElement('script');
        script.setAttribute('src', '../theme.hstatic.net/200000685745/1001041408/14/delivery-addon6704.js?v=44');
        head.appendChild(script);
    }
}
$(document).on('click', ".remove-item-cart", function () {
    var variantId = $(this).attr('data-id');
    removeItemCart(variantId);
});
$(document).on('click', ".items-count", function () {
    $(this).parent().children('.items-count').prop('disabled', true);
    var thisBtn = $(this);
    var variantId = $(this).parent().find('.variantID').val();
    var qty = $(this).parent().children('.number-sidebar').val();
    updateQuantity(qty, variantId);
});
$(document).on('change', ".number-sidebar", function () {
    var variantId = $(this).parent().children('.variantID').val();
    var qty = $(this).val();
    updateQuantity(qty, variantId);
});

function comboUpdateCart(ele) {
    let listCart = $(ele).parents(".content-product-list").find('[name^="updates"]');

    var tmp = "";
    for (var i = 0; i < listCart.length; i++) {
        var qty = parseInt(listCart[i].value);
        if (i > 0) tmp += "&";
        tmp += "updates[]=" + qty;
    }
    tmp += "&note=" + $('#note').val();
    $.post('/cart', tmp).always(function () {
        setTimeout(function () {
            location.reload();
        }, 500);
    });
}

function updateQuantity(qty, variantId) {
    var variantIdUpdate = variantId;
    $.ajax({
        type: "POST",
        url: "/cart/change.js",
        data: {
            "quantity": qty,
            "id": variantId
        },
        dataType: "json",
        success: function (cart, variantId) {
            Haravan.onCartUpdateClick(cart, variantIdUpdate);
            cart_min();
        },
        error: function (qty, variantId) {
            Haravan.onError(qty, variantId)
        }
    })
}

function removeItemCart(variantId) {
    var variantIdRemove = variantId;
    var changeData = {
        "quantity": 0,
        "id": variantId
    }

    var line = $('.productid-' + variantIdRemove).eq(0).index() + 1;
    changeData = {
        "quantity": 0,
        "line": line
    }

    $.ajax({
        type: "POST",
        url: "/cart/change.js",
        data: changeData,
        dataType: "json",
        success: function (cart, variantId) {
            Haravan.onCartRemoveClick(cart, variantIdRemove);
            $('.productid-' + variantIdRemove).remove();
            if ($('.tbody-popup>div').length == '0') {
                $('#popup-cart').removeClass('opencart');
                $('body').removeClass('opacitycart');
            }
            if ($('.list-item-cart>li').length == '0') {
                $('.mini-products-list').html('<div class="no-item"><p>Không có sản phẩm nào.</p></div>');
            }
            if ($('.cart-mobile .item-product').length == '0') {
                $('.page_cart').empty();
                $('.header-cart-content').empty();
                $('.cart-mobile .header-cart').hide()
                $('.title_cart_pc').html('<p class="hidden-xs-down">Không có sản phẩm nào. Quay lại <a href="/" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>');
                $('.cart-empty').show()
                $('.cart-sticky-cta').remove()
            }
            cart_min()
        },
        error: function (variantId, r) {
            Haravan.onError(variantId, r)
        }
    })
}

function render(props) {
    return function (tok, i) {
        return (i % 2) ? props[tok] : tok;
    };
}
Haravan.updateCartFromForm = function (cart, cart_summary_id, cart_count_id) {
    if ((typeof cart_summary_id) === 'string') {
        var cart_summary = jQuery(cart_summary_id);
        if (cart_summary.length) {
            // Start from scratch.
            cart_summary.empty();
            // Pull it all out.        
            jQuery.each(cart, function (key, value) {
                if (key === 'items') {
                    var table = jQuery(cart_summary_id);
                    if (value.length) {
                        jQuery('<ul class="list-item-cart"></ul>').appendTo(table);
                        jQuery.each(value, function (i, item) {
                            var buttonQty = "";
                            if (item.quantity == '1') {
                                buttonQty = 'disabled';
                            } else {
                                buttonQty = '';
                            }
                            var link_img0 = "";
                            if (item.image != null) {
                                link_img0 = Haravan.resizeImage(item.image, 'compact');
                            }
                            if (link_img0 == "null" || link_img0 == '' || link_img0 == null) {
                                link_img0 = "../mixcdn.egany.com/themes/assets/thumb/large/noimage.gif";
                            }
                            if (item.variant_title == 'Default Title') {
                                var ItemDropCart = [{
                                    url: item.url,
                                    image_url: link_img0,
                                    price: Haravan.formatMoney(item.price, '{{amount}}₫'),
                                    title: item.title,
                                    buttonQty: buttonQty,
                                    quanty: item.quantity,
                                    id_item: item.variant_id,
                                    variant_title: ''
                                }]
                            } else {
                                var ItemDropCart = [{
                                    url: item.url,
                                    image_url: link_img0,
                                    price: Haravan.formatMoney(item.price, '{{amount}}₫'),
                                    title: item.title,
                                    buttonQty: buttonQty,
                                    quanty: item.quantity,
                                    id_item: item.variant_id,
                                    pd_id: item.product_id,
                                    variant_title: item.variant_title,
                                }];
                            }
                            $(function () {
                                var TemplateItemDropCart = $('script[data-template="ItemDropCart"]').text().split(/\$\{(.+?)\}/g);
                                $('.list-item-cart').append(ItemDropCart.map(function (item) {
                                    return TemplateItemDropCart.map(render(item)).join('');
                                }));
                            });
                        });
                        jQuery('<div class="pd"><div class="top-subtotal">Tổng tiền tạm tính: <span class="price price_big">' + Haravan.formatMoney(cart.total_price, "{{amount}}₫") + '</span></div></div>').appendTo(table);
                        jQuery('<div class="pd right_ct"><a href="/cart" class="btn btn-white"><span>Tiến hành thanh toán</span></a></div>').appendTo(table);
                    } else {
                        jQuery('<div class="no-item"><p>Không có sản phẩm nào.</p></div>').appendTo(table);

                    }
                }
            });
        }
    }
    updateCartDesc(cart);
    var numInput = document.querySelector('#cart-sidebar input.input-text');
    if (numInput != null) {
        // Listen for input event on numInput.
        numInput.addEventListener('input', function () {
            // Let's match only digits.
            var num = this.value.match(/^\d+$/);
            if (num == 0) {
                // If we have no match, value will be empty.
                this.value = 1;
            }
            if (num === null) {
                // If we have no match, value will be empty.
                this.value = "";
            }
        }, false)
    }
}

Haravan.updateCartPageForm = function (cart, cart_summary_id, cart_count_id) {
    if ((typeof cart_summary_id) === 'string') {
        var cart_summary = jQuery(cart_summary_id);
        if (cart_summary.length) {
            // Start from scratch.
            cart_summary.empty();
            // Pull it all out.        
            jQuery.each(cart, function (key, value) {
                if (key === 'items') {
                    var table = jQuery(cart_summary_id);
                    if (value.length) {

                        var HeaderCartPc = $('script[data-template="HeaderCartPc"]').text().split(/\$\{(.+?)\}/g);
                        var pageCartCheckout = $('script[data-template="pageCartCheckout"]').text().split(/\$\{(.+?)\}/g);

                        $(table).append((function () {
                            return HeaderCartPc.map(render()).join('');
                        }));

                        jQuery.each(value, function (i, item) {
                            var buttonQty = "";
                            if (item.quantity == '1') {
                                buttonQty = 'disabled';
                            } else {
                                buttonQty = '';
                            }
                            var link_img1 = Haravan.resizeImage(item.image, 'compact');
                            if (link_img1 == "null" || link_img1 == '' || link_img1 == null) {
                                link_img1 = "../mixcdn.egany.com/themes/assets/thumb/large/noimage.gif";
                            }


                            if (item.variant_title == 'Default Title') {
                                var ItemCartPage = [{
                                    url: item.url,
                                    image_url: link_img1,
                                    price: Haravan.formatMoney(item.price, '{{amount}}₫'),
                                    title: item.title,
                                    buttonQty: buttonQty,
                                    quanty: item.quantity,
                                    variant_title: item.variant_title,
                                    price_quanty: Haravan.formatMoney(item.price * item.quantity, "{{amount}}₫"),
                                    id_item: item.variant_id,
                                    variant_title: ''
                                }]
                            } else {
                                var ItemCartPage = [{
                                    url: item.url,
                                    image_url: link_img1,
                                    price: Haravan.formatMoney(item.price, '{{amount}}₫'),
                                    title: item.title,
                                    buttonQty: buttonQty,
                                    quanty: item.quantity,
                                    variant_title: item.variant_title,
                                    price_quanty: Haravan.formatMoney(item.price * item.quantity, "{{amount}}₫"),
                                    id_item: item.variant_id
                                }]
                            }

                            $(function () {
                                var pageCartItem = $('script[data-template="pageCartItem"]').text().split(/\$\{(.+?)\}/g);
                                $(table.find('.cart-tbody')).append(ItemCartPage.map(function (item) {
                                    return pageCartItem.map(render(item)).join('');

                                }));
                            });

                        });

                        var PriceTotalCheckout = [{
                            price_total: Haravan.formatMoney(cart.total_price, "{{amount}}₫")
                        }];
                        $(table.children('.cart')).append(PriceTotalCheckout.map(function (item) {
                            return pageCartCheckout.map(render(item)).join('');
                        }));
                    } else {
                        jQuery('<p class="hidden-xs-down ">Không có sản phẩm nào. Quay lại <a href="/collections/all" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>').appendTo(table);
                        jQuery('.cart_desktop_page').css('min-height', 'auto');
                    }
                }
            });
        }
    }
    updateCartDesc(cart);
    jQuery('#wait').hide();

}
Haravan.updateCartPopupForm = function (cart, cart_summary_id, cart_count_id) {

    if ((typeof cart_summary_id) === 'string') {
        var cart_summary = jQuery(cart_summary_id);
        if (cart_summary.length) {
            // Start from scratch.
            cart_summary.empty();
            // Pull it all out.        
            jQuery.each(cart, function (key, value) {
                if (key === 'items') {
                    var table = jQuery(cart_summary_id);
                    if (value.length) {
                        jQuery.each(value, function (i, item) {
                            var src = item.image;
                            if (src == null) {
                                src = "../mixcdn.egany.com/themes/assets/thumb/large/noimage.gif";
                            }
                            var buttonQty = "";
                            if (item.quantity == '1') {
                                buttonQty = 'disabled';
                            } else {
                                buttonQty = '';
                            }

                            if (item.variant_title == 'Default Title') {
                                var ItemPopupCart = [{
                                    url: item.url,
                                    image_url: src,
                                    price: Haravan.formatMoney(item.price, '{{amount}}₫'),
                                    title: item.title,
                                    quanty: item.quantity,
                                    variant_title: '',
                                    price_quanty: Haravan.formatMoney(item.price * item.quantity, "{{amount}}₫"),
                                    id_item: item.variant_id
                                }];
                            } else {
                                var ItemPopupCart = [{
                                    url: item.url,
                                    image_url: src,
                                    price: Haravan.formatMoney(item.price, '{{amount}}₫'),
                                    title: item.title,
                                    quanty: item.quantity,
                                    variant_title: item.variant_title,
                                    price_quanty: Haravan.formatMoney(item.price * item.quantity, "{{amount}}₫"),
                                    id_item: item.variant_id
                                }];
                            }


                            $(function () {
                                var TemplateItemPopupCart = $('script[data-template="TemplateItemPopupCart"]').text().split(/\$\{(.+?)\}/g);
                                $(table).append(ItemPopupCart.map(function (item) {
                                    return TemplateItemPopupCart.map(render(item)).join('');
                                }));
                            });

                            $('.link_product').text();
                        });
                    }
                }
            });
        }
    }
    jQuery('.total-price').html(Haravan.formatMoney(cart.total_price, "{{amount}}₫"));
    updateCartDesc(cart);
}
Haravan.updateCartPageFormMobile = function (cart, cart_summary_id, cart_count_id) {
    if ((typeof cart_summary_id) === 'string') {
        var cart_summary = jQuery(cart_summary_id);
        if (cart_summary.length) {
            // Start from scratch.
            cart_summary.empty();
            // Pull it all out.
            if (cart.items && cart.items.length) {
                var table = jQuery(cart_summary_id);
                jQuery('<div class="cart_page_mobile content-product-list"></div>').appendTo(table);
                jQuery.each(cart.items, function (i, item) {
                    if (item.image != null) {
                        var src = Haravan.resizeImage(item.image, 'compact');
                    } else {
                        var src = "../mixcdn.egany.com/themes/assets/thumb/large/noimage.gif";
                    }
                    var ItemCartPageMobile = [{
                        url: item.url,
                        image_url: src,
                        price: Haravan.formatMoney(item.price, '{{amount}}₫'),
                        title: item.title,
                        quanty: item.quantity,
                        variant_title: item.variant_title !== 'Default Title' ? item.variant_title : '',
                        price_quanty: Haravan.formatMoney(item.price * item.quantity, "{{amount}}₫"),
                        id_item: item.variant_id,
                        pd_id: item.product_id
                    }];

                    var pageCartItemMobile = $('script[data-template="ItemCartMobile"]').text().split(/\$\{(.+?)\}/g);

                    $(table.children('.content-product-list')).append(ItemCartPageMobile.map(function (item) {
                        return pageCartItemMobile.map(render(item)).join('');
                    }));

                })

                var pageCartCheckoutMobile = $('script[data-template="pageCartCheckoutMobile"]').text().split(/\$\{(.+?)\}/g);
                var PriceTotalCheckoutMobile = [{
                    price_total: Haravan.formatMoney(cart.total_price, "{{amount}}₫")
                }];
                if (window.innerWidth < 767) {
                    var stickyCartCheckout = $('script[data-template="templateStickyCheckout"]').text().split(/\$\{(.+?)\}/g);
                    $('body').append(PriceTotalCheckoutMobile.map(function (item) {
                        return stickyCartCheckout.map(render(item)).join('');
                    }));
                }
                $(table).append(PriceTotalCheckoutMobile.map(function (item) {
                    return pageCartCheckoutMobile.map(render(item)).join('');
                }));


                $('.cart_page_mobile').append(`<div class="cart-note">
                    <label for="note" class="note-label">Ghi chú đơn hàng</label>
                    <textarea id="note" name="note" rows="8"></textarea>
                </div>`)
            }

        }
    }
    updateCartDesc(cart);
}


function updateCartDesc(data) {
    var $cartPrice = Haravan.formatMoney(data.total_price, "{{amount}}₫"),
        $cartMobile = $('#header .cart-mobile .quantity-product'),
        $cartDesktop = $('.count_item_pr, .count_sidebar, .cart-popup-count'),
        $cartDesktopList = $('.cart-counter-list'),
        $cartPopup = $('.cart-popup-count');

    switch (data.item_count) {
        case 0:
            $cartMobile.text('0');
            $cartDesktop.text('0');
            $cartDesktopList.text('0');
            $cartPopup.text('0');

            break;
        case 1:
            $cartMobile.text('1');
            $cartDesktop.text('1');
            $cartDesktopList.text('1');
            $cartPopup.text('1');

            break;
        default:
            $cartMobile.text(data.item_count);
            $cartDesktop.text(data.item_count);
            $cartDesktopList.text(data.item_count);
            $cartPopup.text(data.item_count);

            break;
    }
    $('.top-cart-content .top-subtotal .price, aside.sidebar .block-cart .subtotal .price, .popup-total .total-price').html($cartPrice);
    $('.popup-total .total-price').html($cartPrice);
    $('.shopping-cart-table-total .totals_price, .price_sidebar .price_total_sidebar').html($cartPrice);
    $('.totals_price_mobile').html($cartPrice);
    $('.cartCount, .cart-popup-count, #ega-cart-count').html(data.item_count);


}

Haravan.onCartUpdate = function (cart) {
    Haravan.updateCartFromForm(cart, '.mini-products-list');
    Haravan.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');

};
Haravan.onCartUpdateClick = function (cart, variantId) {
    jQuery.each(cart, function (key, value) {
        if (key === 'items') {
            jQuery.each(value, function (i, item) {
                if (item.variant_id == variantId) {
                    $('.productid-' + variantId).find('.cart-price span.price').html(Haravan.formatMoney(item.price * item.quantity, "{{amount}}₫"));
                    $('.productid-' + variantId).find('.items-count').prop("disabled", false);
                    $('.productid-' + variantId).find('.number-sidebar').prop("disabled", false);
                    $('.productid-' + variantId + ' .number-sidebar').val(item.quantity);
                    $('.list-item-cart .item.productid-' + variantId).find('.quanlity').text('x ' + item.quantity)
                    if (item.quantity == '1') {
                        $('.productid-' + variantId).find('.items-count.btn-minus').prop("disabled", true);
                    }
                }
            });
        }
    });
    updateCartDesc(cart);
}
Haravan.onCartRemoveClick = function (cart, variantId) {
    jQuery.each(cart, function (key, value) {
        if (key === 'items') {
            jQuery.each(value, function (i, item) {
                if (item.variant_id == variantId) {
                    $('.productid-' + variantId).remove();
                }
            });
        }
    });
    updateCartDesc(cart);
}
const initCart = () => {
    $.ajax({
        type: 'GET',
        url: '/cart.js',
        async: false,
        cache: false,
        dataType: 'json',
        success: function (cart) {
            Haravan.updateCartFromForm(cart, '.mini-products-list');
            Haravan.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');

            updateCartUpsell(cart)

        }
    });

    var wDWs = $(window).width();
    if (wDWs < 1199) {
        $('.top-cart-content').remove();

    }

}
$(window).ready(function () {


    $(window).one(' mousemove touchstart scroll', initCart)


});

//Check inventory
$(document).on('click', ".items-count", function () {
    $(this).parent().children('.items-count').prop('disabled', true);
    var variantId = $(this).parent().find('.variantID').val(),
        qty = $(this).parent().children('.number-sidebar').val(),
        url = $(this).parent().parent().parent().find('.product-name a').attr('href');
    CheckQtyCart(qty, variantId, url);
})

function CheckQtyCart(qty, variantId, url) {
    if (!url) return
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: "" + url + ".json",
        success: function (data) {
            locationData = data.product;
            for (var i = 0; i < locationData.variants.length; i++) {
                if (locationData.variants[i].id == variantId) {
                    var maxS = locationData.variants[i].inventory_quantity,
                        allow = locationData.variants[i].inventory_management,
                        continues = locationData.variants[i].inventory_policy;
                    if (allow == 'haravan') {
                        $('.productid-' + variantId + '').find('.items-count.btn-plus').css("pointer-events", "auto");
                        if (continues == "deny") {
                            $('.productid-' + variantId + '').find('.items-count.btn-plus').css("pointer-events", "none");
                            if (qty >= maxS) {
                                updateQuantity(maxS, variantId);
                                $('.productid-' + variantId + '').find('.quanlity').text(`x ${maxS}`)
                                $('.productid-' + variantId + '').find('.items-count.btn-plus').css("pointer-events", "none");
                            } else {
                                $('.productid-' + variantId + '').find('.items-count.btn-plus').css("pointer-events", "auto");
                            }
                        } else if (continues == "continue") {
                            $('.productid-' + variantId + '').find('.items-count.btn-plus').css("pointer-events", "auto");
                        } else {
                            $('.productid-' + variantId + '').find('.items-count.btn-plus').css("pointer-events", "auto");
                        }
                    }
                }
            }
        }
    })
}
Haravan.OptionSelectors.prototype.fireOnChangeForFirstDropdown = function (options) {
    if (this.selectors && this.selectors.length && this.selectors.length > 0) {
        this.selectors[0].element.onchange(options);
    }
};

function alertInvalidQty(qty) {
    alert(`Bạn chỉ có thể mua tối đa ${qty} sản phẩm`)
}

function validateQty(product, variantId, qty) {
    let isInValidQty = false;
    /** check variant **/
    let variant = product && product.variants.find(item => item.id == variantId)
    if (variant && variant.inventory_management === "haravan" && variant.inventory_policy == "deny") {
        isInValidQty = qty > variant.inventory_quantity
        isInValidQty && alertInvalidQty(variant.inventory_quantity)
        return isInValidQty ? variant.inventory_quantity : false
    }
    return isInValidQty

}

function cart_min() {
    var sts = true;
    $.ajax({
        type: 'GET',
        url: '/cart.js',
        async: false,
        success: function (data) {
            var cart = parseInt(data.total_price);
            var cart_compare = parseInt(150000000);
            if (cart < cart_compare) {
                $('.btn-proceed-checkout-mobile').addClass('disabled');
                $('.cart-limit-alert').css('display', 'block');
                $('#template-cart').removeClass('cart-available')
                sts = false;
            } else {
                $('.btn-proceed-checkout-mobile').removeClass('disabled');
                $('.cart-limit-alert').css('display', 'none');
                $('#template-cart').addClass('cart-available')
            }
        }
    })
    return sts;
}

function productsCallback() {
    $(document)
        .find(".starbaprv-preview-badge")
        .each(function (a) {
            $(this).find(".starbap-prev-badge").length == 0 &&
                $(this).append(
                    '<div class="starbap-prev-badge" data-average-rating="0" data-number-of-reviews="0"><a class="starbap-star starbap--off"><i class="fa fa-star fa-fw"></i></a><a class="starbap-star starbap--off"><i class="fa fa-star fa-fw"></i></a><a class="starbap-star starbap--off"><i class="fa fa-star fa-fw"></i></a><a class="starbap-star starbap--off"><i class="fa fa-star fa-fw"></i></a><a class="starbap-star starbap--off"><i class="fa fa-star fa-fw"></i></a><span class="starbap-prev-badgetext">0 đánh giá</span></div>'
                );
        });
    if (typeof ProductReviews !== 'undefined' && ProductReviews) {
        ProductReviews.init()
    }
}


$(document).ready(function () {

    $(window).one(' mousemove touchstart scroll', cart_min)
})

Haravan.OptionSelectors.prototype.fireOnChangeForFirstDropdown = function (options) {
    if (this.selectors && this.selectors.length && this.selectors.length > 0) {
        this.selectors[0].element.onchange(options);
    }
};

var cro_show = true,
    cro_addcart_show = true,
    cro_cart_show = true,
    cro_addcart_title = "Thêm vào giỏ",
    cro_addcart_bg_1 = "#66b1d0",
    cro_addcart_bg_2 = "#66b1d0",
    cro_addcart_color = "#fff",
    cro_price_color = "#66b1d0",
    cro_variant_color = "#080808",
    cro_cta_bg = "#66b1d0",
    cro_cta_color = "",
    cro_addcart_modal_mess = "Tiến hành thanh toán",
    cro_addcart_modal_redirect = "",
    cro_modal_btn_text = "",
    cro_modal_btn_bg = "",
    cro_modal_btn_color = "",
    cro_hotline_show = true,
    cro_hotline_number = "0868601369",
    cro_mess_show = true,
    cro_mess_url = "https://m.me/eunoiabyan.kids",
    cro_home_show = 3,
    cro_home_title = "Ưu đãi",
    cro_home_url = "https://ega-style.myharavan.com/collections/flash-sale",
    cro_coll_title = "Danh mục",
    cro_coll_url = "/collections/all",
    cro_blog_title = "Cửa hàng",
    cro_blog_url = "https://ega-style.myharavan.com/pages/he-thong-cua-hang",
    cro_general_color = "#080808",
    cro_product_color = "#080808",
    cro_background_color = "#fff"

window.EGACRAddonSettings = {
    general: {
        enabled: cro_show,
        iconWidth: 20,
        background: cro_background_color,
        color: cro_general_color,
        activeColor: cro_general_color,
        activeBackground: cro_background_color,
        screenSize: [{
            name: "mobile"
        }],
        styleAddon: "shopee",
        productBackground: "#ffffff",
        productColor: cro_product_color,
        ignorePages: [],
        bodyOffset: 54,
        conflictEl: "#ega-hotline,.fb_dialog.fb_dialog_advanced",
        skipEl: ".button-popup-loyalty",
        desktop: {
            x: "right",
            y: 50
        }
    },
    products: {
        enabled: cro_cart_show || cro_addcart_show,
        cart: {
            enabled: cro_cart_show,
            icon: "//theme.hstatic.net/200000685745/1001041408/14/cro-cart-icon.png?v=44",
            title: "Giỏ hàng",
            url: "/cart"
        },
        buyNowBtn: {
            enabled: false,
            title: "Mua ngay",
            color: "#ffffff",
            background: "#ffd001",
            backgroundEnd: "#ff9b30"
        },
        addToCartBtn: {
            enabled: cro_addcart_show,
            title: cro_addcart_title,
            color: "#ffffff",
            background: cro_addcart_bg_1,
            loadingColor: "",
            icon: "",
            backgroundEnd: cro_addcart_bg_2,
            cartQuery: ".count_item_pr,.count-holder .count"
        },
        modal: {
            enabled: false,
            headerText: "Sản phẩm vừa được thêm vào giỏ hàng",
            ctaLink: "checkout",
            ctaText: cro_addcart_modal_mess,
            ctaBg: "#ff5722",
            ctaColor: "#fff"
        },
        qvProduct: {
            priceColor: cro_price_color,
            variantColor: cro_variant_color,
            ctaBg: cro_addcart_bg_1,
            ctaColor: "#fff",
            useQty: true
        }
    },
    pages: {
        enabled: true,
        links: [

            {
                url: cro_coll_url,
                title: cro_coll_title,
                icon: "//theme.hstatic.net/200000685745/1001041408/14/icon-cro-coll.png?v=44",
                order: "4"
            },
            {
                url: cro_blog_url,
                title: cro_blog_title,
                icon: "//theme.hstatic.net/200000685745/1001041408/14/icon-cro-blog.png?v=44",
                order: "5"

            },

            {
                url: cro_home_url,
                title: cro_home_title,
                icon: "//theme.hstatic.net/200000685745/1001041408/14/cro-home-icon.png?v=44",
                order: "3"

            }
        ]
    },
    messenger: {
        enabled: cro_mess_show,
        icon: "//theme.hstatic.net/200000685745/1001041408/14/cro-mess-icon.png?v=44",
        title: "Nhắn tin",
        url: cro_mess_url,

        order: "2"


    },
    phone: {
        enabled: cro_hotline_show,
        icon: "//theme.hstatic.net/200000685745/1001041408/14/cro-phone-icon.png?v=44",
        title: "Gọi điện",
        number: cro_hotline_number,

        order: "1"


    },
    form: {
        enabled: false,
    }
};
let crAddonScript = "../theme.hstatic.net/200000685745/1001041408/14/ega-addon-cr-button-min6704.js?v=44"
EGACRAddonSettings.general.currentTemplate = 'index';
EGACRAddonSettings.general.platform = Haravan;
window.EGACRAddonSettings.general.moneyFormat = '{{amount}}₫'
const platform = window.EGACRAddonSettings.general.platform
platform.addItem = function (variantId, quantity, callback, errHandle) {
    var quantity = quantity || 1,
        n = {
            type: "POST",
            url: "/cart/add.js",
            data: "quantity=" + quantity + "&id=" + variantId,
            dataType: "json",
            success: function (jqXHR, textStatus, errorThrown) {
                $('#crQVModal').trigger('click')
                $('#cr-addon-addtocart').removeClass('loading').removeAttr("disabled")
                addToCartSuccess(jqXHR, textStatus, errorThrown)
            },
            error: function (a, r) {
                errHandle(a, r)
            }
        };
    jQuery.ajax(n)

}
if (typeof EGA === 'undefined') {
    EGA = {}
}
window.egaCRAddonValid = window.EGACRAddonSettings.general.enabled;

$(document).ready(function ($) {
    if (window.innerWidth <= 600) {
        var isInit = false
        $(window).on('scroll click mousemove touchstart', () => {
            if (!isInit) {
                isInit = true
                $("body").append(`<script src="${crAddonScript}" defer ><\/script>`);
            }
        })
    }
});

var salePopArr = [];
let timePerPop = 15000;
let timeDelay = 30000;
let salesPopDesc = `Khách hàng [name] tại [address] vừa mua sản phẩm cách đây [time]`;
let count = 0;
let fakerScript = "../theme.hstatic.net/200000685745/1001041408/14/faker6704.js?v=44"
let customerGender = undefined;

salePopArr = []

function showSalePop() {
    if (!faker) return
    $('#ega-sale-pop.salepop-show').removeClass('salepop-show').addClass('salespop-close');
    let pdRanIndex = Math.floor(Math.random() * salePopArr.length),
        salePopProduct = salePopArr[pdRanIndex],
        randomMin = `${Math.floor(Math.random() * 59) + 1} phút`;
    const name = `${faker.name.lastName(customerGender)} ${faker.name.firstName(customerGender)}`
    // const phone = `${faker.phone.phoneNumber().replace(' ').random.arrayElement(faker.locales.vi.address.city_root)const%20desc%20%3d%20salesPopDesc.replace(%60%5bname%5d%60%2c%20name).replace(%60%5bphone%5d%60%2c%20%60xxx%24%7bphone.substr(phone.length%20-%208)%7d%60).replace(%60%5b'[address]', address)
    const salesPopContent = `	
			<div class="sale-pop-img">
			<img src="${salePopProduct.img_url}" class="img-fluid" loading="lazy" alt="${salePopProduct.title}" width="80" height="80"/>
				</div>
			<div class="sale-pop-body">
			<div class="sale-pop-name">
			<a href="${salePopProduct.pd_url}">${salePopProduct.pd_title}</a>
				</div>
			<span class="sale-pop-desc">${desc}</span>
				</div>
`
    $('.sale-pop-wrap').html(salesPopContent)
    setTimeout(() => {
        $('#ega-sale-pop').addClass('salepop-show').removeClass('salespop-close');
        setTimeout(() => {
            $('#ega-sale-pop.salepop-show').removeClass('salepop-show').addClass('salespop-close');
            setTimeout(() => {
                showSalePop()
            }, timeDelay)
        }, 10000)
    }, 3000)


}


function initSalesPop() {
    if (!salePopArr.length) return;
    setTimeout(() => {
        $.getScript(fakerScript).then(() => {
            if (faker) {
                showSalePop()
            }
        })

    }, timeDelay)




}

$(document).ready(() => {
    $('#ega-sale-pop').removeClass('hidden');
    initSalesPop()
    $(".sale-pop-close").click(function () {
        $("#ega-sale-pop").removeClass('salepop-show').removeClass('salespop-close');
    })
    $(".sale-pop-cta").click(function (e) {
        e.preventDefault();
        $(".sale-pop-regis").show();
    })
    $(".regis-close").click(function () {
        $(".sale-pop-regis").hide();
    })
})
$(document).ready(() => {
    const page_id = "168389884826236"
    if (page_id && window.innerWidth > 600) {
        $(window).one(' mousemove touchstart scroll', () => {
            var chatbox = document.getElementById('fb-customer-chat');
            if (chatbox) {
                chatbox.setAttribute("page_id", page_id);
                chatbox.setAttribute("attribution", "biz_inbox");
            }
            window.fbAsyncInit = function () {
                FB.init({
                    xfbml: true,
                    version: 'v12.0'
                });
            };

            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = '../connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        })
    }
})
window.EGASmartSearchConfigs = {
    // color
    colorBg: '#ffffff',
    colorBgHover: '#f7f7f7',
    colorItemTextTitle: '#251f1f',
    colorItemTextPrice: '#f3283d',
    colorItemTextCompareAtPrice: '#666666',
    colorItemTextViewAll: '#000000',
    colorHeaderText: '#a0a0a0',
    navBg: '#f7f7f7',
    navTextColor: '#a0a0a0',
    navBgActive: '#a0a0a0',
    navTextColorActive: '#fff',
    colorLoading: '#d82e4d',
    // general
    searchAccuracy: 'title',
    searchWidth: '450px',
    searchHeight: '400px',
    // product
    productSortby: 'default',
    productLimit: 7,
    // article
    displayArticle: false,
    articleLimit: 3,
    moneyFormat: "{{amount}}₫",
    shopDomain: '',
    textHeaderSectionTitle: 'Kết quả tìm kiếm cho ',
    textProductSectionTitle: 'Sản phẩm ',
    textArticleSectionTitle: 'Bài viết',
    notFound: 'Không tìm thấy kết quả ',
    textFrom: '',
    textShowAll: 'Xem thêm sản phẩm có chứa '
}
