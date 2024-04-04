<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\EduPapay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Transactions\OutTradeNo $outTradeNo
 * @property-read Transactions\Id $id
 */
interface Transactions
{
    /**
     * 教育通扣款受理(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter5_2_7.shtml
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wx8888888888888888',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wx8888888888888888',
            'body' => '新东方-语文课程',
            'attach' => '自定义数据',
            'out_trade_no' => '121775250124070332',
            'goods_tag' => 'test',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay',
            'contract_id' => 'wx998877665544wx',
            'trade_scene' => 'EDUCATION_PERIOD',
            'amount' => [
                'total' => 888,
                'currency' => 'CNY',
            ],
            'device_information' => [
                'device_id' => '12343232',
                'device_ip' => '123.12.12.123',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 教育通扣款受理(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter5_2_7.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wx8888888888888888',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wx8888888888888888',
            'body' => '新东方-语文课程',
            'attach' => '自定义数据',
            'out_trade_no' => '121775250124070332',
            'goods_tag' => 'test',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay',
            'contract_id' => 'wx998877665544wx',
            'trade_scene' => 'EDUCATION_PERIOD',
            'amount' => [
                'total' => 888,
                'currency' => 'CNY',
            ],
            'device_information' => [
                'device_id' => '12343232',
                'device_ip' => '123.12.12.123',
            ],
        ],
    ]): PromiseInterface;
}
