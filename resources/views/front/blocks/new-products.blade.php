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
        @foreach($newProducts as $product)
        <div class="product-thumb transition">
            <div class="image">
                <a
                    href="{{ route('product.show', [app()->getLocale(), $product->item->slug]) }}">
                    <img
                        src="{{ asset('storage/'. $product->img) }}" alt="{{ $product->item->title }}"
                        title="{{ $product->item->title }}" class="img-responsive">
                </a>
            </div>
            <div class="caption">
                <h4>
                    <a href="{{ route('product.show', [app()->getLocale(), $product->item->slug]) }}">{{ $product->item->title }}</a></h4>
                <p class="description">Samsung Galaxy Tab 10.1, is the world’s thinnest tablet,
                    measuring 8.6 mm thickness, running w..</p>
                <p class="price">
                    @if($product->discount > 0)
                        <span class="price-new">{{ $product->price }} MDL</span> <span class="price-old">{{ $product->discount }} MDL</span>
                    @else
                        {{ $product->price }} MDL
                    @endif
                </p>
            </div>
        </div>
        @endforeach
    </div>
</section>
