@extends('layouts.master')

@section('title')@parent - {{ trans('globals.home') }} @stop

@include('partial.message')

@section('content')

<section class="products_view">

    <div class="home-layout">

        {{-- -------------------------------------------------- --}} {{-- -------------------- carousel -------------------- --}} {{-- -------------------------------------------------- --}}

        <div class="bella-cat mobile">
          
          <div class="vert-category col-md-3 col-sm-2 ">
                  <ul>
                      <li>
                          <a href="http://localhost/products?category=1%257C%25D0%2590%25D1%2580%25D1%258C%25D1%2581%2B%25D0%25B0%25D1%2580%25D1%2587%25D0%25B8%25D0%25BB%25D0%25B3%25D0%25B0%25D0%25B0">Skin care</a>

                      </li>
                      <li>
                          <a href="http://localhost/products?category=2%257C%25D0%259D%25D2%25AF%25D2%25AF%25D1%2580%2B%25D0%25B1%25D1%2583%25D0%25B4%25D0%25B0%25D0%25BB%25D1%2582">make up</a>

                      </li>
                      <li>
                          <a href="http://localhost/products?category=3%257C%25D2%25AE%25D1%2581%2B%25D0%25B1%25D0%25B8%25D0%25B5%2B%25D0%25B0%25D1%2580%25D1%2587%25D0%25B8%25D0%25BB%25D0%25B3%25D0%25B0%25D0%25B0">Hair / body care</a>

                      </li>
                      <li>
                          <a href="http://localhost/products?category=4%257C%25D2%25AE%25D0%25BD%25D1%258D%25D1%2580%25D1%2582%25D1%258D%25D0%25B9%2B%25D1%2583%25D1%2581">Perfume</a>

                      </li>
                      <li>
                          <a href="http://localhost/products?category=5%257C%25D0%25AD%25D1%2580%25D2%25AF%25D2%25AF%25D0%25BB%2B%25D0%25BC%25D1%258D%25D0%25BD%25D0%25B4">Health</a>

                      </li>
                      <li>
                          <a href="http://localhost/products?category=5%257C%25D0%25AD%25D1%2580%25D2%25AF%25D2%25AF%25D0%25BB%2B%25D0%25BC%25D1%258D%25D0%25BD%25D0%25B4">Brushes</a>

                      </li>
                      <li>
                          <a href="http://localhost/products">All goods</a>

                      </li>
                  </ul>
          </div>
          <div class="col-md-9 col-sm-10 home-carousel-box">

              <div id="store-home-carousel" class="carousel slide" data-ride="carousel">

                  {{-- indicators --}}
                  <ol class="carousel-indicators">
                      @for ($s=0; $s
                      <count($suggestion[ 'carousel']); $s++) <li data-target="#store-home-carousel" data-slide-to="{{ $s }}" @if ($s==0) class="active" @endif>
                          </li>
                          @endfor
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner img-animate" role="listbox">

                      <?php $pos = 0; ?>
                          @foreach ($suggestion['carousel'] as $product) {{-- slide items --}}
                          <div class="item @if ($i++==0) active @endif">

                              @if (isset($banner[$pos]))
                              <img src="{{ $banner[$pos++] }}" alt="{{ $product['name'] }}"> @else
                              <img src="/img/no-image.jpg" alt="{{ $product['name'] }}"> @endif {{-- panel --}}
                              <div class="jumbotron {{ $jumbotronClasses[mt_rand(0,1)] }} ">

                                  <h5>{{ $product['name'] }}</h5>

                                  <p class="description">{{ str_limit($product['description'], 200,'...') }}</p>

                                  @if ($product['price'] > 0)
                                  <p class="price">
                                      <strong>{!! \Utility::showPrice($product['price']) !!}</strong>
                                  </p>
                                  @endif

                                  <hr> f
                              </div>

                          </div> {{-- end item --}} @endforeach

                  </div> {{-- end carousel-inner --}}

              </div>

          </div>
        </div>

        {{-- end carousel --}}
        <div class="home-bestselling">
            <div class="col-md-2 bestselling-title">
              <a href="{{ route('products') }}">
                <span class="b-title">Featured products</span>
                <span class="b-shopnow">More</span>
              </a>
            </div>
            <div class="col-md-10 bestselling-product">
                @foreach ($suggestion['purchased'] as $product)
                    @include('products.partial.productBox', $product)
                @endforeach
            </div>
        </div>

    <!-- product section start-->
    <div class="home-cat-trend">

        <div class="col-lg-3 prodsec">
            <div class="prodsectobgcolor">
                <p class="prodsecto">make up</p>

            </div>
            <div class="row trend-cat">
                <ul>
                    <li>
                        <a href="http://localhost/products?category=1%257C%25D0%2590%25D1%2580%25D1%258C%25D1%2581%2B%25D0%25B0%25D1%2580%25D1%2587%25D0%25B8%25D0%25BB%25D0%25B3%25D0%25B0%25D0%25B0">Skin care</a>

                    </li>
                    <li>
                        <a href="http://localhost/products?category=2%257C%25D0%259D%25D2%25AF%25D2%25AF%25D1%2580%2B%25D0%25B1%25D1%2583%25D0%25B4%25D0%25B0%25D0%25BB%25D1%2582">make up</a>

                    </li>
                    <li>
                        <a href="http://localhost/products?category=3%257C%25D2%25AE%25D1%2581%2B%25D0%25B1%25D0%25B8%25D0%25B5%2B%25D0%25B0%25D1%2580%25D1%2587%25D0%25B8%25D0%25BB%25D0%25B3%25D0%25B0%25D0%25B0">Hair / body care</a>

                    </li>
                    <li>
                        <a href="http://localhost/products?category=4%257C%25D2%25AE%25D0%25BD%25D1%258D%25D1%2580%25D1%2582%25D1%258D%25D0%25B9%2B%25D1%2583%25D1%2581">Perfume</a>

                    </li>
                    <li>
                        <a href="http://localhost/products?category=5%257C%25D0%25AD%25D1%2580%25D2%25AF%25D2%25AF%25D0%25BB%2B%25D0%25BC%25D1%258D%25D0%25BD%25D0%25B4">Health</a>

                    </li>
                    <li>
                        <a href="http://localhost/products?category=5%257C%25D0%25AD%25D1%2580%25D2%25AF%25D2%25AF%25D0%25BB%2B%25D0%25BC%25D1%258D%25D0%25BD%25D0%25B4">Brushes</a>

                    </li>
                    <li>
                        <a href="http://localhost/products">All goods</a>

                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-9 trend-cat-right" class="sectionprodborder">

            <div class="col-md-5 trend-cat-slide">   
              <div class="img-animate">
                <img alt="Bella" title="Bella" src="img/product/slidema.jpg">    
              </div>             
            </div>

            <div class="col-lg-7 prodpadding">
              @foreach ($suggestion['categories'] as $product)
                  @include('products.partial.homeProductBox', $product)
              @endforeach
            </div>
        </div>

    </div>
    <!-- product section end-->

    {{-- -------------------------------------------------- --}}
    {{-- ------------------ Product List ------------------ --}}
    {{-- -------------------------------------------------- --}}

    @parent

    @section('center_content')
      <div class="product-trend">
   
        {{-- categories suggestions --}}
       
        <div class="home-bestselling">
          <div class="col-md-2 bestselling-title">
            <a href="{{ route('products') }}">
              <span class="b-title">Recommended products</span>
              <span class="b-shopnow">More</span>
            </a>
          </div>
          <div class="col-md-10 bestselling-product">
            @foreach ($suggestion['categories'] as $product)
                @include('products.partial.productBox', $product)
            @endforeach
          </div>
        </div>

        {{-- viewed suggestions --}}

        <div class="home-bestselling">
          
          <div class="marketing">
            @foreach ($suggestion['viewed'] as $product)
                @include('products.partial.productBox', $product)
            @endforeach
          </div>
        </div>
      </div>
    @stop {{-- end center_content --}}

</section> {{-- end products_view --}}

@stop {{-- end content --}}
