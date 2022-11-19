
@extends('layouts.app')
@section('title', $category['name'])
@section('content')
    <div class="container">
        @include('layouts.top_main')
        <div class="cf"></div><!--Main-->
        <div id="main">
            <div class="breadcrumb">
                <a href="{{route('home')}}">Trang chủ</a> »
                <a href="javascript:;">{{$category['name']}}</a>
            </div>
            <!--Main Col-->
            <div class="thirteen columns fr" id="main_content">
                <div class="inner_col">
                    <div class="page_des page_des_top">
                        {!! $category['description'] !!}
                    </div>
                    <div class="sub_categories_page">
                        <ul>
                            @foreach($list_child_categories as $value)
                            <li class="columns">
                                <div class="subcate_item">
                                    <div class="subcate_img">
                                        <a href="{{route('slug', ['category_slug' => $value['slug']])}}" title="{{$value['name']}}">
                                            <img src="{{$value['avatar']}}" alt="{{$value['name']}}" border="0">
                                        </a>
                                    </div>
                                    <h4 class="lnk_title">
                                        <a href="{{route('slug', ['category_slug' => $value['slug']])}}" title="{{$value['name']}}">{{$value['name']}}</a>
                                    </h4>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!--List Products-->
                    <div class="box">
                        <div class="tab_cate_main">
                            <h1 class="link_Tab">{{$category['name']}}</h1>
                            <div class="sort_area">
                                <div class="dropdown_list fl">
                                    <select name="brand_category" id="brand_category" style="display: none;">
                                        <option selected="selected" value="0">Tất cả các thương hiệu</option>
                                        <option value="https://www.ketnoitieudung.vn/thiet-bi-dung-pin/c2211/dewalt.html">Dewalt</option>
                                        <option value="https://www.ketnoitieudung.vn/thiet-bi-dung-pin/c2211/total.html">Total</option>
                                        <option value="https://www.ketnoitieudung.vn/thiet-bi-dung-pin/c2211/ingco.html">INGCO</option>
                                        <option value="https://www.ketnoitieudung.vn/thiet-bi-dung-pin/c2211/milwaukee.html">Milwaukee</option>
                                        <option value="https://www.ketnoitieudung.vn/thiet-bi-dung-pin/c2211/makita.html">Makita</option>
                                        <option value="https://www.ketnoitieudung.vn/thiet-bi-dung-pin/c2211/bosch.html">Bosch</option>
                                        <option value="https://www.ketnoitieudung.vn/thiet-bi-dung-pin/c2211/stanley.html">Stanley</option>
                                    </select>
                                    <div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 180px;" title="" id="brand_category_chosen">
                                        <a class="chosen-single" tabindex="-1">
                                            <span>Tất cả các thương hiệu</span>
                                            <div>
                                                <b></b>
                                            </div>
                                        </a>
                                        <div class="chosen-drop">
                                            <div class="chosen-search">
                                                <input type="text" autocomplete="off" readonly="">
                                            </div>
                                            <ul class="chosen-results"></ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown_list fl">
                                    <select name="sortby" id="sortby">
                                        <option selected="selected" value="0">Sản phẩm chọn lọc</option>
                                        <option value="1">Tên: A-Z</option>
                                        <option value="2">Tên: Z-A</option>
                                        <option value="3">Giá: Cao đến thấp</option>
                                        <option value="4">Giá: Thấp đến cao</option>
                                        <option value="5">Mức giảm giá: Cao đến thấp</option>
                                        <option value="6">Mức giảm giá: Thấp đến cao</option>
                                    </select>
                                </div>
                                <input type="hidden" name="product_url" id="product_url" value="https://www.ketnoitieudung.vn/danh-muc-san-pham/thiet-bi-dung-pin_2211.html">
                            </div>
                        </div>
                        <div class="box_ct list_items">
                            <ul>
                                @foreach($products as $product)
                                @php
                                    $route = route('slug', ['category_slug' => $product->category->slug, 'slug' => $product['slug']]);
                                @endphp
                                <li class="four columns">
                                    <!--Pro Item-->
                                    <div class="pro_item">
                                        <figure class="img_pro">
                                            <a href="{{$route}}" title="{{$product['name']}}">
                                                <img class="lazy" data-original="{{$product['avatar']}}" src="/images/pixel.gif" alt="{{$product['name']}}" itemprop="image">
                                            </a>
                                        </figure>
                                        <h2 class="pro_name">
                                            <a href="{{$route}}" title="{{$product['name']}}">
                                                {{$product['name']}}
                                            </a>
                                        </h2>
                                        @if($product['discount'])
                                        <div class="info_price">
                                            <span class="f_price"><del>{{$product->getPrice()}} đ</del></span>
                                            <span class="m_price cl_red">{{$product->getPriceDiscount()}} đ</span>
                                        </div>
                                        <span class="saleoff">-{{$product['discount']}}%</span>
                                        @else
                                            <div class="info_price">
                                                <span class="f_price"><del></del></span>
                                                <span class="m_price cl_red">{{$product->getPrice()}} đ</span>
                                            </div>
                                        @endif
                                    </div>
                                    <!--end Pro Item-->
                                </li>
                                @endforeach
                            </ul>
                            <div class="cf"></div>
                            <div class="pagination-css">
                                {{$products->links()}}
                            </div>
                        </div>
                    </div>
                    <style>
                        .pagination-css {
                            background: #f5f5f5;
                            margin-top: 20px;
                            font-size: .9em;
                            text-align: center;
                            padding: 5px;
                        }
                        .pagination-css .pagination{
                            display: inline-flex;
                        }
                        .pagination-css .page-item:not(:first-child) .page-link {
                            margin-left: 5px;
                        }
                        .pagination-css .page-link {
                            padding: 0.375rem 0.75rem!important;
                        }
                        .pagination-css .page-item:first-child .page-link {
                             border-top-left-radius: unset;
                             border-bottom-left-radius: unset;
                        }
                        .pagination-css .page-item:last-child .page-link{
                            border-top-right-radius: unset;
                            border-bottom-right-radius: unset;
                        }
                        .pagination-css .page-item.active .page-link{
                            background: #e00000;
                            border-color: #e00000;
                        }
                    </style>
                    <!--end List Products-->
                    <div class="cf"></div>
                    <div class="page_des">

                    </div>
                </div>
            </div>
            <!--end Main Col-->
            <!--Sidebar-->
            <div class="three columns" id="sidebar">
                <div class="box_Tab">BỘ LỌC SẢN PHẨM</div>
                <!--Vertical Menu-->
                <div class="box">
                    <div class="most-viewed" id="cate_left"> <span class="title_filter">Danh Mục</span>
                        <ul class="list_field">
                            <li>
                                @foreach($categories as $cate)
                                <h3>
                                    <a href="{{route('slug', ['category_slug' => $cate['slug']])}}">{{$cate['name']}}</a>
                                </h3>
                                @if($cate['id'] === $categoryParent['id'])
                                <ul>
                                    @foreach($child_categories as $val)
                                    <li class="{{$val['id'] == $category['id'] ? 'active' : ''}}">
                                        <h4><a href="{{route('slug', ['category_slug' => $val['slug']])}}">{{$val['name']}}</a></h4>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                                @endforeach
                            </li>
                        </ul>
                        <span class="title_filter">THƯƠNG HIỆU</span>
                        <ul class="list_field">
                            <li><a href="https://www.ketnoitieudung.vn/thiet-bi-dung-pin/c2211/dewalt.html" title="Dewalt">
                                    Dewalt                                </a></li>
                            <li><a href="https://www.ketnoitieudung.vn/thiet-bi-dung-pin/c2211/total.html" title="Total">
                                    Total                                </a></li>
                            <li><a href="https://www.ketnoitieudung.vn/thiet-bi-dung-pin/c2211/ingco.html" title="INGCO">
                                    INGCO                                </a></li>
                            <li><a href="https://www.ketnoitieudung.vn/thiet-bi-dung-pin/c2211/milwaukee.html" title="Milwaukee">
                                    Milwaukee                                </a></li>
                            <li><a href="https://www.ketnoitieudung.vn/thiet-bi-dung-pin/c2211/makita.html" title="Makita">
                                    Makita                                </a></li>
                            <li><a href="https://www.ketnoitieudung.vn/thiet-bi-dung-pin/c2211/bosch.html" title="Bosch">
                                    Bosch                                </a></li>
                            <li><a href="https://www.ketnoitieudung.vn/thiet-bi-dung-pin/c2211/stanley.html" title="Stanley">
                                    Stanley                                </a></li>
                        </ul>
                    </div>
                </div>
                <!--end Vertical Menu-->
            </div>
            <!--end Sidebar-->
        </div>
        <!--End Main-->

    </div>
@endsection