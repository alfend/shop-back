<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\AbstractUserController;
use App\Http\Requests\CartRequest;
use App\Http\Requests\ListRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\Client;
use App\Models\Products;
use Illuminate\Database\Eloquent\Builder;

/**
 * @group Users
 */
class CartController extends AbstractCrudController
{
    /**
     * @apiResourceCollection App\Http\Resources\CartResource
     * @apiResourceModel App\Models\Cart
     */
    public function index()
    {
        return CartResource::collection(Cart::all());
    }

    /**
     * @apiResource App\Http\Resources\CartResource
     * @apiResourceModel App\Models\Cart
     */
    public function store(CartRequest $request)
    {
        for ($i = 0; $i < count($request->product_ids); $i++) {
            $product = Products::find($request->product_ids[$i]);
            if($product->count > 0 ) {
                $product->count = $product->count -1;
                $product->save();
            }
        }
        $cart = $request->createCart();
        return new CartResource($cart);
    }

    /**
     * @apiResource App\Http\Resources\CartResource
     * @apiResourceModel App\Models\Cart
     */
    public function show(Cart $cart)
    {
        return new CartResource($cart);
    }

    /**
     * @apiResource App\Http\Resources\CartResource
     * @apiResourceModel App\Models\Cart
    public function update(CartRequest $request, Cart $cart)
    {
        return new CartResource($request->updateCart($cart));
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
    }
    */

    public static function getProgress()
    {
        $carts = Cart::all();
        $cartsUser = Cart::groupBy('user_id')->get('user_id');
        $cartsSum = Cart::sum('sum');
        $carts1000 = Cart::where('sum','>=',1000)->get();
        $products = Products::all();
        $products0 = Products::where('count','=',0)->get();
        $users = Client::all();

        return [
            'countCart' => $carts->count(),
            'cartsSum' => (int)($cartsSum),
            'carts1000' => $carts1000->count(),
            'countProduct' => $products->count(),
            'countProduct0' => $products0->count(),
            'countUser' => $users->count(),
            'cartsUser' => $cartsUser->count()
        ];
    }

    protected function createListQuery(ListRequest $request): Builder
    {
        return Cart::query();
    }

    protected function applyListFilter(Builder $builder, ListRequest $request, array $filter = []): Builder
    {
        $queryBuilder = parent::applyListFilter($builder, $request, $filter);
        return $queryBuilder;
    }
}
