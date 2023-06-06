@extends('front.layouts.main')

@section('content')
    <div id="product-category" class="container">
        <div class="row">
            <div class="wrapper_container">
                <aside id="column-left" class="col-sm-3 hidden-xs">
                    <div class="box">
                        <h2 class="page-title hidden-sm hidden-xs">
                            Categories
                        </h2>
                        <div class="block-title clearfix  hidden-lg hidden-md collapsed" data-target="#box-container"
                             data-toggle="collapse">
                            <span class="page-title">Categories</span>
                            <span class="navbar-toggler collapse-icons">
          <i class="fa fa-angle-down add"></i>
          <i class="fa fa-angle-up remove"></i>
        </span>
                        </div>
                        <div id="box-container" class="collapse data-toggler">
                            <ul class="category-top-menu">
                                <li>

                                    <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20"
                                       class="list-group-item active">Toys (15)</a>

                                    <span class="navbar-toggler collapse-icons" data-target="#childlist"
                                          data-toggle="collapse">
                            <i class="fa fa-angle-down add"></i>
                            <i class="fa fa-angle-up remove"></i>
                        </span>
                                    <div id="childlist" class="collapse">
                                        <ul class="category-sub-menu">
                                            <li>

                                                <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20_26"
                                                   class="list-group-item">&nbsp;&nbsp;&nbsp;- Buster suit (0)</a>
                                            </li>
                                            <li>

                                                <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20_27"
                                                   class="list-group-item">&nbsp;&nbsp;&nbsp;- Alice band (1)</a>
                                            </li>
                                            <li>

                                                <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20_77"
                                                   class="list-group-item">&nbsp;&nbsp;&nbsp;- Cloth diaper (0)</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>

                                    <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=96"
                                       class="list-group-item">Toy Box (0)</a>
                                </li>
                                <li>

                                    <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=18"
                                       class="list-group-item">Accesories (12)</a>
                                </li>
                                <li>

                                    <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=87"
                                       class="list-group-item">Components (3)</a>
                                </li>
                                <li>

                                    <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=88"
                                       class="list-group-item">Outfits (3)</a>
                                </li>
                                <li>

                                    <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=89"
                                       class="list-group-item">Brands (3)</a>
                                </li>
                                <li>

                                    <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=33"
                                       class="list-group-item">Collection (3)</a>
                                </li>
                                <li>

                                    <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=97"
                                       class="list-group-item">Fun Guns (0)</a>
                                </li>
                                <li>

                                    <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=98"
                                       class="list-group-item">Teddies (0)</a>
                                </li>
                                <li>

                                    <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=99"
                                       class="list-group-item">Toy Car (0)</a>
                                </li>
                                <li>

                                    <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=100"
                                       class="list-group-item">Teddy (0)</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="filterbox">
                        <div class="page-title hidden-sm hidden-xs">Refine Search</div>
                        <div class="block-title clearfix  hidden-lg hidden-md collapsed"
                             data-target="#filterbox-container" data-toggle="collapse">
                            <span class="page-title">Refine Search</span>
                            <span class="navbar-toggler collapse-icons">
      <i class="fa fa-angle-down add"></i>
      <i class="fa fa-angle-up remove"></i>
    </span>
                        </div>
                        <div id="filterbox-container" class="collapse data-toggler">
                            <div class="list-group-filter">

                                <a class="list-group-item group-name">Size</a>
                                <div class="list-group-item">
                                    <div id="filter-group1">
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="1">
                                                S (1)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="2">
                                                M (1)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="3">
                                                L (0)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="4">
                                                XL (0)
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <a class="list-group-item group-name">Colour</a>
                                <div class="list-group-item">
                                    <div id="filter-group2">
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="5">
                                                Red (1)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="6">
                                                Green (1)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="7">
                                                Blue (0)
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <a class="list-group-item group-name">Price</a>
                                <div class="list-group-item">
                                    <div id="filter-group3">
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="8">
                                                $8.00 - $10.00 (1)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="9">
                                                $11.00 - $14.00 (1)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer text-left">
                                <button type="button" id="button-filter" class="btn btn-primary">Refine Search</button>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript"><!--
                        $('#button-filter').on('click', function () {
                            filter = [];

                            $('input[name^=\'filter\']:checked').each(function (element) {
                                filter.push(this.value);
                            });

                            location = 'https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&path=20&limit=5&filter=' + filter.join(',');
                        });
                        //--></script>

                    <section id="ishibannerblock-1770620958" class="ishibannerblock one_bannerblock">
                        <div class="bannerblock col-md-12 col-sm-12 col-xs-12">
                            <div class="image-container">
                                <a href="#" class="ishi-customhover-fadeinflip ">
                                    <img
                                        src="https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/Left-banner-345x417.jpg"
                                        alt="" class="img-responsive">

                                </a>
                            </div>
                        </div>
                    </section>
                    <section class="featured-products">
                        <h3 class="page-title hidden-sm hidden-xs">
                            New Products
                        </h3>
                        <div class="block-title clearfix  hidden-lg hidden-md collapsed" data-target="#latest-container"
                             data-toggle="collapse">
                            <span class="h3">New Products</span>
                            <span class="navbar-toggler collapse-icons">
          <i class="fa fa-angle-down add"></i>
          <i class="fa fa-angle-up remove"></i>
        </span>
                        </div>
                        <div id="latest-container" class="collapse in data-toggler">
                            <div class="product-thumb transition">
                                <div class="image"><a
                                        href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;product_id=49"><img
                                            src="{{ asset('assets/images/6-370x370.jpg') }}" alt="Samsung Galaxy"
                                            title="Samsung Galaxy" class="img-responsive"></a></div>
                                <div class="caption">
                                    <h4>
                                        <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;product_id=49">Samsung
                                            Galaxy</a></h4>
                                    <p class="description">Samsung Galaxy Tab 10.1, is the world’s thinnest tablet,
                                        measuring 8.6 mm thickness, running w..</p>
                                    <p class="price">
                                        <span class="price-new">$20.00</span> <span class="price-old">$241.99</span>
                                        <span class="price-tax">Ex Tax: $15.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="product-thumb transition">
                                <div class="image"><a
                                        href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;product_id=48"><img
                                            src="{{ asset('assets/images/15-370x370.jpg') }}" alt="iPod Classic"
                                            title="iPod Classic" class="img-responsive"></a></div>
                                <div class="caption">
                                    <h4>
                                        <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;product_id=48">iPod
                                            Classic</a></h4>
                                    <p class="description">More room to move.

                                        With 80GB or 160GB of storage and up to 40 hours of battery life, the new..</p>
                                    <p class="price">
                                        <span class="price-new">$38.00</span> <span class="price-old">$122.00</span>
                                        <span class="price-tax">Ex Tax: $30.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="product-thumb transition">
                                <div class="image"><a
                                        href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;product_id=47"><img
                                            src="{{ asset('assets/images/11-370x370.jpg') }}" alt="HP LP3065"
                                            title="HP LP3065" class="img-responsive"></a></div>
                                <div class="caption">
                                    <h4>
                                        <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;product_id=47">HP
                                            LP3065</a></h4>
                                    <p class="description">Stop your co-workers in their tracks with the stunning new
                                        30-inch diagonal HP LP3065 Flat Panel Mon..</p>
                                    <p class="price">
                                        $122.00
                                        <span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="product-thumb transition">
                                <div class="image"><a
                                        href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;product_id=46"><img
                                            src="{{ asset('assets/images/8-370x370.jpg') }}" alt="Sony VAIO"
                                            title="Sony VAIO" class="img-responsive"></a></div>
                                <div class="caption">
                                    <h4>
                                        <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;product_id=46">Sony
                                            VAIO</a></h4>
                                    <p class="description">Unprecedented power. The next generation of processing
                                        technology has arrived. Built into the newest..</p>
                                    <p class="price">
                                        $1,202.00
                                        <span class="price-tax">Ex Tax: $1,000.00</span>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </section>
                </aside>

                <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                    <div class="breadcrumb-container">
                        <h2 class="page-title">Toys</h2>
                        <ul class="breadcrumb">
                            <li><a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=common/home"><i
                                        class="fa fa-home"></i></a></li>
                            <li>
                                <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20">Toys</a>
                            </li>
                        </ul>
                    </div>
                    <div class="products">
                        <div class="category_banner">
                            <div class="row">
                                <div class="col-sm-12 category-title">Toys</div>
                                <div class="col-sm-12 category_description"><p>
                                        Example of category description text</p>
                                </div>
                            </div>
                        </div>

                        <div class="refine-search">
                            <div class="row">
                                <div class="col-sm-12 category-list">
                                    <ul class="row">
                                        <li class="item col-md-3 col-sm-3 col-xs-4">
                                            <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20_26&amp;limit=5">
                                                <img
                                                    src="https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/gridcategory-img/2-370x370.jpg">
                                                <span class="subcategory-title">Buster suit (0)</span>
                                            </a>
                                        </li>
                                        <li class="item col-md-3 col-sm-3 col-xs-4">
                                            <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20_27&amp;limit=5">
                                                <img
                                                    src="https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/gridcategory-img/4-370x370.jpg">
                                                <span class="subcategory-title">Alice band (1)</span>
                                            </a>
                                        </li>
                                        <li class="item col-md-3 col-sm-3 col-xs-4">
                                            <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20_77&amp;limit=5">
                                                <img
                                                    src="https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/gridcategory-img/3-370x370.jpg">
                                                <span class="subcategory-title">Cloth diaper (0)</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="product-list-top">
                            <div class="row">
                                <div class="btn-list-grid">
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" id="grid-view" class="btn btn-default active"
                                                data-toggle="tooltip" title="" data-original-title="Grid"><i
                                                class="fa fa-th"></i></button>
                                        <button type="button" id="list-view" class="btn btn-default"
                                                data-toggle="tooltip" title="" data-original-title="List"><i
                                                class="fa fa-th-list"></i></button>
                                    </div>
                                </div>
                                <div class="compare-total"><a
                                        href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/compare"
                                        id="compare-total">Product Compare (0)</a></div>
                                <div class="pagination-right">
                                    <div class="sort-by-wrapper">
                                        <div class="col-md-2 text-right sort-by">
                                            <label class="control-label" for="input-sort">Sort By:</label>
                                        </div>
                                        <div class="col-md-3 text-right sort">
                                            <div class="select-wrapper">
                                                <select id="input-sort" class="form-control"
                                                        onchange="location = this.value;">
                                                    <option
                                                        value="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;sort=p.sort_order&amp;order=ASC&amp;limit=5"
                                                        selected="selected">Default
                                                    </option>

                                                    <option
                                                        value="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=ASC&amp;limit=5">
                                                        Name (A - Z)
                                                    </option>

                                                    <option
                                                        value="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=DESC&amp;limit=5">
                                                        Name (Z - A)
                                                    </option>

                                                    <option
                                                        value="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;sort=p.price&amp;order=ASC&amp;limit=5">
                                                        Price (Low &gt; High)
                                                    </option>

                                                    <option
                                                        value="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;sort=p.price&amp;order=DESC&amp;limit=5">
                                                        Price (High &gt; Low)
                                                    </option>

                                                    <option
                                                        value="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;sort=rating&amp;order=DESC&amp;limit=5">
                                                        Rating (Highest)
                                                    </option>

                                                    <option
                                                        value="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;sort=rating&amp;order=ASC&amp;limit=5">
                                                        Rating (Lowest)
                                                    </option>

                                                    <option
                                                        value="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;sort=p.model&amp;order=ASC&amp;limit=5">
                                                        Model (A - Z)
                                                    </option>

                                                    <option
                                                        value="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;sort=p.model&amp;order=DESC&amp;limit=5">
                                                        Model (Z - A)
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="show-wrapper">
                                        <div class="col-md-1 text-right show">
                                            <label class="control-label" for="input-limit">Show:</label>
                                        </div>
                                        <div class="col-md-2 text-right limit">
                                            <div class="select-wrapper">
                                                <select id="input-limit" class="form-control"
                                                        onchange="location = this.value;">
                                                    <option
                                                        value="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;limit=15">
                                                        15
                                                    </option>
                                                    <option
                                                        value="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;limit=25">
                                                        25
                                                    </option>
                                                    <option
                                                        value="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;limit=50">
                                                        50
                                                    </option>
                                                    <option
                                                        value="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;limit=75">
                                                        75
                                                    </option>
                                                    <option
                                                        value="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;limit=100">
                                                        100
                                                    </option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product-list-js" style="display: block;">
                            <div class="product-layout product-grid col-lg-3 col-md-6 col-sm-6 col-xs-12"
                                 data-countdowntime="">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;path=20&amp;product_id=42&amp;limit=5">
                                            <img src="{{ asset('assets/images/1-370x370.jpg') }}" alt="Apple Cinema"
                                                 title="Apple Cinema" class="img-responsive">
                                            <img class="product-img-extra img-responsive" alt="Apple Cinema"
                                                 title="Apple Cinema" src="{{ asset('assets/images/10-370x370.jpg') }}">
                                        </a>
                                        <div class="rating">

                          <span class="fa fa-stack">
                            <i class="fa fa-star yellow fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star yellow fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star yellow fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star gray fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star gray fa-stack-2x"></i>
                          </span>
                                        </div>


                                    </div>
                                    <div class="caption">
                                        <h4>
                                            <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;path=20&amp;product_id=42&amp;limit=5">Apple
                                                Cinema</a></h4>
                                        <p class="description">The 30-inch Apple Cinema HD Display delivers an amazing
                                            2560 x 1600 pixel resolution. Designed speci..</p>
                                        <p class="price">
                                            $122.00
                                            <span class="price-tax">Ex Tax: $100.00</span>
                                        </p>
                                        <div class="button-group">
                                            <div class="btn-quickview">
                                                <div class="quickview-button button" data-toggle="tooltip" title=""
                                                     data-original-title=" Quick View">
                                                    <a class="quickbox"
                                                       href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/quick_view&amp;product_id=42">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="eye-open" viewBox="0 0 1100 1100"><title>
                                                                    eye-open</title>
                                                                <path
                                                                    d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#eye-open" x="27%" y="28%"></use>
                                                        </svg>
                                                        <i class="fa fa-eye" aria-hidden="true"></i><span
                                                            class="lblcart">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-wishlist">
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="wishlist.add('42');"
                                                        data-original-title="Add to Wish List"><i
                                                        class="fa fa-heart"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="heart-shape-outline" viewBox="0 0 1150 1150"><title>
                                                                heart-shape-outline</title>
                                                            <path
                                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#heart-shape-outline" x="27%" y="31%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-compare">
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="compare.add('42');"
                                                        data-original-title="Compare this Product"><i
                                                        class="fa fa-exchange"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="report1" viewBox="0 0 1450 1450"><title>
                                                                report</title>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m480 258.667969h60v220h-60zm0 0"></path>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m200 118.667969h60v360h-60zm0 0"></path>
                                                            <path d="m340-1.332031h60v480h-60zm0 0"></path>
                                                            <path d="m60 358.667969h60v120h-60zm0 0"></path>
                                                            <path
                                                                d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path>
                                                            <path
                                                                d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path>
                                                            <path
                                                                d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#report1" x="28%" y="34%"></use>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="cart.add('42');" data-original-title="Add to Cart">
                                                    <div class="button-cart">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="addtocart" viewBox="0 0 1050 1050"><title>
                                                                    addtocart</title>
                                                                <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                          S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                          c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                                                <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                          S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                          c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                                                <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                          L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                          c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                          C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                                        </svg>
                                                    </div>
                                                    <span class="lblcart">Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout product-grid col-lg-3 col-md-6 col-sm-6 col-xs-12"
                                 data-countdowntime="">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;path=20&amp;product_id=30&amp;limit=5">
                                            <img src="{{ asset('assets/images/10-370x370.jpg') }}" alt="Canon EOS 5D"
                                                 title="Canon EOS 5D" class="img-responsive">
                                            <img class="product-img-extra img-responsive" alt="Canon EOS 5D"
                                                 title="Canon EOS 5D" src="{{ asset('assets/images/11-370x370.jpg') }}">
                                        </a>
                                        <div class="rating">

                          <span class="fa fa-stack">
                            <i class="fa fa-star yellow fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star yellow fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star yellow fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star yellow fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star gray fa-stack-2x"></i>
                          </span>
                                        </div>


                                    </div>
                                    <div class="caption">
                                        <h4>
                                            <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;path=20&amp;product_id=30&amp;limit=5">Canon
                                                EOS 5D</a></h4>
                                        <p class="description">Canon's press material for the EOS 5D states that it
                                            'defines (a) new D-SLR category', while we're n..</p>
                                        <p class="price">
                                            $122.00
                                            <span class="price-tax">Ex Tax: $100.00</span>
                                        </p>
                                        <div class="button-group">
                                            <div class="btn-quickview">
                                                <div class="quickview-button button" data-toggle="tooltip" title=""
                                                     data-original-title=" Quick View">
                                                    <a class="quickbox"
                                                       href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/quick_view&amp;product_id=30">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="eye-open" viewBox="0 0 1100 1100"><title>
                                                                    eye-open</title>
                                                                <path
                                                                    d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#eye-open" x="27%" y="28%"></use>
                                                        </svg>
                                                        <i class="fa fa-eye" aria-hidden="true"></i><span
                                                            class="lblcart">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-wishlist">
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="wishlist.add('30');"
                                                        data-original-title="Add to Wish List"><i
                                                        class="fa fa-heart"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="heart-shape-outline" viewBox="0 0 1150 1150"><title>
                                                                heart-shape-outline</title>
                                                            <path
                                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#heart-shape-outline" x="27%" y="31%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-compare">
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="compare.add('30');"
                                                        data-original-title="Compare this Product"><i
                                                        class="fa fa-exchange"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="report1" viewBox="0 0 1450 1450"><title>
                                                                report</title>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m480 258.667969h60v220h-60zm0 0"></path>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m200 118.667969h60v360h-60zm0 0"></path>
                                                            <path d="m340-1.332031h60v480h-60zm0 0"></path>
                                                            <path d="m60 358.667969h60v120h-60zm0 0"></path>
                                                            <path
                                                                d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path>
                                                            <path
                                                                d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path>
                                                            <path
                                                                d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#report1" x="28%" y="34%"></use>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="cart.add('30');" data-original-title="Add to Cart">
                                                    <div class="button-cart">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="addtocart" viewBox="0 0 1050 1050"><title>
                                                                    addtocart</title>
                                                                <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                          S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                          c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                                                <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                          S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                          c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                                                <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                          L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                          c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                          C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                                        </svg>
                                                    </div>
                                                    <span class="lblcart">Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout product-grid col-lg-3 col-md-6 col-sm-6 col-xs-12"
                                 data-countdowntime="">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;path=20&amp;product_id=47&amp;limit=5">
                                            <img src="{{ asset('assets/images/11-370x370.jpg') }}" alt="HP LP3065"
                                                 title="HP LP3065" class="img-responsive">
                                            <img class="product-img-extra img-responsive" alt="HP LP3065"
                                                 title="HP LP3065" src="{{ asset('assets/images/18-370x370.jpg') }}">
                                        </a>
                                        <div class="rating">

                          <span class="fa fa-stack">
                            <i class="fa fa-star yellow fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star yellow fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star gray fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star gray fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star gray fa-stack-2x"></i>
                          </span>
                                        </div>


                                    </div>
                                    <div class="caption">
                                        <h4>
                                            <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;path=20&amp;product_id=47&amp;limit=5">HP
                                                LP3065</a></h4>
                                        <p class="description">Stop your co-workers in their tracks with the stunning
                                            new 30-inch diagonal HP LP3065 Flat Panel Mon..</p>
                                        <p class="price">
                                            $122.00
                                            <span class="price-tax">Ex Tax: $100.00</span>
                                        </p>
                                        <div class="button-group">
                                            <div class="btn-quickview">
                                                <div class="quickview-button button" data-toggle="tooltip" title=""
                                                     data-original-title=" Quick View">
                                                    <a class="quickbox"
                                                       href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/quick_view&amp;product_id=47">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="eye-open" viewBox="0 0 1100 1100"><title>
                                                                    eye-open</title>
                                                                <path
                                                                    d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#eye-open" x="27%" y="28%"></use>
                                                        </svg>
                                                        <i class="fa fa-eye" aria-hidden="true"></i><span
                                                            class="lblcart">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-wishlist">
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="wishlist.add('47');"
                                                        data-original-title="Add to Wish List"><i
                                                        class="fa fa-heart"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="heart-shape-outline" viewBox="0 0 1150 1150"><title>
                                                                heart-shape-outline</title>
                                                            <path
                                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#heart-shape-outline" x="27%" y="31%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-compare">
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="compare.add('47');"
                                                        data-original-title="Compare this Product"><i
                                                        class="fa fa-exchange"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="report1" viewBox="0 0 1450 1450"><title>
                                                                report</title>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m480 258.667969h60v220h-60zm0 0"></path>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m200 118.667969h60v360h-60zm0 0"></path>
                                                            <path d="m340-1.332031h60v480h-60zm0 0"></path>
                                                            <path d="m60 358.667969h60v120h-60zm0 0"></path>
                                                            <path
                                                                d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path>
                                                            <path
                                                                d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path>
                                                            <path
                                                                d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#report1" x="28%" y="34%"></use>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="cart.add('47');" data-original-title="Add to Cart">
                                                    <div class="button-cart">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="addtocart" viewBox="0 0 1050 1050"><title>
                                                                    addtocart</title>
                                                                <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                          S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                          c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                                                <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                          S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                          c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                                                <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                          L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                          c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                          C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                                        </svg>
                                                    </div>
                                                    <span class="lblcart">Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout product-grid col-lg-3 col-md-6 col-sm-6 col-xs-12"
                                 data-countdowntime="">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;path=20&amp;product_id=28&amp;limit=5">
                                            <img src="{{ asset('assets/images/12-370x370.jpg') }}" alt="HTC Touch HD"
                                                 title="HTC Touch HD" class="img-responsive">
                                            <img class="product-img-extra img-responsive" alt="HTC Touch HD"
                                                 title="HTC Touch HD" src="{{ asset('assets/images/17-370x370.jpg') }}">
                                        </a>
                                        <div class="rating">

                          <span class="fa fa-stack">
                            <i class="fa fa-star yellow fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star yellow fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star gray fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star gray fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star gray fa-stack-2x"></i>
                          </span>
                                        </div>


                                    </div>
                                    <div class="caption">
                                        <h4>
                                            <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;path=20&amp;product_id=28&amp;limit=5">HTC
                                                Touch HD</a></h4>
                                        <p class="description">HTC Touch - in High Definition. Watch music videos and
                                            streaming content in awe-inspiring high defin..</p>
                                        <p class="price">
                                            $122.00
                                            <span class="price-tax">Ex Tax: $100.00</span>
                                        </p>
                                        <div class="button-group">
                                            <div class="btn-quickview">
                                                <div class="quickview-button button" data-toggle="tooltip" title=""
                                                     data-original-title=" Quick View">
                                                    <a class="quickbox"
                                                       href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/quick_view&amp;product_id=28">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="eye-open" viewBox="0 0 1100 1100"><title>
                                                                    eye-open</title>
                                                                <path
                                                                    d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#eye-open" x="27%" y="28%"></use>
                                                        </svg>
                                                        <i class="fa fa-eye" aria-hidden="true"></i><span
                                                            class="lblcart">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-wishlist">
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="wishlist.add('28');"
                                                        data-original-title="Add to Wish List"><i
                                                        class="fa fa-heart"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="heart-shape-outline" viewBox="0 0 1150 1150"><title>
                                                                heart-shape-outline</title>
                                                            <path
                                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#heart-shape-outline" x="27%" y="31%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-compare">
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="compare.add('28');"
                                                        data-original-title="Compare this Product"><i
                                                        class="fa fa-exchange"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="report1" viewBox="0 0 1450 1450"><title>
                                                                report</title>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m480 258.667969h60v220h-60zm0 0"></path>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m200 118.667969h60v360h-60zm0 0"></path>
                                                            <path d="m340-1.332031h60v480h-60zm0 0"></path>
                                                            <path d="m60 358.667969h60v120h-60zm0 0"></path>
                                                            <path
                                                                d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path>
                                                            <path
                                                                d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path>
                                                            <path
                                                                d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#report1" x="28%" y="34%"></use>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="cart.add('28');" data-original-title="Add to Cart">
                                                    <div class="button-cart">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="addtocart" viewBox="0 0 1050 1050"><title>
                                                                    addtocart</title>
                                                                <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                          S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                          c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                                                <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                          S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                          c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                                                <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                          L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                          c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                          C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                                        </svg>
                                                    </div>
                                                    <span class="lblcart">Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout product-grid col-lg-3 col-md-6 col-sm-6 col-xs-12"
                                 data-countdowntime="2023-12-28">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;path=20&amp;product_id=40&amp;limit=5">
                                            <img src="{{ asset('assets/images/14-370x370.jpg') }}" alt="iPhone"
                                                 title="iPhone" class="img-responsive">
                                            <img class="product-img-extra img-responsive" alt="iPhone" title="iPhone"
                                                 src="{{ asset('assets/images/17-370x370.jpg') }}">
                                        </a>
                                        <div class="rating">

                          <span class="fa fa-stack">
                            <i class="fa fa-star yellow fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star yellow fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star yellow fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star yellow fa-stack-2x"></i>
                          </span>

                                            <span class="fa fa-stack">
                            <i class="fa fa-star gray fa-stack-2x"></i>
                          </span>
                                        </div>

                                        <div class="countdown-container">
                                            <div class="countdown-days counter">
                                                <span class="data">241</span>
                                                <span class="lbl">Days</span>
                                            </div>
                                            <div class="countdown-hours counter">
                                                <span class="data">01</span>
                                                <span class="lbl">Hours</span>
                                            </div>
                                            <div class="countdown-minutes counter">
                                                <span class="data">23</span>
                                                <span class="lbl">Min</span>
                                            </div>
                                            <div class="countdown-seconds counter">
                                                <span class="data">09</span>
                                                <span class="lbl">Sec</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="caption">
                                        <h4>
                                            <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/product&amp;path=20&amp;product_id=40&amp;limit=5">iPhone</a>
                                        </h4>
                                        <p class="description">iPhone is a revolutionary new mobile phone that allows
                                            you to make a call by simply tapping a name o..</p>
                                        <p class="price">
                                            <span class="price-new">$50.00</span> <span class="price-old">$123.20</span>
                                            <span class="price-tax">Ex Tax: $40.00</span>
                                        </p>
                                        <div class="button-group">
                                            <div class="btn-quickview">
                                                <div class="quickview-button button" data-toggle="tooltip" title=""
                                                     data-original-title=" Quick View">
                                                    <a class="quickbox"
                                                       href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/quick_view&amp;product_id=40">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="eye-open" viewBox="0 0 1100 1100"><title>
                                                                    eye-open</title>
                                                                <path
                                                                    d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#eye-open" x="27%" y="28%"></use>
                                                        </svg>
                                                        <i class="fa fa-eye" aria-hidden="true"></i><span
                                                            class="lblcart">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-wishlist">
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="wishlist.add('40');"
                                                        data-original-title="Add to Wish List"><i
                                                        class="fa fa-heart"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="heart-shape-outline" viewBox="0 0 1150 1150"><title>
                                                                heart-shape-outline</title>
                                                            <path
                                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#heart-shape-outline" x="27%" y="31%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-compare">
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="compare.add('40');"
                                                        data-original-title="Compare this Product"><i
                                                        class="fa fa-exchange"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="report1" viewBox="0 0 1450 1450"><title>
                                                                report</title>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m480 258.667969h60v220h-60zm0 0"></path>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m200 118.667969h60v360h-60zm0 0"></path>
                                                            <path d="m340-1.332031h60v480h-60zm0 0"></path>
                                                            <path d="m60 358.667969h60v120h-60zm0 0"></path>
                                                            <path
                                                                d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path>
                                                            <path
                                                                d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path>
                                                            <path
                                                                d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path
                                                                d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#report1" x="28%" y="34%"></use>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="cart.add('40');" data-original-title="Add to Cart">
                                                    <div class="button-cart">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="addtocart" viewBox="0 0 1050 1050"><title>
                                                                    addtocart</title>
                                                                <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                          S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                          c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                                                <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                          S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                          c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                                                <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                          L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                          c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                          C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                                        </svg>
                                                    </div>
                                                    <span class="lblcart">Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="category-pagination">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12 text-left pagination-desc">Showing 1 to 5 of 14 (3
                                    Pages)
                                </div>
                                <div class="col-sm-6 col-xs-12 text-right">
                                    <ul class="pagination">
                                        <li class="active"><span>1</span></li>
                                        <li>
                                            <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;limit=5&amp;page=2">2</a>
                                        </li>
                                        <li>
                                            <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;limit=5&amp;page=3">3</a>
                                        </li>
                                        <li>
                                            <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;limit=5&amp;page=2">&gt;</a>
                                        </li>
                                        <li>
                                            <a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=product/category&amp;path=20&amp;limit=5&amp;page=3">&gt;|</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
