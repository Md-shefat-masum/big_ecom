<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function view()
    {
        return view('admin.product.view');
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function search(Request $request)
    {
        return view('admin.product.search');
    }

    public function option()
    {
        return view('admin.product.option.options');
    }

    public function reviews()
    {
        return view('admin.product.reviews');
    }

    public function brands()
    {
        return view('admin.product.brands');
    }

    public function categories()
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'men',
                'child' => [
                    [
                        'id' => 2,
                        'name' => 't-shirt',
                        'child' => [
                            [
                                'id' => 3,
                                'name' => 'lg'
                            ],
                            [
                                'id' => 4,
                                'name' => 'md'
                            ],
                            [
                                'id' => 5,
                                'name' => 'sm'
                            ],
                        ]
                    ]
                ],
            ],
            [
                'id' => 6,
                'name' => 'women',
                'child' => [
                    [
                        'id' => 7,
                        'name' => 'women t-shirt',
                        'child' => [
                            [
                                'id' => 8,
                                'name' => 'women lg'
                            ],
                            [
                                'id' => 9,
                                'name' => 'women md'
                            ],
                            [
                                'id' => 10,
                                'name' => 'women xs'
                            ],
                        ]
                    ]
                ],
            ],
            [
                'id' => 11,
                'name' => 'child',
                'child' => [
                    [
                        'id' => 12,
                        'name' => 'child t-shirt',
                        'child' => [
                            [
                                'id' => 13,
                                'name' => 'child xxl'
                            ],
                            [
                                'id' => 14,
                                'name' => 'child xsm'
                            ],
                            [
                                'id' => 15,
                                'name' => 'child xxs'
                            ],
                        ]
                    ]
                ],
            ]
        ];
        return view('admin.product.categories.categories',compact('categories'));
    }

    public function create_category()
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'men',
                'child' => [
                    [
                        'id' => 2,
                        'name' => 't-shirt',
                        'child' => [
                            [
                                'id' => 3,
                                'name' => 'lg'
                            ],
                            [
                                'id' => 4,
                                'name' => 'md'
                            ],
                            [
                                'id' => 5,
                                'name' => 'sm'
                            ],
                        ]
                    ]
                ],
            ],
            [
                'id' => 6,
                'name' => 'women',
                'child' => [
                    [
                        'id' => 7,
                        'name' => 'women t-shirt',
                        'child' => [
                            [
                                'id' => 8,
                                'name' => 'women lg',
                                'child' => [
                                    [
                                        'id' => 8,
                                        'name' => 'women lg'
                                    ],
                                    [
                                        'id' => 9,
                                        'name' => 'women md'
                                    ],
                                    [
                                        'id' => 10,
                                        'name' => 'women xs'
                                    ],
                                ]
                            ],
                            [
                                'id' => 9,
                                'name' => 'women md',
                                'child' => [
                                    [
                                        'id' => 8,
                                        'name' => 'women lg'
                                    ],
                                    [
                                        'id' => 9,
                                        'name' => 'women md',
                                        'child' => [
                                            [
                                                'id' => 8,
                                                'name' => 'women lg'
                                            ],
                                            [
                                                'id' => 9,
                                                'name' => 'women md'
                                            ],
                                            [
                                                'id' => 10,
                                                'name' => 'women xs'
                                            ],
                                        ]
                                    ],
                                    [
                                        'id' => 10,
                                        'name' => 'women xs'
                                    ],
                                ]
                            ],
                            [
                                'id' => 10,
                                'name' => 'women xs'
                            ],
                        ]
                    ]
                ],
            ],
            [
                'id' => 11,
                'name' => 'child',
                'child' => [
                    [
                        'id' => 12,
                        'name' => 'child t-shirt',
                        'child' => [
                            [
                                'id' => 13,
                                'name' => 'child xxl'
                            ],
                            [
                                'id' => 14,
                                'name' => 'child xsm'
                            ],
                            [
                                'id' => 15,
                                'name' => 'child xxs'
                            ],
                        ]
                    ]
                ],
            ]
        ];
        return view('admin.product.categories.create',compact('categories'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
