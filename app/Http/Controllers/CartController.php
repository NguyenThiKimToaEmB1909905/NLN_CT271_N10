<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Session;
use App\Models\Coupon;

use Cart;
// trả về trang j đó khi thành công or thất bại
session_start();
class CartController extends Controller
{
    //giỏ hàng sử dụng ajax
    public function gio_hang(Request $request)
    {
        //seo 
        //slide
        /*        $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();
 */
        $meta_desc = "Giỏ hàng của bạn";
        $meta_keywords = "Giỏ hàng Ajax";
        $meta_title = "Giỏ hàng Ajax";
        $url_canonical = $request->url();
        //--seo
        $cate_product = DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '0')->orderby('brand_id', 'desc')->get();

        return view('pages.cart.cart_ajax')->with('category', $cate_product)->with('brand', $brand_product)->with('meta_desc', $meta_desc)->with('meta_keywords', $meta_keywords)->with('meta_title', $meta_title)->with('url_canonical', $url_canonical);
    }
    public function add_cart_ajax(Request $request)
    {
        // Session::forget('cart');
        $data = $request->all();
        /* print_r($data); */

        $session_id = substr(md5(microtime()), rand(0, 26), 5);
        $cart = Session::get('cart');
        if ($cart == true) {
            $is_avaiable = 0;
            foreach ($cart as $key => $val) {
                if ($val['product_id'] == $data['cart_product_id']) {
                    $is_avaiable++;
                }
            }
            if ($is_avaiable == 0) {
                $cart[] = array(
                    'session_id' => $session_id,
                    'product_name' => $data['cart_product_name'],
                    'product_id' => $data['cart_product_id'],
                    'product_image' => $data['cart_product_image'],
                    'product_qty' => $data['cart_product_qty'],
                    'product_quantity' => $data['cart_product_quantity'],
                    'product_price' => $data['cart_product_price'],
                );
                Session::put('cart', $cart);
            }
        } else {
            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_qty' => $data['cart_product_qty'],
                'product_quantity' => $data['cart_product_quantity'],
                'product_price' => $data['cart_product_price'],

            );
            Session::put('cart', $cart);
        }

        Session::save();
    }
    public function delete_product($session_id)
    {
        $cart = Session::get('cart');
        // echo '<pre>';
        // print_r($cart);
        // echo '</pre>';
        if ($cart == true) {
            foreach ($cart as $key => $val) {
                if ($val['session_id'] == $session_id) {
                    unset($cart[$key]);
                }
            }
            Session::put('cart', $cart);
            return redirect()->back()->with('message', 'Xóa sản phẩm thành công');
        } else {
            return redirect()->back()->with('message', 'Xóa sản phẩm thất bại');
        }
    }
    /*     public function update_cart(Request $request)
    {
        $data = $request->all();
        $cart = Session::get('cart');
        if ($cart == true) {
            foreach ($data['cart_qty'] as $key => $qty) {
                foreach ($cart as $session => $val) {
                    if ($val['session_id'] == $key) {
                        $cart[$session]['product_qty'] = $qty;
                    }
                }
            }
            Session::put('cart', $cart);
            return redirect()->back()->with('message', 'Cập nhật số lượng thành công');
        } else {
            return redirect()->back()->with('message', 'Cập nhật số lượng thất bại');
        }
    } */
    public function update_cart(Request $request)
    {
        $data = $request->all();
        $cart = Session::get('cart');
        if ($cart == true) {
            $message = '';

            foreach ($data['cart_qty'] as $key => $qty) {
                $i = 0;
                foreach ($cart as $session => $val) {
                    $i++;

                    if ($val['session_id'] == $key && $qty < $cart[$session]['product_quantity']) {

                        $cart[$session]['product_qty'] = $qty;
                        $message .= '<p style="color:blue">' . ' Cập nhật số lượng :' . $cart[$session]['product_name'] . ' thành công</p>';
                    } elseif ($val['session_id'] == $key && $qty > $cart[$session]['product_quantity']) {
                        $message .= '<p style="color:red">' . ' Cập nhật số lượng :' . $cart[$session]['product_name'] . ' thất bại</p>';
                    }
                }
            }

            Session::put('cart', $cart);
            return redirect()->back()->with('message', $message);
        } else {
            return redirect()->back()->with('message', 'Cập nhật số lượng thất bại');
        }
    }
    /* *********giỏ hàng sử dụng ajax hết *************/

    //thêm sp vào giỏ hàng
    public function save_cart(Request $request)
    {

        $productId = $request->productid_hidden;
        $quality = $request->qty;
        $product_info = DB::table('tbl_product')->where('product_id', $productId)->first();

        // Cart::add(['id' => $product_info->product_id, 'name' => $product_info->product_name, 'qty' => $quantily, 'price' =>$product_info->product_price, 'options' => ['size' => 'large']]);
        $data['id'] = $product_info->product_id;
        $data['qty'] = $quality;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['weight'] = $product_info->product_price;

        $data['options']['image'] = $product_info->product_image;
        Cart::add($data);

        // Cart::destroy();

        return Redirect::to('/show_cart');
    }

    public function show_cart()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '0')->orderBy('brand_id', 'desc')->get();

        return view('pages.cart.show_cart')
            ->with('category_home', $cate_product)
            ->with('brand_home', $brand_product);
    }

    // xóa sản phẩm đẫ thêm vào giỏ hàng
    public function delete_to_cart($rowId)
    {
        Cart::update($rowId, 0);
        return Redirect::to('/show_cart');
    }
    // cập nhật số lượng trong giỏ hàng
    public function update_cart_quantity(Request $request)
    {
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
        Cart::update($rowId, $qty);
        return Redirect::to('/show_cart');
    }

    /* mã gỉam giá */
    public function check_coupon(Request $request)
    {

        $data = $request->all();
        $coupon = Coupon::where('coupon_code', $data['coupon'])->first();
        if ($coupon) {
            $count_coupon = $coupon->count();
            if ($count_coupon > 0) {
                $coupon_session = Session::get('coupon');
                if ($coupon_session == true) {
                    $is_avaiable = 0;
                    if ($is_avaiable == 0) {
                        $cou[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_condition' => $coupon->coupon_condition,
                            'coupon_number' => $coupon->coupon_number,
                        );
                        Session::put('coupon', $cou);
                    }
                } else {
                    $cou[] = array(
                        'coupon_code' => $coupon->coupon_code,
                        'coupon_condition' => $coupon->coupon_condition,
                        'coupon_number' => $coupon->coupon_number,
                    );
                    Session::put('coupon', $cou);
                }
                Session::save();

                return redirect()->back()->with('message', 'Thêm mã giảm giá thành công');
            }
        } else {
            return redirect()->back()->with('error', 'Mã giảm giá không đúng ');
        }
    }
}