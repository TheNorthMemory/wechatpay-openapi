<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Qrcode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Transactions\OutTradeNo $outTradeNo
 */
interface Transactions
{
    /**
     * 扣费受理(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/qrcode/transactions
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wxcbda96de0b165486',
            'sub_appid' => 'wxcbda96de0b165486',
            'sub_mchid' => '1900000109',
            'description' => '地铁扣费',
            'attach' => '深圳分店',
            'out_trade_no' => '20150806125346',
            'trade_scene' => 'BUS | METRO',
            'goods_tag' => 'WXG',
            'contract_id' => 'Wx15463511252015071056489715',
            'notify_url' => 'https://pay.weixin.qq.com/wxpay.html',
            'amount' => [
                'total' => 600,
                'currency' => 'CNY',
            ],
            'bus_info' => [
                'start_time' => '2017-08-26T10:43:39+08:00',
                'line_name' => '1路公车',
                'plate_number' => '粤B888888',
            ],
            'metro_info' => [
                'start_time' => '2017-08-26T10:43:39+08:00',
                'end_time' => '2017-08-26T10:43:39+08:00',
                'start_station' => '西单',
                'end_station' => '天安门西',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 扣费受理(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/qrcode/transactions
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wxcbda96de0b165486',
            'sub_appid' => 'wxcbda96de0b165486',
            'sub_mchid' => '1900000109',
            'description' => '地铁扣费',
            'attach' => '深圳分店',
            'out_trade_no' => '20150806125346',
            'trade_scene' => 'BUS | METRO',
            'goods_tag' => 'WXG',
            'contract_id' => 'Wx15463511252015071056489715',
            'notify_url' => 'https://pay.weixin.qq.com/wxpay.html',
            'amount' => [
                'total' => 600,
                'currency' => 'CNY',
            ],
            'bus_info' => [
                'start_time' => '2017-08-26T10:43:39+08:00',
                'line_name' => '1路公车',
                'plate_number' => '粤B888888',
            ],
            'metro_info' => [
                'start_time' => '2017-08-26T10:43:39+08:00',
                'end_time' => '2017-08-26T10:43:39+08:00',
                'start_station' => '西单',
                'end_station' => '天安门西',
            ],
        ],
    ]): PromiseInterface;
}
