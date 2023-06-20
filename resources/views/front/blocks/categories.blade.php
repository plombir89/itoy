<div class="box">
    <h2 class="page-title hidden-sm hidden-xs">
        {{ __('Categories') }}
    </h2>
    <div class="block-title clearfix  hidden-lg hidden-md collapsed" data-target="#box-container" data-toggle="collapse">
        <span class="page-title">{{ __('Categories') }}</span>
        <span class="navbar-toggler collapse-icons">
          <i class="fa fa-angle-down add"></i>
          <i class="fa fa-angle-up remove"></i>
        </span>
    </div>
    <div id="box-container" class="collapse data-toggler">
        <ul class="category-top-menu">
            @foreach($categories as $category)
                <li>
                    <a href="{{ route('product.index',[app()->getLocale(),'category' => $category['id']]) }}" class="list-group-item">{{ $category->item->title }} ({{ $category->products_count }})</a>
                    @if($category->childs->count() > 0)
                        <span class="navbar-toggler collapse-icons" data-target="#childlist{{ $category['id'] }}" data-toggle="collapse">
                            <i class="fa fa-angle-down add"></i>
                            <i class="fa fa-angle-up remove"></i>
                        </span>
                        <div id="childlist{{ $category['id'] }}" class="collapse @if(isset($cat->parent_id) && $cat->parent_id == $category['id']) in @endif">
                            <ul class="category-sub-menu">
                                @foreach($category->childs as $sub_category)
                                    <li>
                                        <a href="{{ route('product.index',[app()->getLocale(),'category' => $sub_category->id]) }}" class="list-group-item">&nbsp;&nbsp;&nbsp;- {{ $sub_category->item->title }} ({{ $sub_category->products_count }})</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>
