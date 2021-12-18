<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\TProducto;
use App\Models\TMenuCategoria;
use App\Models\TCliente;
use App\Models\TOrden;
use App\Models\TOrdenDetalle;
class HomeController extends Controller
{
    //
    protected $posts=[
        ['titulo'=>"Ea exerci option hendrerit",'categoria'=>'Category','fecha'=>'20 Nov. 2017','img'=>'images/blog-1.jpg','descripcion'=>'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. Oorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',"url"=>"detalles-blog"],
        ['titulo'=>"Ea exerci option hendrerit",'categoria'=>'Category','fecha'=>'20 Nov. 2017','img'=>'images/blog-1.jpg','descripcion'=>'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. Oorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',"url"=>"detalles-blog1"],
        ['titulo'=>"Ea exerci option hendrerit",'categoria'=>'Category','fecha'=>'20 Nov. 2017','img'=>'images/blog-1.jpg','descripcion'=>'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. Oorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',"url"=>"detalles-blog2"],
        ['titulo'=>"Ea exerci option hendrerit",'categoria'=>'Category','fecha'=>'20 Nov. 2017','img'=>'images/blog-1.jpg','descripcion'=>'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. Oorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',"url"=>"detalles-blog3"],
        ['titulo'=>"Ea exerci option hendrerit",'categoria'=>'Category','fecha'=>'20 Nov. 2017','img'=>'images/blog-1.jpg','descripcion'=>'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. Oorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',"url"=>"detalles-blog4"],
        ['titulo'=>"Ea exerci option hendrerit",'categoria'=>'Category','fecha'=>'20 Nov. 2017','img'=>'images/blog-1.jpg','descripcion'=>'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. Oorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',"url"=>"detalles-blog5"],
    ];
    public function index(){
        $cart = session()->get('cart');
        if ($cart == null)
            $cart = [];

        $menu_categoria=TMenuCategoria::get();
        return view('page.home',compact('menu_categoria'))->with('cart', $cart);
    }
    public function menuMapi(){
        $menu_categoria=TMenuCategoria::get();
        $cart = session()->get('cart');
        if ($cart == null)
            $cart = [];
        return view('page.menuMapi',compact('menu_categoria'))->with('cart', $cart);
    }
    public function menuCarpe(){
        $cart = session()->get('cart');
        if ($cart == null)
            $cart = [];
        return view('page.menuCarpe')->with('cart', $cart);
    }
    public function about(){
        $cart = session()->get('cart');
        if ($cart == null)
            $cart = [];
        return view('page.about')->with('cart', $cart);
    }
    public function blog(){
        $cart = session()->get('cart');
        if ($cart == null)
            $cart = [];
        $posts=$this->posts;
        return view('page.blog',compact('posts'))->with('cart', $cart);
    }
    public function blog_detail($url){
        $cart = session()->get('cart');
        if ($cart == null)
            $cart =[];
        $posts=$this->posts;
       
        return view('page.blogDetail',compact('post'))->with('cart', $cart);
    }
    public function shop(){
        $cart = session()->get('cart');
        if ($cart == null)
            $cart = [];
        $productos=TProducto::all();
        return view('page.shop', compact('productos'))->with('cart', $cart);
    }
    public function shop_detail($url){
        $cart = session()->get('cart');
        if ($cart == null)
            $cart = [];
        $producto=TProducto::where('url',$url)->get()->first();
        $cart_product=collect($cart)->where('id',$producto->id)->first();
        return view('page.shopDetail',compact('producto','cart_product'))->with('cart', $cart);
    }
    public function reservations(){
        $cart = session()->get('cart');
        if ($cart == null)
            $cart = [];
        return view('page.reservations')->with('cart', $cart);
    }
    public function card(){
        $cart = session()->get('cart');
        $productos=TProducto::all();
        return view('page.card', compact('productos'))->with('cart', $cart);
    }
    public function checkout(){
        $cart = session()->get('cart');
        $productos=TProducto::all();
        return view('page.checkout', compact('productos'))->with('cart', $cart);
    }
    public function addToCart(Request $request)
    {
        session()->put('cart', $request->post('cart'));

        return response()->json([
            'status' => 'added'
        ]);
    }
    public function updateToCard(Request $request){
        session()->put('cart', $request->post('cart'));
    }
    public function deleteToCard(Request $request){
        session()->put('cart', $request->post('cart'));
    }
    public function order(Request $request){
        $cart = session()->get('cart');
        $cliente=new TCliente();
        $cliente->nombre=$request->input('name');
        $cliente->email=$request->input('email');
        $cliente->celular=$request->input('phone');
        if($cliente->save()){
            $orden=new TOrden();
            $orden->id_cliente=$cliente->id;
            $orden->direccion_envio=$request->input('direccion');
            $orden->monto=0;
            $monto_aux=0;
            if($orden->save()){
                foreach($cart as $item){         
                    $producto=TProducto::FindOrFail($item['id']);
                    if($item['cantidad']<=$producto->stock){
                        $producto->stock=$producto->stock-$item['cantidad'];
                        $producto->save();
                        $orden_detalle=new TOrdenDetalle();
                        $orden_detalle->id_producto=$item['id'];
                        if($item['descuento']){
                            $precio_Act=$item['price']-$item['descuento']/100*$item['price'];
                            $orden_detalle->precio=$precio_Act;
                            $orden_detalle->total=$item['cantidad']*$precio_Act;
                            $monto_aux+=$item['cantidad']*$precio_Act;
                        }else{
                            $orden_detalle->precio=$item['price'];
                            $orden_detalle->total=$item['price']*$item['cantidad'];
                            $monto_aux+=$item['price']*$item['cantidad'];
                        }
                        $orden_detalle->id_orden=$orden->id;
                        $orden_detalle->cantidad=$item['cantidad'];
                        $orden_detalle->save();
                    }
                }
            }
            $orden->monto=$monto_aux;
            $orden->save();
            $request->session()->forget('cart');
            return redirect(route('checkout'))->with('status', 'Compra realizada Exitosamente');
        }
    }
}