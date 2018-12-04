<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;
use \Kalnoy\Nestedset\NodeTrait;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::get()->toTree();
        // dd($shops);
        return view('welcome', compact('shops'));
    }

    public function change()
    {
      $parent=Shop::find(10);
      // $siblin= $parent->getSiblings();

      $node=Shop::find(2);
      // dd($node);
      // $node->delete();
      $node->appendToNode($parent)->save();
    // $shops =(array)  Shop::get()->toTree();
      // Shop::rebuildTree($shops ,$delete);
    }
    public function up($node){
        $shop = Shop::where('id' , $node)->first();
        // dd($shop);
        $bool = $shop->up();
        $shops = (array) Shop::get()->toTree();
        Shop::rebuildTree($shops);
        return view('welcome', compact('shops'));
    }
    public function down($node){
        $node->down();
    }
}
