<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ebike\Charge;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Transactions\OutTradeNo $outTradeNo
 * @property-read Transactions\Id $id
 */
interface Transactions
{
    /**
     * 充电自行车代扣受理扣款(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/vehicle/ebike/chapter3_5.shtml
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wxd678efh567hg678',
            'sub_appid' => 'wxd678efh567hg6999',
            'out_trade_no' => '121775250124070332',
            'attach' => '自定义数据',
            'goods_tag' => 'test',
            'notify_url' => 'http://1111:111/metro-spt-api/callback',
            'description' => '商品信息',
            'charging_token' => 'sdjf23kdsHJfdk',
            'amount' => [
                'total' => 888,
                'currency' => 'CNY',
            ],
            'charge_info' => [
                'start_time' => '2017-08-26T09:43:39+08:00',
                'end_time' => '2017-08-26T09:43:39+08:00',
                'charging_station_name' => 'xxx充电站',
                'charging_gun_number' => '6555',
                'charged_capacity' => 10,
                'park_duration' => 60,
                'park_fee' => 100,
            ],
            'device_info' => [
                'device_id' => '12343232',
                'device_ip' => '123.12.12.123',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 充电自行车代扣受理扣款(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/vehicle/ebike/chapter3_5.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wxd678efh567hg678',
            'sub_appid' => 'wxd678efh567hg6999',
            'out_trade_no' => '121775250124070332',
            'attach' => '自定义数据',
            'goods_tag' => 'test',
            'notify_url' => 'http://1111:111/metro-spt-api/callback',
            'description' => '商品信息',
            'charging_token' => 'sdjf23kdsHJfdk',
            'amount' => [
                'total' => 888,
                'currency' => 'CNY',
            ],
            'charge_info' => [
                'start_time' => '2017-08-26T09:43:39+08:00',
                'end_time' => '2017-08-26T09:43:39+08:00',
                'charging_station_name' => 'xxx充电站',
                'charging_gun_number' => '6555',
                'charged_capacity' => 10,
                'park_duration' => 60,
                'park_fee' => 100,
            ],
            'device_info' => [
                'device_id' => '12343232',
                'device_ip' => '123.12.12.123',
            ],
        ],
    ]): PromiseInterface;
}
