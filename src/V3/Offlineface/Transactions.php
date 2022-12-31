<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Offlineface;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Transactions\OutTradeNo $outTradeNo
 */
interface Transactions
{
    /**
     * 申请扣款接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/access-specifications.html
     */
    public function post(array $options = [
        'json' => [
            'auth_code' => '',
            'sp_appid' => '',
            'sp_mchid' => '',
            'sub_appid' => '',
            'sub_mchid' => '',
            'amount' => [
                'total' => 0,
                'currency' => 'CNY',
            ],
            'scene_info' => [
                'device_ip' => '',
            ],
            'goods_tag' => '',
            'description' => '',
            'attach' => '',
            'settle_info' => [
                'profit_sharing' => true,
            ],
            'out_trade_no' => '',
            'business' => [
                'business_product_id' => 0,
                'business_scene_id' => 0,
            ],
        ],
    ]): ResponseInterface;

    /**
     * 申请扣款接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/access-specifications.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'auth_code' => '',
            'sp_appid' => '',
            'sp_mchid' => '',
            'sub_appid' => '',
            'sub_mchid' => '',
            'amount' => [
                'total' => 0,
                'currency' => 'CNY',
            ],
            'scene_info' => [
                'device_ip' => '',
            ],
            'goods_tag' => '',
            'description' => '',
            'attach' => '',
            'settle_info' => [
                'profit_sharing' => true,
            ],
            'out_trade_no' => '',
            'business' => [
                'business_product_id' => 0,
                'business_scene_id' => 0,
            ],
        ],
    ]): PromiseInterface;
}
