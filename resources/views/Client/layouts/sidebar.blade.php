<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
    <div class="side-bar p-sm-4 p-3">
        <div class="search-hotel border-bottom py-2">
            <h3 class="agileits-sear-head mb-3">{{ __('file.key33') }}...</h3>
            <form action="#" method="post">
                <input type="search" placeholder="{{ __('file.key34') }}..." name="search" required="">
                <input type="submit" value=" ">
            </form>
        </div>
        <!-- price -->
       
        <div class="range border-bottom py-2">
            <h3 class="agileits-sear-head mb-3">{{ __('file.key35') }}</h3>
            <span class="sr-only">(current)</span>
            <div class="w3l-range">
                <ul>
                     @foreach( $brands as $brands )
                    <li>
                        <a href="{{route('indexbrand',[$brands->id])}}">{{$brands->name}}</a>
                    </li>
                    
                    @endforeach
                </ul>
            </div>
        </div>
        
        <!-- //price -->
        <!-- discounts -->
        <div class="left-side border-bottom py-2">
            <h3 class="agileits-sear-head mb-3">{{ __('file.key36') }}</h3>
            <ul>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key37') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key38') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key39') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key40') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key41') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key42') }}</span>
                </li>
            </ul>
        </div>
        <!-- //discounts -->
        <!-- reviews -->
        <div class="customer-rev border-bottom left-side py-2">
            <h3 class="agileits-sear-head mb-3">{{ __('file.key43') }}</h3>
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>5.0</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>4.0</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                        <span>3.5</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>3.0</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                        <span>2.5</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- //reviews -->
        <!-- electronics -->
        <div class="left-side border-bottom py-2">
            <h3 class="agileits-sear-head mb-3">{{ __('file.key44') }}</h3>
            <ul>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key45') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key46') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key47') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key48') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key49') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key50') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key51') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key52') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key53') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key54') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key55') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key56') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key57') }}</span>
                </li>
            </ul>
        </div>
        <!-- //electronics -->
        <!-- delivery -->
        <div class="left-side border-bottom py-2">
            <h3 class="agileits-sear-head mb-3">{{ __('file.key58') }}</h3>
            <ul>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key59') }}</span>
                </li>
            </ul>
        </div>
        <!-- //delivery -->
        <!-- arrivals -->
        <div class="left-side border-bottom py-2">
            <h3 class="agileits-sear-head mb-3">{{ __('file.key60') }}</h3>
            <ul>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key61') }}</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">{{ __('file.key62') }}</span>
                </li>
            </ul>
        </div>
        <!-- //arrivals -->
        <!-- best seller -->
        <div class="f-grid py-2">
            <h3 class="agileits-sear-head mb-3">{{ __('file.key63') }}</h3>
            <div class="box-scroll">
                <div class="scroll">
                    <div class="row">
                        <div class="col-lg-3 col-sm-2 col-3 left-mar">
                            <img src="{{asset('assets/client/images/k1.png')}}" alt="" >
                        </div>
                        <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                            <a href="">{{ __('file.key64') }}</a>
                            <a href="" class="price-mar mt-2">{{ __('file.key65') }}</a>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-lg-3 col-sm-2 col-3 left-mar">
                            <img src="{{asset('assets/client/images/kk2.jpg')}}" alt="" >
                        </div>
                        <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                            <a href="">{{ __('file.key66') }}</a>
                            <a href="" class="price-mar mt-2">{{ __('file.key67') }}</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-2 col-3 left-mar">
                            <img src="{{asset('assets/client/images/kk3.jpg')}}" alt="" >
                        </div>
                        <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                            <a href="">{{ __('file.key68') }}</a>
                            <a href="" class="price-mar mt-2">{{ __('file.key69') }} </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- //best seller -->
    </div>
    <!-- //product right -->
</div>