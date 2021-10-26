<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Eduschoolpay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Transactions\OutTradeNo $outTradeNo
 * @property-read Transactions\Id $id
 */
interface Transactions
{
    /**
     * 扣款(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/edu/eduschoolpay/chapter4_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wx8888888888888888',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wx8888888888888888',
            'description' => '中山大学-第二食堂-海鲜炒饭',
            'attach' => '自定义数据',
            'out_trade_no' => '121775250124070332',
            'goods_tag' => 'test',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay',
            'contract_id' => '2045011120563805041758214605',
            'user_id' => '20200330tony',
            'amount' => [
                'total' => 888,
                'currency' => 'CNY',
            ],
            'scene_info' => [
                'start_time' => '2017-08-26T09:43:39+08:00',
                'school_id' => '18260256813396',
                'scene_type' => 'CANTEEN',
            ],
            'device_info' => [
                'device_id' => '12343232',
                'device_ip' => '123.12.12.123',
            ],
            'settle_info' => [
                'profit_sharing' => true,
            ],
            'payment_mode' => 'SYNC',
        ],
    ]): ResponseInterface;

    /**
     * 扣款(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/edu/eduschoolpay/chapter4_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wx8888888888888888',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wx8888888888888888',
            'description' => '中山大学-第二食堂-海鲜炒饭',
            'attach' => '自定义数据',
            'out_trade_no' => '121775250124070332',
            'goods_tag' => 'test',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay',
            'contract_id' => '2045011120563805041758214605',
            'user_id' => '20200330tony',
            'amount' => [
                'total' => 888,
                'currency' => 'CNY',
            ],
            'scene_info' => [
                'start_time' => '2017-08-26T09:43:39+08:00',
                'school_id' => '18260256813396',
                'scene_type' => 'CANTEEN',
            ],
            'device_info' => [
                'device_id' => '12343232',
                'device_ip' => '123.12.12.123',
            ],
            'settle_info' => [
                'profit_sharing' => true,
            ],
            'payment_mode' => 'SYNC',
        ],
    ]): PromiseInterface;
}
