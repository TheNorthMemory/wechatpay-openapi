<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ebike\Charge\Contracts\_contract_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Confirm
{
    /**
     * 创建用户当次充电代扣凭证(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/vehicle/ebike/chapter3_4.shtml
     */
    public function post(array $options = [
        'contract_id' => 'aAfixCs13LsdKPpfZfDkk2189ssXjfx',
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx47c677487ce3ac47',
            'sub_appid' => 'wxcc603d9f0d54eaf0',
            'charge_info' => [
                'start_time' => '2017-08-26T09:43:39+08:00',
                'charging_station_name' => 'xxx充电站',
                'charging_gun_number' => '6555',
                'device_id' => '12343232',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 创建用户当次充电代扣凭证(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/vehicle/ebike/chapter3_4.shtml#async
     */
    public function postAsync(array $options = [
        'contract_id' => 'aAfixCs13LsdKPpfZfDkk2189ssXjfx',
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx47c677487ce3ac47',
            'sub_appid' => 'wxcc603d9f0d54eaf0',
            'charge_info' => [
                'start_time' => '2017-08-26T09:43:39+08:00',
                'charging_station_name' => 'xxx充电站',
                'charging_gun_number' => '6555',
                'device_id' => '12343232',
            ],
        ],
    ]): PromiseInterface;
}
