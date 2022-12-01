<div class="left-sidebar">
    <h2>Category</h2>
    <div class="panel-group category-products" id="accordian">
        @foreach ($category as $cat)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#{{ $cat->ID }}">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            {{ $cat->KATEGORI }}
                        </a>
                    </h4>
                </div>
                <div id="{{ $cat->ID }}" class="panel-collapse collapse">
                    <div class="panel-body">
                        @foreach ($content as $con)
                            <ul>
                                @if ($con->KATEGORI == $cat->ID)
                                    <li><a href="#">{{ $con->BARANG }}</a></li>
                                @endif
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
        <!-- Default dropend button -->
    </div>
    <!--/category-products-->
</div>
