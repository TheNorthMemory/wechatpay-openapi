<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Customs;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Orders
{
    /**
     * 报关(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/declarecustom_ch/chapter3_1.shtml
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/global/', // 跨境(香港接入)
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1230000109',
            'out_trade_no' => '20150806125346',
            'transaction_id' => '1000320306201511078440737890',
            'customs' => 'SHANGHAI_ZS',
            'merchant_customs_no' => '123456',
            'duty' => 888,
            'sub_order_no' => '20150806125346',
            'fee_type' => 'CNY',
            'order_fee' => 888,
            'transport_fee' => 888,
            'product_fee' => 888,
        ],
    ]): ResponseInterface;

    /**
     * 报关(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/declarecustom_ch/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/global/', // 跨境(香港接入)
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1230000109',
            'out_trade_no' => '20150806125346',
            'transaction_id' => '1000320306201511078440737890',
            'customs' => 'SHANGHAI_ZS',
            'merchant_customs_no' => '123456',
            'duty' => 888,
            'sub_order_no' => '20150806125346',
            'fee_type' => 'CNY',
            'order_fee' => 888,
            'transport_fee' => 888,
            'product_fee' => 888,
        ],
    ]): PromiseInterface;

    /**
     * 报关查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/declarecustom_ch/chapter3_3.shtml
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/global/', // 跨境(香港接入)
        'query' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1230000109',
            'order_type' => 'out_trade_no',
            'order_no' => '20150806125346',
            'customs' => 'SHANGHAI_ZS',
            'offset' => 1,
            'limit' => 20,
        ],
    ]): ResponseInterface;

    /**
     * 报关查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/declarecustom_ch/chapter3_3.shtml#async
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/global/', // 跨境(香港接入)
        'query' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1230000109',
            'order_type' => 'out_trade_no',
            'order_no' => '20150806125346',
            'customs' => 'SHANGHAI_ZS',
            'offset' => 1,
            'limit' => 20,
        ],
    ]): PromiseInterface;

    /**
     * 报关信息修改(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/declarecustom_ch/chapter3_5.shtml
     */
    public function patch(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/global/', // 跨境(香港接入)
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1230000109',
            'out_trade_no' => '20150806125346',
            'transaction_id' => '1000320306201511078440737890',
            'sub_order_no' => '20150806125346',
            'customs' => 'SHANGHAI_ZS',
            'merchant_customs_no' => '123456',
            'duty' => 888,
            'order_fee' => 888,
            'transport_fee' => 888,
            'product_fee' => 888,
        ],
    ]): ResponseInterface;

    /**
     * 报关信息修改(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/declarecustom_ch/chapter3_5.shtml#async
     */
    public function patchAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/global/', // 跨境(香港接入)
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1230000109',
            'out_trade_no' => '20150806125346',
            'transaction_id' => '1000320306201511078440737890',
            'sub_order_no' => '20150806125346',
            'customs' => 'SHANGHAI_ZS',
            'merchant_customs_no' => '123456',
            'duty' => 888,
            'order_fee' => 888,
            'transport_fee' => 888,
            'product_fee' => 888,
        ],
    ]): PromiseInterface;
}
