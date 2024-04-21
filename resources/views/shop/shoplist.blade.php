@extends('layouts.shop')

@section('main')
 
    <section class="full-width_padding" style="background-color: #faf9f8">
      <div class="shop-categories position-relative">
        <h2 class="h3 pb-3 mb-4 fw-normal text-uppercase text-center">You Might Like</h2>

        <div class="shop-categories__list d-flex align-items-center flex-wrap justify-content-center">
          <a href="#" class="shop-categories__item mb-3">
            <img loading="lazy" src="/shop/images/shop/category-item1.png" width="120" height="120" alt="Women Tops" class="shop-categories__item-img rounded-circle">
            <h6 class="pt-1 mt-3 mt-xl-4 mb-0 text-center">Women<br>Tops</h6>
          </a>

          <a href="#" class="shop-categories__item mb-3">
            <img loading="lazy" src="/shop/images/shop/category-item2.png" width="120" height="120" alt="Women Pants" class="shop-categories__item-img rounded-circle">
            <h6 class="pt-1 mt-3 mt-xl-4 mb-0 text-center">Women<br>Pants</h6>
          </a>

          <a href="#" class="shop-categories__item mb-3">
            <img loading="lazy" src="/shop/images/shop/category-item3.png" width="120" height="120" alt="Women Clothes" class="shop-categories__item-img rounded-circle">
            <h6 class="pt-1 mt-3 mt-xl-4 mb-0 text-center">Women<br>Clothes</h6>
          </a>

          <a href="#" class="shop-categories__item mb-3">
            <img loading="lazy" src="/shop/images/shop/category-item4.png" width="120" height="120" alt="Men Jeans" class="shop-categories__item-img rounded-circle">
            <h6 class="pt-1 mt-3 mt-xl-4 mb-0 text-center">Men<br>Jeans</h6>
          </a>

          <a href="#" class="shop-categories__item mb-3">
            <img loading="lazy" src="/shop/images/shop/category-item5.png" width="120" height="120" alt="Men Shirts" class="shop-categories__item-img rounded-circle">
            <h6 class="pt-1 mt-3 mt-xl-4 mb-0 text-center">Men<br>Shirts</h6>
          </a>

          <a href="#" class="shop-categories__item mb-3">
            <img loading="lazy" src="/shop/images/shop/category-item6.png" width="120" height="120" alt="Men Shoes" class="shop-categories__item-img rounded-circle">
            <h6 class="pt-1 mt-3 mt-xl-4 mb-0 text-center">Men<br>Shoes</h6>
          </a>

          <a href="#" class="shop-categories__item mb-3">
            <img loading="lazy" src="/shop/images/shop/category-item7.png" width="120" height="120" alt="Women Dresses" class="shop-categories__item-img rounded-circle">
            <h6 class="pt-1 mt-3 mt-xl-4 mb-0 text-center">Women<br>Dresses</h6>
          </a>

          <a href="#" class="shop-categories__item mb-3">
            <img loading="lazy" src="/shop/images/shop/category-item8.png" width="120" height="120" alt="Kids Tops" class="shop-categories__item-img rounded-circle">
            <h6 class="pt-1 mt-3 mt-xl-4 mb-0 text-center">Kids<br>Tops</h6>
          </a>
        </div>
      </div><!-- /.shop-categories position-relative -->
    </section><!-- /.full-width_padding-->

    <div class="mb-4 pb-lg-3"></div>

    <section class="shop-main container">
      <div class="d-flex justify-content-between mb-4 pb-md-2">
        <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
          <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium" >Home</a>
          <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
          <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium" >The Shop</a>
        </div><!-- /.breadcrumb -->

        <div class="shop-acs d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
          <select class="shop-acs__select form-select w-auto border-0 py-0 order-1 order-md-0" aria-label="Sort Items" name="total-number">
            <option selected>Default Sorting</option>
            <option value="1">Featured</option>
            <option value="2">Best selling</option>
            <option value="3">Alphabetically, A-Z</option>
            <option value="3">Alphabetically, Z-A</option>
            <option value="3">Price, low to high</option>
            <option value="3">Price, high to low</option>
            <option value="3">Date, old to new</option>
            <option value="3">Date, new to old</option>
          </select>

          <div class="shop-asc__seprator mx-3 bg-light d-none d-md-block order-md-0"></div>

          <div class="col-size align-items-center order-1 d-none d-lg-flex">
            <span class="text-uppercase fw-medium me-2">View</span>
            <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid" data-cols="2">2</button>
            <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid" data-cols="3">3</button>
            <button class="btn-link fw-medium js-cols-size" data-target="products-grid"  data-cols="4">4</button>
          </div><!-- /.col-size -->

          <div class="shop-asc__seprator mx-3 bg-light d-none d-lg-block order-md-1"></div>

          <div class="shop-filter d-flex align-items-center order-0 order-md-3">
            <button class="btn-link btn-link_f d-flex align-items-center ps-0 js-open-aside" data-aside="shopFilter">
              <svg class="d-inline-block align-middle me-2" width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_filter" /></svg>
              <span class="text-uppercase fw-medium d-inline-block align-middle">Filter</span>
            </button>
          </div><!-- /.col-size d-flex align-items-center ms-auto ms-md-3 -->
        </div><!-- /.shop-acs -->
      </div><!-- /.d-flex justify-content-between -->

      <div class="products-grid row row-cols-2 row-cols-md-3 row-cols-lg-4" id="products-grid" >
        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_1-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Cropped Faux Leather Jacket</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$29</span>
              </div>
              <div class="product-card__review d-flex align-items-center">
                <div class="reviews-group d-flex">
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                </div>
                <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_2.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_2-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Calvin Shorts</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$62</span>
              </div>

              <div class="d-flex align-items-center mt-1">
                <a href="#" class="swatch-color pc__swatch-color" style="color: #222222"></a>
                <a href="#" class="swatch-color swatch_active pc__swatch-color" style="color: #b9a16b"></a>
                <a href="#" class="swatch-color pc__swatch-color" style="color: #f5e6e0"></a>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>

            <div class="pc-labels position-absolute top-0 start-0 w-100 d-flex justify-content-between">
              <div class="pc-labels__right ms-auto">
                <span class="pc-label pc-label_sale d-block text-white">-67%</span>
              </div>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_3.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_3-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Kirby T-Shirt</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$17</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_4.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_4-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Cableknit Shawl</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price price-old">$129</span>
                <span class="money price price-sale">$99</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
            <div class="pc-labels position-absolute top-0 start-0 w-100 d-flex justify-content-between">
              <div class="pc-labels__left">
                <span class="pc-label pc-label_new d-block bg-white">NEW</span>
              </div>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_5.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_5-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Colorful Jacket</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$29</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_6.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_6-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Shirt In Botanical Cheetah Print</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$62</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_7.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_7-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Cotton Jersey T-Shirt</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$17</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_8.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_8-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Zessi Dresses</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price price-old">$129</span>
                <span class="money price price-sale">$99</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_9.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_9-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Cropped Faux Leather Jacket</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$29</span>
              </div>
              <div class="product-card__review d-flex align-items-center">
                <div class="reviews-group d-flex">
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                </div>
                <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_10.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_10-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Calvin Shorts</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$62</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_11.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_11-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Kirby T-Shirt</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$17</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_12.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_12-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Cableknit Shawl</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price price-old">$129</span>
                <span class="money price price-sale">$99</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_13.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_13-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Colorful Jacket</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$29</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_14.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_14-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Shirt In Botanical Cheetah Print</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$62</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_15.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_15-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Cotton Jersey T-Shirt</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$17</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_16.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="/shop/images/products/product_16-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Zessi Dresses</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price price-old">$129</span>
                <span class="money price price-sale">$99</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>
      </div><!-- /.products-grid row -->

      <div class="text-center">
        <a class="btn btn-primary text-uppercase fw-medium fs-base" href="#">Show More</a>
      </div>
    </section><!-- /.shop-main container -->
  @endsection