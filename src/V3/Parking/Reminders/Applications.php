<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Parking\Reminders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Applications
{
    /**
     * 查询停车场进件申请单列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/applications
     */
    public function get(array $options = [
        'query' => [
            'out_parking_lot_id' => 'lot_sz_tencent_001',
            'offset' => 0,
            'limit' => 10,
        ],
    ]): ResponseInterface;

    /**
     * 查询停车场进件申请单列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/applications
     */
    public function getAsync(array $options = [
        'query' => [
            'out_parking_lot_id' => 'lot_sz_tencent_001',
            'offset' => 0,
            'limit' => 10,
        ],
    ]): PromiseInterface;
}
