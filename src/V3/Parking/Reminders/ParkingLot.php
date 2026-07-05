<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Parking\Reminders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ParkingLot
{
    /**
     * 查询停车场信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/parking-lot
     */
    public function get(array $options = [
        'query' => [
            'out_parking_lot_id' => 'lot_sz_tencent_001',
            'wx_parking_lot_id' => '21232735744117624001123604298240',
        ],
    ]): ResponseInterface;

    /**
     * 查询停车场信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/parking-lot
     */
    public function getAsync(array $options = [
        'query' => [
            'out_parking_lot_id' => 'lot_sz_tencent_001',
            'wx_parking_lot_id' => '21232735744117624001123604298240',
        ],
    ]): PromiseInterface;
}
