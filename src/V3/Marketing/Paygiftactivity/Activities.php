<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Paygiftactivity;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Activities\_activity_id_ $_activity_id_
 */
interface Activities
{
    /**
     * 获取支付有礼活动列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/paygiftactivity/chapter3_9.shtml
     */
    public function get(array $options = [
        'query' => [
            'offset' => 0,
            'limit' => 0,
            'activity_name' => '',
            'activity_status' => '',
            'award_type' => '',
        ],
    ]): ResponseInterface;

    /**
     * 获取支付有礼活动列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/paygiftactivity/chapter3_9.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'offset' => 0,
            'limit' => 0,
            'activity_name' => '',
            'activity_status' => '',
            'award_type' => '',
        ],
    ]): PromiseInterface;
}
