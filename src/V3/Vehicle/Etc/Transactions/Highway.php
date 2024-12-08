<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Vehicle\Etc\Transactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Highway
{
    /**
     * 高速场景商户扣款(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/vehicle/etc/transactions/highway
     */
    public function post(array $options = [
        'json' => [
            'out_trade_no' => '121775250124070332',
            'sub_mchid' => '1900000109',
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wxd678efh567hg6999',
            'contract_id' => 'wxd678ef4Fwxd678ef4Fwxd678ef4F21',
            'description' => '商品信息',
            'attach' => '自定义数据',
            'goods_tag' => 'test',
            'highway_info' => [
                'plate_number' => '粤B888888',
                'start_time' => '2017-08-26T09:43:39+08:00',
                'end_time' => '2017-08-26T09:43:39+08:00',
                'channel_type' => 'ETC',
                'car_type' => 'CAR',
                'entrance' => '沿江深圳-大铲湾',
                'exit' => '广珠东线-珠海站',
                'carrying_capacity' => 3,
                'carrying_range' => '6-12',
            ],
            'amount' => [
                'total' => 888,
                'currency' => 'CNY',
            ],
            'device_info' => [
                'device_id' => 'POS1:1',
                'device_ip' => '123.12.12.123',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 高速场景商户扣款(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/vehicle/etc/transactions/highway
     */
    public function postAsync(array $options = [
        'json' => [
            'out_trade_no' => '121775250124070332',
            'sub_mchid' => '1900000109',
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wxd678efh567hg6999',
            'contract_id' => 'wxd678ef4Fwxd678ef4Fwxd678ef4F21',
            'description' => '商品信息',
            'attach' => '自定义数据',
            'goods_tag' => 'test',
            'highway_info' => [
                'plate_number' => '粤B888888',
                'start_time' => '2017-08-26T09:43:39+08:00',
                'end_time' => '2017-08-26T09:43:39+08:00',
                'channel_type' => 'ETC',
                'car_type' => 'CAR',
                'entrance' => '沿江深圳-大铲湾',
                'exit' => '广珠东线-珠海站',
                'carrying_capacity' => 3,
                'carrying_range' => '6-12',
            ],
            'amount' => [
                'total' => 888,
                'currency' => 'CNY',
            ],
            'device_info' => [
                'device_id' => 'POS1:1',
                'device_ip' => '123.12.12.123',
            ],
        ],
    ]): PromiseInterface;
}
