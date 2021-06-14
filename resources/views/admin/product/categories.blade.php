@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid" id="product_list">
            @include('admin.layouts.includes.bread_cumb',['title'=>'View Categories'])
            <p>Manage categories.</p>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <ul class="filter_nav d-flex flex-wrap">
                                <li><a href="#" class="custom_white_btn">Create Category</a></li>
                                <li><a href="#" class="custom_white_btn">Delete</a></li>
                                <li>
                                    <input type="text" class="custom_input" name="" placeholder="Filter by keyword">
                                </li>
                                <li>
                                    <button class="custom_white_btn">Filter</button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body dragable_list">
                            <ul class='sTree2 listsClass' id='sTree2'>
                                @php
                                    function printNestedArray($a,$module) {
                                        $a = (object) $a;
                                        $id = $a->id;
                                        $category_name = $a->name;

                                        echo "<li class='s-l-open' id='item_$id' data-module='$module'>";
                                            echo "<div>{$category_name}</div>";
                                            if (isset($a->child) && is_array($a->child)) {
                                                // dd($a->child,is_array($a->child));

                                                echo "<ul class=''>";
                                                    // dd($a->child);
                                                    foreach ($a->child as $child) {
                                                        $child = (object) $child;
                                                        $module = $child->name.'_'.$child->id;
                                                        printNestedArray($child,$module);
                                                    }
                                                echo "</ul>";
                                            } else {
                                                // echo htmlspecialchars($value) . '<br />';
                                            }
                                        echo "</li>";
                                    }
                                    foreach ($categories as $key => $category) {
                                        $category = (object) $category;
                                        $module = $category->name.'_'.$category->id;
                                        printNestedArray($category,$module);
                                    }
                                @endphp
                            </ul>

                            {{-- <ul class="sTree2 listsClass" id="sTree2"> --}}
                            <ul class="d-none">
                                <li id="item_a" data-module="a">
                                    <div>Item a</div>
                                </li>
                                <li class="s-l-open" id="item_b" data-module="b">
                                    <div>Item b</div>
                                    <ul class="">
                                        <li id="item_b1" data-module="b">
                                            <div>Item b1</div>
                                        </li>
                                        <li id="item_b2" data-module="b">
                                            <div><span class="clickable">Item b2 - clickable text</span></div>
                                        </li>
                                        <li id="item_b3" data-module="b">
                                            <div>Item b3</div>
                                        </li>
                                        <li id="item_b4" data-module="b">
                                            <div>Item b4</div>
                                        </li>
                                        <li id="item_b5" data-module="b">
                                            <div>Item b5</div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="" id="item_c" data-module="c">
                                    <div>Item c - c block disallows inserting items from other blocks</div>
                                    <ul class="">
                                        <li id="item_c1" data-module="c">
                                            <div>Item c1</div>
                                        </li>
                                        <li id="item_c2" data-module="c">
                                            <div>Item c2</div>
                                        </li>
                                        <li id="item_c3" data-module="c">
                                            <div>Item c3</div>
                                        </li>
                                        <li id="item_c4" data-module="c">
                                            <div>Item c4</div>
                                        </li>
                                        <li id="item_c5" data-module="c">
                                            <div>Item c5</div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="" id="item_d" data-module="d">
                                    <div>Item d</div>
                                    <ul class="">
                                        <li id="item_d1" data-module="d">
                                            <div>Item d1</div>
                                        </li>
                                        <li id="item_d2" data-module="d">
                                            <div>Item d2</div>
                                        </li>
                                        <li id="item_d3" data-module="d">
                                            <div>Item d3</div>
                                        </li>
                                        <li id="item_d4" data-module="d">
                                            <div>Item d4</div>
                                        </li>
                                        <li id="item_d5" data-module="d">
                                            <div>Item d5</div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="" id="item_e" data-module="e">
                                    <div>Item e</div>
                                </li>
                                <li class="" id="item_f" data-module="f">
                                    <div>Item f</div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->

    @push('cjs')
        <script src="{{ asset('contents/admin') }}/plugins/sortable_list/jquery-sortable-lists.min.js"></script>
        <script src="{{ asset('contents/admin') }}/plugins/sortable_list/jquery-sortable-lists-mobile.min.js"></script>
        <script src="{{ asset('contents/admin') }}/custom_product_vue.js"></script>
        <script>
            var options = {
                placeholderCss: {'background-color': '#ff8'},
                hintCss: {'background-color':'#bbf'},
                onChange: function( cEl )
                {
                    console.log( 'onChange' );
                },
                complete: function( cEl )
                {
                    console.log( 'complete',cEl );
                },
                isAllowed: function( cEl, hint, target )
                {
                    // Be carefull if you test some ul/ol elements here.
                    // Sometimes ul/ols are dynamically generated and so they have not some attributes as natural ul/ols.
                    // Be careful also if the hint is not visible. It has only display none so it is at the previous place where it was before(excluding first moves before showing).
                    if( target.data('module') === 'c' && cEl.data('module') !== 'c' )
                    {
                        hint.css('background-color', '#ff9999');
                        return false;
                    }
                    else
                    {
                        hint.css('background-color', '#99ff99');
                        return true;
                    }
                },
                opener: {
                    active: true,
                    as: 'html',  // if as is not set plugin uses background image
                    close: '<i class="fa fa-minus c3"></i>',  // or 'fa-minus c3'
                    open: '<i class="fa fa-plus"></i>',  // or 'fa-plus'
                    openerCss: {
                        'display': 'inline-block',
                        //'width': '18px', 'height': '18px',
                        'float': 'left',
                        'margin-left': '-35px',
                        'margin-right': '5px',
                        //'background-position': 'center center', 'background-repeat': 'no-repeat',
                        'font-size': '1.1em'
                    }
                },
                ignoreClass: 'clickable'
            };

            var optionsPlus = {
                insertZonePlus: true,
                placeholderCss: {'background-color': '#ff8'},
                hintCss: {'background-color':'#bbf'},
                opener: {
                    active: true,
                    as: 'html',  // if as is not set plugin uses background image
                    close: '<i class="fa fa-minus c3"></i>',
                    open: '<i class="fa fa-plus"></i>',
                    openerCss: {
                        'display': 'inline-block',
                        'float': 'left',
                        'margin-left': '-35px',
                        'margin-right': '5px',
                        'font-size': '1.1em'
                    }
                }
            };

            $('#sTree2').sortableLists( options );
            $('#sTreePlus').sortableLists( optionsPlus );

            $('#toArrBtn').on( 'click', function(){ console.log( $('#sTree2').sortableListsToArray() ); } );
            $('#toHierBtn').on( 'click', function() { console.log( $('#sTree2').sortableListsToHierarchy() ); } );
            $('#toStrBtn').on( 'click', function() { console.log( $('#sTree2').sortableListsToString() ); } );
            $('.descPicture').on( 'click', function(e) { $(this).toggleClass('descPictureClose'); } );

            $('.clickable').on('click', function(e)	{ alert('Click works fine! IgnoreClass stopped onDragStart event.'); });

            /* Scrolling anchors */
            $('#toPictureAnch').on( 'mousedown', function( e ) { scrollToAnch( 'pictureAnch' ); return false; } );
            $('#toBaseElementAnch').on( 'mousedown', function( e ) { scrollToAnch( 'baseElementAnch' ); return false; } );
            $('#toBaseElementAnch2').on( 'mousedown', function( e ) { scrollToAnch( 'baseElementAnch' ); return false; } );
            $('#toCssPatternAnch').on( 'mousedown', function( e ) { scrollToAnch( 'cssPatternAnch' ); return false; } );

            function scrollToAnch( id )
            {
                return true;
                $('html, body').animate({
                    scrollTop: '-=-' + $("#" + id).offset().top + 'px'
                }, 750);
                return false;
            }
            // $('#myList').sortableLists( );
        </script>
        <style>
            #s-l-placeholder{
                background: #3f3f3f!important;
            }
            #s-l-hint,
            #s-l-hint-wrapper{
                border: 1px solid #3f3f3f!important;
                background: #222!important;
            }
            .dragable_list ul, .dragable_list li{
                color: white!important;
            }
        </style>
    @endpush
@endsection

