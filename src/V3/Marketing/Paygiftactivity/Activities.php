<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Paygiftactivity;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Activities\_activity_id_ $_activity_id_
 */
interface Activities
{
    /**
     * 获取支付有礼活动列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/paygiftactivity/activities
     */
    public function get(array $options = [
        'query' => [
            'offset' => 0,
            'limit' => 0,
            'activity_name' => '',
            'activity_status' => 'CREATE_ACT_STATUS | ONGOING_ACT_STATUS | TERMINATE_ACT_STATUS | STOP_ACT_STATUS',
            'award_type' => 'BUSIFAVOR',
        ],
    ]): ResponseInterface;

    /**
     * 获取支付有礼活动列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/paygiftactivity/activities
     */
    public function getAsync(array $options = [
        'query' => [
            'offset' => 0,
            'limit' => 0,
            'activity_name' => '',
            'activity_status' => 'CREATE_ACT_STATUS | ONGOING_ACT_STATUS | TERMINATE_ACT_STATUS | STOP_ACT_STATUS',
            'award_type' => 'BUSIFAVOR',
        ],
    ]): PromiseInterface;
}
