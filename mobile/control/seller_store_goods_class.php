<?php
/**
 * 商家店铺商品分类
 *
 * @好商城V4 (c) 2015-2016 33hao Inc.
 * @license    http://www.haoid.cn
 * @link       交流群号：216611541
 * @since      好商城提供技术支持 授权请购买shopnc授权
 */



defined('InShopNC') or exit('Access Invalid!');
class seller_store_goods_classControl extends mobileSellerControl{

    public function __construct() {
        parent::__construct();
    }

    public function indexOp() {
        $this->class_listOp();
    }

    /**
     * 返回商家店铺商品分类列表
     */
    public function class_listOp() {
        $store_goods_class = Model('store_goods_class')->getStoreGoodsClassPlainList($this->store_info['store_id']);
        output_data(array('class_list' => $store_goods_class));
    }
}
