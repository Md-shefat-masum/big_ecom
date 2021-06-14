@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container" >
            @include('admin.layouts.includes.bread_cumb',['title'=>'Create a Category'])
            <p>Products in your store are grouped by categories, which makes them easier to find. Fill out the form below to create a new category.</p>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Category Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="from-group row mb-4 justify-contents-center">
                                <label for="" class="col-lg-3 text-lg-right">Name : </label>
                                <input type="text" class="form-control col-lg-7">
                            </div>
                            <div class="from-group row mb-4">
                                <label for="" class="col-lg-3 text-lg-right">URL : </label>
                                <input type="text" class="form-control col-lg-7">
                            </div>
                            <div class="from-group row mb-4">
                                <label for="" class="col-lg-3 text-lg-right">Description : </label>
                                <div class="col-lg-7">
                                    <textarea name="" id="mytextarea1" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="from-group row mb-4">
                                <label for="" class="col-lg-3 text-lg-right">Parent Category : </label>
                                <div class="col-lg-7">
                                    <div>
                                        <div id="treeview_container" class="hummingbird-treeview well h-scroll-large">
                                            <!-- <div id="treeview_container" class="hummingbird-treeview"> -->
                                            <ul id="treeview" class="hummingbird-base">
                                                <li>  <label style="background-color: white; color: black; cursor: pointer;">
                                                    <input id="node-lg_3" data-id="custom-lg_3" type="checkbox">
                                                        --No Parent Category--
                                                    </label>
                                                </li>
                                                @php
                                                    function printNestedArray($a,$module,$parent_id) {
                                                        $a = (object) $a;
                                                        $id = $a->id;
                                                        $category_name = $a->name;

                                                        echo "<li>";



                                                        echo "  <label>
                                                                    <input id='node-{$category_name}_{$id}' data-id='custom-{$category_name}_{$id}' type='checkbox' />
                                                                    {$category_name}
                                                                </label>
                                                            ";

                                                            if (isset($a->child) && is_array($a->child)) {
                                                                    echo "<i class='fa fa-plus-circle' title='collapse'></i>";
                                                                }

                                                        if (isset($a->child) && is_array($a->child)) {
                                                            // dd($a->child,is_array($a->child));
                                                            echo "<ul>";
                                                                // dd($a->child);
                                                                foreach ($a->child as $child) {
                                                                    $child = (object) $child;
                                                                    $module = $child->name.'_'.$child->id;
                                                                    printNestedArray($child,$module,$a->id);
                                                                }
                                                            echo "</ul>";
                                                            echo "</li>";
                                                        } else {
                                                            // echo htmlspecialchars($value) . '<br />';
                                                        }
                                                    }
                                                    foreach ($categories as $key => $category) {
                                                        $category = (object) $category;
                                                        $module = $category->name.'_'.$category->id;
                                                        printNestedArray($category,$module,$category->id);
                                                    }
                                                @endphp
                                                {{-- <li>
                                                    <i class="fa fa-minus"></i>
                                                    <label>
                                                        <input id="node-0" data-id="custom-0" type="checkbox" />
                                                        node-0
                                                    </label>
                                                    <ul style="display: block;">
                                                        <li>
                                                            <i class="fa fa-plus"></i>
                                                            <label>
                                                                <input id="node-0-1" data-id="custom-1" type="checkbox" />
                                                                node-0-1
                                                            </label>
                                                            <ul>
                                                                <li>
                                                                    <i class="fa fa-plus"></i>
                                                                    <label>
                                                                        <input id="node-0-1-1" data-id="custom-1-1" type="checkbox" />
                                                                        node-0-1-1
                                                                    </label>
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                <input class="hummingbirdNoParent" id="node-0-1-1-1" data-id="custom-1-1-1" type="checkbox" />
                                                                                node-0-1-1-1
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input class="hummingbirdNoParent" id="node-0-1-1-2" data-id="custom-1-1-2" type="checkbox" />
                                                                                node-0-1-1-2
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-1-1-3" data-id="custom-1-1-3" type="checkbox" /> node-0-1-1-3</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="double1" data-id="custom-1-1-3" type="checkbox" /> node-0-1-1-3</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="double2" data-id="custom-1-1-3" type="checkbox" /> node-0-1-1-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-1-2" data-id="custom-1-2" type="checkbox" /> node-0-1-2</label>
                                                                    <ul>
                                                                        <li style="color: rgb(200, 200, 200);">
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-1-2-1" data-id="custom-1-2-1" type="checkbox" disabled="" /> node-0-1-2-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-1-2-2" data-id="custom-1-2-2" type="checkbox" /> node-0-1-2-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-1-2-3" data-id="custom-1-2-3" type="checkbox" /> node-0-1-2-3</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="double3" data-id="custom-1-1-3" type="checkbox" /> node-0-1-1-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-1-3" data-id="custom-1-3" type="checkbox" /> node-0-1-3</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-1-3-1" data-id="custom-1-3-1" type="checkbox" /> node-0-1-3-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-1-3-2" data-id="custom-1-3-2" type="checkbox" /> node-0-1-3-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-1-3-3" data-id="custom-1-3-3" type="checkbox" /> node-0-1-3-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-1-4" data-id="custom-1-4" type="checkbox" /> node-0-1-4</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-1-4-1" data-id="custom-1-4-1" type="checkbox" /> node-0-1-4-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-1-4-2" data-id="custom-1-4-2" type="checkbox" /> node-0-1-4-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-1-4-3" data-id="custom-1-4-3" type="checkbox" /> node-0-1-4-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-plus"></i> <label> <input id="node-0-2" data-id="custom-2" type="checkbox" /> node-0-2</label>
                                                            <ul>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-2-1" data-id="custom-2-1" type="checkbox" /> node-0-2-1</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-2-1-1" data-id="custom-2-1-1" type="checkbox" /> node-0-2-1-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-2-1-2" data-id="custom-2-1-2" type="checkbox" /> node-0-2-1-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-2-1-3" data-id="custom-2-1-3" type="checkbox" /> node-0-2-1-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-2-2" data-id="custom-2-2" type="checkbox" /> node-0-2-2</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-2-2-1" data-id="custom-2-2-1" type="checkbox" /> node-0-2-2-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-2-2-2" data-id="custom-2-2-2" type="checkbox" /> node-0-2-2-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-2-2-3" data-id="custom-2-2-3" type="checkbox" /> node-0-2-2-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-2-3" data-id="custom-2-3" type="checkbox" /> node-0-2-3</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-2-3-1" data-id="custom-2-3-1" type="checkbox" /> node-0-2-3-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-2-3-2" data-id="custom-2-3-2" type="checkbox" /> node-0-2-3-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-2-3-3" data-id="custom-2-3-3" type="checkbox" /> node-0-2-3-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-2-4" data-id="custom-2-4" type="checkbox" /> node-0-2-4</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-2-4-1" data-id="custom-2-4-1" type="checkbox" /> node-0-2-4-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-2-4-2" data-id="custom-2-4-2" type="checkbox" /> node-0-2-4-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-2-4-3" data-id="custom-2-4-3" type="checkbox" /> node-0-2-4-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-plus"></i> <label> <input id="node-0-3" data-id="custom-3" type="checkbox" /> node-0-3</label>
                                                            <ul>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-3-1" data-id="custom-3-1" type="checkbox" /> node-0-3-1</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-3-1-1" data-id="custom-3-1-1" type="checkbox" /> node-0-3-1-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-3-1-2" data-id="custom-3-1-2" type="checkbox" /> node-0-3-1-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-3-1-3" data-id="custom-3-1-3" type="checkbox" /> node-0-3-1-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-3-2" data-id="custom-3-2" type="checkbox" /> node-0-3-2</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-3-2-1" data-id="custom-3-2-1" type="checkbox" /> node-0-3-2-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-3-2-2" data-id="custom-3-2-2" type="checkbox" /> node-0-3-2-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-3-2-3" data-id="custom-3-2-3" type="checkbox" /> node-0-3-2-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-3-3" data-id="custom-3-3" type="checkbox" /> node-0-3-3</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-3-3-1" data-id="custom-3-3-1" type="checkbox" /> node-0-3-3-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-3-3-2" data-id="custom-3-3-2" type="checkbox" /> node-0-3-3-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-3-3-3" data-id="custom-3-3-3" type="checkbox" /> node-0-3-3-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-3-4" data-id="custom-3-4" type="checkbox" /> node-0-3-4</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-3-4-1" data-id="custom-3-4-1" type="checkbox" /> node-0-3-4-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-3-4-2" data-id="custom-3-4-2" type="checkbox" /> node-0-3-4-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-3-4-3" data-id="custom-3-4-3" type="checkbox" /> node-0-3-4-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-plus"></i> <label> <input id="node-0-4" data-id="custom-4" type="checkbox" /> node-0-4</label>
                                                            <ul>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-4-1" data-id="custom-4-1" type="checkbox" /> node-0-4-1</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-4-1-1" data-id="custom-4-1-1" type="checkbox" /> node-0-4-1-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-4-1-2" data-id="custom-4-1-2" type="checkbox" /> node-0-4-1-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-4-1-3" data-id="custom-4-1-3" type="checkbox" /> node-0-4-1-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-4-2" data-id="custom-4-2" type="checkbox" /> node-0-4-2</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-4-2-1" data-id="custom-4-2-1" type="checkbox" /> node-0-4-2-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-4-2-2" data-id="custom-4-2-2" type="checkbox" /> node-0-4-2-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-4-2-3" data-id="custom-4-2-3" type="checkbox" /> node-0-4-2-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-4-3" data-id="custom-4-3" type="checkbox" /> node-0-4-3</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-4-3-1" data-id="custom-4-3-1" type="checkbox" /> node-0-4-3-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-4-3-2" data-id="custom-4-3-2" type="checkbox" /> node-0-4-3-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-4-3-3" data-id="custom-4-3-3" type="checkbox" /> node-0-4-3-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-4-4" data-id="custom-4-4" type="checkbox" /> node-0-4-4</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-4-4-1" data-id="custom-4-4-1" type="checkbox" /> node-0-4-4-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-4-4-2" data-id="custom-4-4-2" type="checkbox" /> node-0-4-4-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-4-4-3" data-id="custom-4-4-3" type="checkbox" /> node-0-4-4-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-plus"></i> <label> <input id="node-0-5" data-id="custom-5" type="checkbox" /> node-0-5</label>
                                                            <ul>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-5-1" data-id="custom-5-1" type="checkbox" /> node-0-5-1</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-5-1-1" data-id="custom-5-1-1" type="checkbox" /> node-0-5-1-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-5-1-2" data-id="custom-5-1-2" type="checkbox" /> node-0-5-1-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-5-1-3" data-id="custom-5-1-3" type="checkbox" /> node-0-5-1-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-5-2" data-id="custom-5-2" type="checkbox" /> node-0-5-2</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-5-2-1" data-id="custom-5-2-1" type="checkbox" /> node-0-5-2-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-5-2-2" data-id="custom-5-2-2" type="checkbox" /> node-0-5-2-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-5-2-3" data-id="custom-5-2-3" type="checkbox" /> node-0-5-2-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-5-3" data-id="custom-5-3" type="checkbox" /> node-0-5-3</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-5-3-1" data-id="custom-5-3-1" type="checkbox" /> node-0-5-3-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-5-3-2" data-id="custom-5-3-2" type="checkbox" /> node-0-5-3-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-5-3-3" data-id="custom-5-3-3" type="checkbox" /> node-0-5-3-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-plus"></i> <label> <input id="node-0-5-4" data-id="custom-5-4" type="checkbox" /> node-0-5-4</label>
                                                                    <ul>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-5-4-1" data-id="custom-5-4-1" type="checkbox" /> node-0-5-4-1</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-5-4-2" data-id="custom-5-4-2" type="checkbox" /> node-0-5-4-2</label>
                                                                        </li>
                                                                        <li>
                                                                            <label> <input class="hummingbirdNoParent" id="node-0-5-4-3" data-id="custom-5-4-3" type="checkbox" /> node-0-5-4-3</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <i class="fa fa-plus"></i> <label> <input id="node-1" data-id="custom-1" type="checkbox" /> node-1</label>
                                                    <ul>
                                                        <li>
                                                            <label> <input class="hummingbirdNoParent" id="node-1-1" data-id="custom-1-1" type="checkbox" /> node-1-1</label>
                                                        </li>
                                                        <li>
                                                            <label> <input class="hummingbirdNoParent" id="node-1-2" data-id="custom-1-2" type="checkbox" /> node-1-2</label>
                                                        </li>
                                                        <li>
                                                            <label> <input class="hummingbirdNoParent" id="node-1-3" data-id="custom-1-3" type="checkbox" /> node-1-3</label>
                                                        </li>
                                                        <li>
                                                            <label> <input class="hummingbirdNoParent" id="node-1-4" data-id="custom-1-4" type="checkbox" /> node-1-4</label>
                                                        </li>
                                                        <li>
                                                            <label> <input class="hummingbirdNoParent" id="node-1-5" data-id="custom-1-5" type="checkbox" /> node-1-5</label>
                                                        </li>
                                                    </ul>
                                                </li> --}}
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="from-group row mb-4">
                                <label for="" class="col-lg-3 text-lg-right">Template Layout File : </label>
                                <input type="text" class="form-control col-lg-7">
                            </div>
                            <div class="from-group row mb-4">
                                <label for="" class="col-lg-3 text-lg-right">Sort Order: </label>
                                <input type="text" class="form-control col-lg-7">
                            </div>
                            <div class="from-group row mb-4">
                                <label for="" class="col-lg-3 text-lg-right">Default Product Sort: </label>
                                <select name="catdefaultproductsort" class="form-control col-lg-7">
                                    <option value="0">Use Store Settings Default</option>
                                    <option value="1">Featured Items</option>
                                    <option value="2">Newest Items</option>
                                    <option value="3">Bestselling</option>
                                    <option value="4">Alphabetical: A to Z</option>
                                    <option value="5">Alphabetical: Z to A</option>
                                    <option value="6">Avg. Customer Review</option>
                                    <option value="7">Price: Low to High</option>
                                    <option value="8">Price: High to Low</option>
                                </select>
                            </div>
                            <div class="from-group row mb-4">
                                <label for="" class="col-lg-3 text-right">Category Image: </label>
                                <input type="file" class="form-control col-lg-7">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5>Search Engine Optimization</h5>
                        </div>
                        <div class="card-body">
                            <div class="from-group row mb-4">
                                <label for="" class="col-lg-3 text-lg-right">Page Title : (optional)</label>
                                <input type="text" class="form-control col-lg-7">
                            </div>
                            <div class="from-group row mb-4">
                                <label for="" class="col-lg-3 text-lg-right">Meta Keywords : (optional)</label>
                                <input type="text" class="form-control col-lg-7">
                            </div>
                            <div class="from-group row mb-4">
                                <label for="" class="col-lg-3 text-lg-right">Meta Description : (optional)</label>
                                <input type="text" class="form-control col-lg-7">
                            </div>
                            <div class="from-group row mb-4">
                                <label for="" class="col-lg-3 text-lg-right">Search Keywords : (optional)</label>
                                <input type="text" class="form-control col-lg-7">
                            </div>
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

    @push('ccss')
        <link rel="stylesheet" href="{{ asset('contents/admin') }}/plugins/summernote/dist/summernote-bs4.css" />
        <link rel="stylesheet" href="{{ asset('contents/admin') }}/plugins/collapse_tree/hummingbird-treeview.min.css">
    @endpush

    @push('cjs')
        <script src="{{ asset('contents/admin') }}/plugins/summernote/dist/summernote-bs4.min.js"></script>
        <script src="{{ asset('contents/admin') }}/custom_product_vue.js"></script>
        <script src="{{ asset('contents/admin') }}/plugins/collapse_tree/hummingbird-treeview.min.js"></script>

        <script>
            $('#mytextarea1').summernote({
                height: 200,
                tabsize: 2
            });

            $("#treeview").hummingbird();
            // Collapse all nodes on init
            // $.fn.hummingbird.defaults.collapseAll =false;
            $("#treeview li").off().on('click',function(){
            })
            $("#treeview li input").off().on('click',function(){
                console.log('clicked',$(this));
            })
            $("#treeview li label").off().on('click',function(){
            })


        </script>

        <style>
            label{
                line-height: 25px;
            }
            #treeview{
                border: 1px solid white;
                padding: 10px;
                background: #42424273;
                overflow: hidden;
            }
            #treeview li ul{
                padding-left: 25px;
            }
            .hummingbird-treeview ul li div{
                border: 1px solid white;
            }
            .hummingbird-treeview label{
                background: transparent !important;
                background: transparent;
                color: rgba(255, 255, 255, 0.75)!important;;
                font-size: .75rem;
                text-transform: uppercase;
                letter-spacing: 1px;
                font-weight: 600;
                display: inline-flex;
                display: -ms-inline-flexbox;
                display: -webkit-inline-flex;
                /* width: -webkit-fill-available; */
                padding: 5px;
                align-items: center;
                margin: 0;
            }
            .hummingbird-treeview label:hover{
                background: #596068!important;;
            }
            .hummingbird-treeview label input{
                margin-right: 8px !important;
                display: inline-block;
            }
        </style>
    @endpush
@endsection

