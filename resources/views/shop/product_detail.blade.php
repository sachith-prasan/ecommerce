@extends('layouts.shop')

@section('main')
    <section class="product-single product-single__type-7 container">
        <div class="row">
            <div class="col-lg-7">
                <div class="mb-md-1 pb-md-3"></div>
                <div class="product-single__media" data-media-type="grid-image">
                    <div class="product-single__image">
                        <div class="product-single__image-item">
                            <img loading="lazy" class="h-auto" src="/shop/images/products/product_0-9.jpg" width="798"
                                height="740" alt="">
                        </div>
                        <div class="product-single__image-item">
                            <img loading="lazy" class="h-auto" src="/shop/images/products/product_0-10.jpg" width="394"
                                height="365" alt="">
                        </div>
                        <div class="product-single__image-item">
                            <img loading="lazy" class="h-auto" src="/shop/images/products/product_0-11.jpg" width="394"
                                height="365" alt="">
                        </div>
                        <div class="product-single__image-item">
                            <img loading="lazy" class="h-auto" src="/shop/images/products/product_0-12.jpg" width="394"
                                height="365" alt="">
                        </div>
                        <div class="product-single__image-item">
                            <img loading="lazy" class="h-auto" src="/shop/images/products/product_0-13.jpg" width="394"
                                height="365" alt="">
                        </div>
                    </div>
                </div>
                <div class="product-single__additional-info">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#deliveryModal">Composition and Care</a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#deliveryModal">In-Store Availability</a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#deliveryModal">Delivery and Return</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="sticky-content">
                    <div class="mb-md-1 pb-md-3"></div>
                    <div class="d-flex justify-content-between mb-4 pb-md-2">
                        <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
                            <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">Home</a>
                            <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
                            <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">The Shop</a>
                        </div><!-- /.breadcrumb -->
                        <div
                            class="product-single__prev-next d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
                            <a href="product11_v6.html" class="text-uppercase fw-medium"><svg class="mb-1px" width="10"
                                    height="10" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_prev_md" />
                                </svg><span class="menu-link menu-link_us-s">Prev</span></a>
                            <a href="product13_v8.html" class="text-uppercase fw-medium"><span
                                    class="menu-link menu-link_us-s">Next</span><svg class="mb-1px" width="10"
                                    height="10" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_next_md" />
                                </svg></a>
                        </div><!-- /.shop-acs -->
                    </div>
                    <h1 class="product-single__name">Lightweight Puffer Jacket With a Hood</h1>
                    <div class="product-single__rating">
                        <div class="reviews-group d-flex">
                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_star" />
                            </svg>
                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_star" />
                            </svg>
                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_star" />
                            </svg>
                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_star" />
                            </svg>
                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_star" />
                            </svg>
                        </div>
                        <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
                    </div>
                    <div class="product-single__price">
                        <span class="current-price">$449</span>
                    </div>
                    <div class="product-single__short-desc">
                        <p>Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida nec dui. Aenean
                            aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim viverra nunc, ut aliquet
                            magna posuere eget.</p>
                    </div>
                    <form name="addtocart-form" method="post">
                        <div class="product-single__swatches">
                            <div class="product-swatch text-swatches">
                                <label>Sizes</label>
                                <div class="swatch-list">
                                    <input type="radio" name="size" id="swatch-1">
                                    <label class="swatch js-swatch" for="swatch-1" aria-label="Extra Small"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Extra Small">XS</label>
                                    <input type="radio" name="size" id="swatch-2" checked>
                                    <label class="swatch js-swatch" for="swatch-2" aria-label="Small"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Small">S</label>
                                    <input type="radio" name="size" id="swatch-3">
                                    <label class="swatch js-swatch" for="swatch-3" aria-label="Middle"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Middle">M</label>
                                    <input type="radio" name="size" id="swatch-4">
                                    <label class="swatch js-swatch" for="swatch-4" aria-label="Large"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Large">L</label>
                                    <input type="radio" name="size" id="swatch-5">
                                    <label class="swatch js-swatch" for="swatch-5" aria-label="Extra Large"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Extra Large">XL</label>
                                </div>
                                <a href="#" class="sizeguide-link" data-bs-toggle="modal"
                                    data-bs-target="#sizeGuide">Size Guide</a>
                            </div>
                            <div class="product-swatch color-swatches">
                                <label>Color</label>
                                <div class="swatch-list">
                                    <input type="radio" name="color" id="swatch-11">
                                    <label class="swatch swatch-color js-swatch" for="swatch-11" aria-label="Black"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Black"
                                        style="color: #222"></label>
                                    <input type="radio" name="color" id="swatch-12" checked>
                                    <label class="swatch swatch-color js-swatch" for="swatch-12" aria-label="Red"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Red"
                                        style="color: #C93A3E"></label>
                                    <input type="radio" name="color" id="swatch-13">
                                    <label class="swatch swatch-color js-swatch" for="swatch-13" aria-label="Grey"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Grey"
                                        style="color: #E4E4E4"></label>
                                </div>
                            </div>
                        </div>
                        <div class="product-single__addtocart">
                            <div class="qty-control position-relative">
                                <input type="number" name="quantity" value="1" min="1"
                                    class="qty-control__number text-center">
                                <div class="qty-control__reduce">-</div>
                                <div class="qty-control__increase">+</div>
                            </div><!-- .qty-control -->
                            <button type="submit" class="btn btn-primary btn-addtocart js-open-aside"
                                data-aside="cartDrawer">Add to Cart</button>
                        </div>
                    </form>
                    <div class="product-single__addtolinks">
                        <a href="#" class="menu-link menu-link_us-s add-to-wishlist"><svg width="16"
                                height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_heart" />
                            </svg><span>Add to Wishlist</span></a>
                        <share-button class="share-button">
                            <button
                                class="menu-link menu-link_us-s to-share border-0 bg-transparent d-flex align-items-center">
                                <svg width="16" height="19" viewBox="0 0 16 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_sharing" />
                                </svg>
                                <span>Share</span>
                            </button>
                            <details id="Details-share-template__main" class="m-1 xl:m-1.5" hidden="">
                                <summary class="btn-solid m-1 xl:m-1.5 pt-3.5 pb-3 px-5">+</summary>
                                <div id="Article-share-template__main"
                                    class="share-button__fallback flex items-center absolute top-full left-0 w-full px-2 py-4 bg-container shadow-theme border-t z-10">
                                    <div class="field grow mr-4">
                                        <label class="field__label sr-only" for="url">Link</label>
                                        <input type="text" class="field__input w-full" id="url"
                                            value="https://uomo-crystal.myshopify.com/blogs/news/go-to-wellness-tips-for-mental-health"
                                            placeholder="Link" onclick="this.select();" readonly="">
                                    </div>
                                    <button class="share-button__copy no-js-hidden">
                                        <svg class="icon icon-clipboard inline-block mr-1" width="11" height="13"
                                            fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                            focusable="false" viewBox="0 0 11 13">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <span class="sr-only">Copy link</span>
                                    </button>
                                </div>
                            </details>
                        </share-button>
                        <script src="/shop/js/details-disclosure.js" defer="defer"></script>
                        <script src="/shop/js/share.js" defer="defer"></script>
                    </div>
                    <div class="product-single__meta-info">
                        <div class="meta-item">
                            <label>SKU:</label>
                            <span>N/A</span>
                        </div>
                        <div class="meta-item">
                            <label>Categories:</label>
                            <span>Casual & Urban Wear, Jackets, Men</span>
                        </div>
                        <div class="meta-item">
                            <label>Tags:</label>
                            <span>biker, black, bomber, leather</span>
                        </div>
                    </div>
                    <div class="product-single__details">
                        <a href="#" class="js-open-aside" data-aside="productDescription">Description</a>
                        <a href="#" class="js-open-aside" data-aside="productAdditionalInformation">Additional
                            Information</a>
                        <a href="#" class="js-open-aside" data-aside="productReviews">Reviews (3)</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products-carousel container">
        <h2 class="h3 text-uppercase mb-4 pb-xl-2 mb-xl-4">Related <strong>Products</strong></h2>

        <div id="related_products" class="position-relative">
            <div class="swiper-container js-swiper-slider"
                data-settings='{
        "autoplay": false,
        "slidesPerView": 4,
        "slidesPerGroup": 4,
        "effect": "none",
        "loop": true,
        "pagination": {
          "el": "#related_products .products-pagination",
          "type": "bullets",
          "clickable": true
        },
        "navigation": {
          "nextEl": "#related_products .products-carousel__next",
          "prevEl": "#related_products .products-carousel__prev"
        },
        "breakpoints": {
          "320": {
            "slidesPerView": 2,
            "slidesPerGroup": 2,
            "spaceBetween": 14
          },
          "768": {
            "slidesPerView": 3,
            "slidesPerGroup": 3,
            "spaceBetween": 24
          },
          "992": {
            "slidesPerView": 4,
            "slidesPerGroup": 4,
            "spaceBetween": 30
          }
        }
      }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide product-card">
                        <div class="pc__img-wrapper">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="/shop/images/products/product_3.jpg" width="330"
                                    height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                <img loading="lazy" src="/shop/images/products/product_3-1.jpg" width="330"
                                    height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                            </a>
                            <button
                                class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Kirby T-Shirt</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$17</span>
                            </div>

                            <button
                                class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="swiper-slide product-card">
                        <div class="pc__img-wrapper">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="/shop/images/products/product_1.jpg" width="330"
                                    height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                <img loading="lazy" src="/shop/images/products/product_1-1.jpg" width="330"
                                    height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                            </a>
                            <button
                                class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Cropped Faux Leather Jacket</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$29</span>
                            </div>
                            <div class="product-card__review d-flex align-items-center">
                                <div class="reviews-group d-flex">
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_star" />
                                    </svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_star" />
                                    </svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_star" />
                                    </svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_star" />
                                    </svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_star" />
                                    </svg>
                                </div>
                                <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
                            </div>

                            <button
                                class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="swiper-slide product-card">
                        <div class="pc__img-wrapper">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="/shop/images/products/product_2.jpg" width="330"
                                    height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                <img loading="lazy" src="/shop/images/products/product_2-1.jpg" width="330"
                                    height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                            </a>
                            <button
                                class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Calvin Shorts</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$62</span>
                            </div>

                            <button
                                class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="swiper-slide product-card">
                        <div class="pc__img-wrapper">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="/shop/images/products/product_6.jpg" width="330"
                                    height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                <img loading="lazy" src="/shop/images/products/product_6-1.jpg" width="330"
                                    height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                            </a>
                            <button
                                class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Shirt In Botanical Cheetah Print</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$62</span>
                            </div>

                            <button
                                class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="swiper-slide product-card">
                        <div class="pc__img-wrapper">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="/shop/images/products/product_7.jpg" width="330"
                                    height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                <img loading="lazy" src="/shop/images/products/product_7-1.jpg" width="330"
                                    height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                            </a>
                            <button
                                class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Cotton Jersey T-Shirt</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$17</span>
                            </div>

                            <button
                                class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="swiper-slide product-card">
                        <div class="pc__img-wrapper">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="/shop/images/products/product_4.jpg" width="330"
                                    height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                <img loading="lazy" src="/shop/images/products/product_4-1.jpg" width="330"
                                    height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                            </a>
                            <button
                                class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price price-old">$129</span>
                                <span class="money price price-sale">$99</span>
                            </div>

                            <button
                                class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="swiper-slide product-card">
                        <div class="pc__img-wrapper">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="/shop/images/products/product_5.jpg" width="330"
                                    height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                <img loading="lazy" src="/shop/images/products/product_5-1.jpg" width="330"
                                    height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                            </a>
                            <button
                                class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Colorful Jacket</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">$29</span>
                            </div>

                            <button
                                class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="swiper-slide product-card">
                        <div class="pc__img-wrapper">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="/shop/images/products/product_8.jpg" width="330"
                                    height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                <img loading="lazy" src="/shop/images/products/product_8-1.jpg" width="330"
                                    height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                            </a>
                            <button
                                class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">Dresses</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Zessi Dresses</a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price price-old">$129</span>
                                <span class="money price price-sale">$99</span>
                            </div>

                            <button
                                class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div><!-- /.swiper-wrapper -->
            </div><!-- /.swiper-container js-swiper-slider -->

            <div class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
                <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_prev_md" />
                </svg>
            </div><!-- /.products-carousel__prev -->
            <div class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
                <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_next_md" />
                </svg>
            </div><!-- /.products-carousel__next -->

            <div class="products-pagination mt-4 mb-5 d-flex align-items-center justify-content-center"></div>
            <!-- /.products-pagination -->
        </div><!-- /.position-relative -->

    </section><!-- /.products-carousel container -->
    <!-- Page Overlay -->
@endsection
