<!--product area end-->
<div class="home_section_style4">
    @foreach (App\Models\Category::where('parent_id',0)->select(['id','name'])->get() as $category)
        @php
            $sub_categories = $category->child()->select(['id','name'])->get();
        @endphp
        <div class="home_section_design" id="category_post_list_{{$category->id}}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="product_header">
                                    <div class="section_title s_title_style3">
                                        <h2>{{$category->name}}</h2>
                                    </div>
                                    {{-- <pagination v-if="load" :data="products" :limit="-1" @pagination-change-page="get_products">--}}
                                        <div class="product_tab_btn">
                                            <ul class="nav" v-if="load">
                                                <li>
                                                    <span slot="prev-nav">
                                                        <a href="#"  @click.prevent="get_products(prevPageUrl)">
                                                            <i :style="`${!prevPageUrl && 'background: #b3b2b2;border-color: #a9a9a9;'}`" class="ion-ios-arrow-back left-icon"></i>
                                                        </a>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span slot="next-nav">
                                                        <a href="#" @click.prevent="get_products(nextPageUrl)">
                                                            <i :style="`${!nextPageUrl && 'background: #b3b2b2;border-color: #a9a9a9;'}`" class="ion-ios-arrow-forward right-icon"></i>
                                                        </a>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    {{-- </pagination> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home_style4_inner">
                    <div class="row no-gutters">
                        <div class="col-lg-3">
                            <div class="category_menu">
                                <div class="category_menu_content" style="position: relative; z-index: 99;">
                                    <ul>
                                        @foreach ($sub_categories as $subcategory)
                                            <li><a href="#" @click.prevent="get_products(`/get-category-product/{{$subcategory->id}}/${perPage}/1/json`)">{{ $subcategory->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="category_menu_img" style="z-index: 1;">
                                    <img src="{{ asset('contents/frontend') }}/assets/img/icon/categori-menu1.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-12">
                            <!--product area start-->
                            <div class="product_area">
                                <div class="row no-gutters" v-if="load">
                                    <div class="col-md-3" v-for="product in products" :key="(Math.random()*10000)">
                                        <article class="single_product">

                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html">
                                                    <img v-if="product.related_images[0]" :src="`/${product.related_images[0].image}`" alt="">
                                                </a>
                                                <a class="secondary_img" href="product-details.html">
                                                    <img v-if="product.related_images[1]" :src="`/${product.related_images[1].image}`" alt="">
                                                    <img v-else src="{{ asset('contents/frontend') }}/assets/img/product/product18.jpg" alt="">
                                                </a>
                                                <div class="label_product">

                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist">
                                                            <a href="wishlist.html" title="Add to Wishlist">
                                                                <i class="ion-android-favorite-outline"></i>
                                                            </a>
                                                        </li>
                                                        <li class="compare">
                                                            <a href="#" title="Add to Compare">
                                                                <i class="ion-ios-settings-strong"></i>
                                                            </a>
                                                        </li>
                                                        <li class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name">
                                                        <a href="product-details.html">@{{product.product_name}} </a>
                                                    </h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$65.00</span>
                                                        <span class="current_price">$@{{product.default_price}}</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!--product area end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @push('js')
            <script>
                if (document.getElementById('category_post_list_{{$category->id}}')) {
                    new Vue({
                        el: '#category_post_list_{{$category->id}}',
                        store: store,
                        data: function(){
                            return {
                                products: [],
                                total: 0,
                                lastPage: 0,
                                perPage: 4,
                                currentPage: 1,
                                load: false,
                                nextPageUrl: '',
                                prevPageUrl: '',

                                defaultUrl: '',
                            }
                        },
                        created: function(){
                            this.defaultUrl = `/get-category-product/{{$category->id}}/${this.perPage}/${this.currentPage}/json`;
                            this.get_products(this.defaultUrl);
                        },
                        methods:{
                            get_products: function(url){
                                // console.log(url);
                                url.length>0 &&
                                axios.get(url)
                                    .then((res)=>{
                                        // console.log(res.data);
                                        this.products = res.data.items;
                                        this.total = res.data.total;
                                        this.lastPage = res.data.lastPage;
                                        this.perPage = res.data.perPage;
                                        this.currentPage = res.data.currentPage;
                                        this.nextPageUrl = res.data.nextPageUrl;
                                        this.prevPageUrl = res.data.prevPageUrl;

                                        this.load = true;
                                    })
                            }
                        }
                    });
                }
            </script>
        @endpush
    @endforeach

</div>

