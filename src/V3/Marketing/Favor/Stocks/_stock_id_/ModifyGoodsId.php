<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ModifyGoodsId
{
    /**
     * 修改可用单品编码(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/stocks/%7Bstock_id%7D/modify-goods-id
     */
    public function post(array $options = [
        'stock_id' => '9865000',
        'json' => [
            'stock_creator_mchid' => '8956000',
            'add_goods_id_list' => ['8956000'],
            'delete_goods_id_list' => ['8956000'],
        ],
    ]): ResponseInterface;

    /**
     * 修改可用单品编码(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/stocks/%7Bstock_id%7D/modify-goods-id
     */
    public function postAsync(array $options = [
        'stock_id' => '9865000',
        'json' => [
            'stock_creator_mchid' => '8956000',
            'add_goods_id_list' => ['8956000'],
            'delete_goods_id_list' => ['8956000'],
        ],
    ]): PromiseInterface;
}
