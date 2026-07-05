<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Parking\Reminders\Application;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Query
{
    /**
     * 查询停车场进件申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/application/query
     */
    public function get(array $options = [
        'query' => [
            'parking_lot_audit_no' => 'PLA202604230001',
            'out_parking_lot_id' => 'lot_sz_tencent_001',
        ],
    ]): ResponseInterface;

    /**
     * 查询停车场进件申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/application/query
     */
    public function getAsync(array $options = [
        'query' => [
            'parking_lot_audit_no' => 'PLA202604230001',
            'out_parking_lot_id' => 'lot_sz_tencent_001',
        ],
    ]): PromiseInterface;
}
