@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container" id="product_list">
            @include('admin.layouts.includes.bread_cumb',['title'=>'View Categories'])
            <p>Manage categories.</p>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <ul class="filter_nav d-flex flex-wrap">
                                <li><a href="{{ route('admin_product_create_category') }}" class="custom_white_btn">Create Category</a></li>
                                <li><a href="#" class="custom_white_btn">Delete</a></li>
                                {{-- <li>
                                    <input type="text" class="custom_input" name="" placeholder="Filter by keyword">
                                </li>
                                <li>
                                    <button class="custom_white_btn">Filter</button>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="card-body dragable_list">
                            <ul>
                                <li></li>
                            </ul>
                            <ul class='sTree2 listsClass' id='sTree2'>
                            {{-- <ul class='sTree2 listsClass' id='sTreePlus'> --}}
                                @php
                                    function printNestedArray($a,$module,$parent_id) {
                                        $a = (object) $a;
                                        $id = $a->id;
                                        $category_name = $a->name;

                                        echo "<li class='s-l-open' id='{$category_name}_{$id}' data-id='$id' data-parent_id='$parent_id' data-name='$category_name' data-module='$module'>";
                                            echo "<div>
                                                    <div class='d-inline-flex clickable align-items-center'>
                                                        <input type='checkbox' value='$id' class='form-check-inline control_check_box clickable' data-parent='$module' />
                                                        <div class='clickable'>
                                                            {$category_name}
                                                        </div>
                                                    </div>
                                                    <div class='clickable action_menu'>
                                                        <i class='fa fa-align-right clickable'></i>
                                                        <div class='clickable'>
                                                            <a href='#' class='clickable'>view</a>
                                                            <a href='#' class='clickable'>products</a>
                                                            <a href='/admin/product/edit-category/$id/$category_name' class='clickable'>edit</a>
                                                        </div>
                                                    </div>
                                                </div>";
                                            if (isset($a->child) && is_array($a->child) && count($a->child)>0 ) {
                                                // dd($a->child,is_array($a->child));
                                                echo "<ul class=''>";
                                                    // dd($a->child);
                                                    foreach ($a->child as $child) {
                                                        $child = (object) $child;
                                                        $module = $child->name.'_'.$child->id;
                                                        printNestedArray($child,$module,$a->id);
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
                                        printNestedArray($category,$module,$category->id);
                                    }
                                @endphp
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
        {{-- <script src="{{ asset('contents/admin') }}/plugins/sortable_list/jquery-sortable-lists.min.js"></script> --}}
        <script src="{{ asset('contents/admin') }}/plugins/sortable_list/jquery-sortable-lists-mobile.min.js"></script>
        {{-- <script src="{{ asset('contents/admin') }}/custom_product_vue.js"></script> --}}
        <script>
            var options = {
                placeholderCss: {'background-color': '#ff8'},
                hintCss: {'background-color':'#bbf'},
                onChange: function( cEl )
                {
                    // console.log( 'onChange' );
                },
                complete: function( cEl )
                {
                    let parent_id = $(cEl).parent('ul').parent('li').data('id');
                    let category_id = $(cEl).data('id')
                    // console.log( 'complete', parent_id , category_id );
                    // let categories = $('#sTree2').sortableListsToArray();
                    axios.post('/admin/product/rearenge-category',{parent_id: parent_id, id:category_id})
                        .then((res)=>{
                            // console.log(res);
                            toaster('success','category rearenged.');
                        })
                },
                isAllowed: function( cEl, hint, target )
                {
                    // Be carefull if you test some ul/ol elements here.
                    // Sometimes ul/ols are dynamically generated and so they have not some attributes as natural ul/ols.
                    // Be careful also if the hint is not visible.
                    // It has only display none so it is at the previous place where
                    // it was before(excluding first moves before showing).

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

            $('.clickable').on('click', function(e)	{
            //    console.log( $('#sTree2').sortableListsToArray() );
            });

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

            // $('.control_check_box').on('mousedown touchstart',function(){
            //     console.log('get');
            // })

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
            .dragable_list li div{
                padding: unset;
            }
            .dragable_list li div.d-inline-flex{
                padding: 7px;
            }
            #s-l-base,
            #s-l-base li{
                border: 1px solid #3f3f3f!important;
                background: #222!important;
                padding: 7px;
                padding-left: 30px;
            }
            .s-l-opener{
                margin-left: -16px !important;
                text-align: center;
                line-height: 34px;
                width: 33px;
                height: 34px;
                /* border: 1px solid; */
                position: absolute;
                left: -19px;
            }
            .s-l-opener:hover{
                cursor: pointer;
            }
        </style>
    @endpush
@endsection

