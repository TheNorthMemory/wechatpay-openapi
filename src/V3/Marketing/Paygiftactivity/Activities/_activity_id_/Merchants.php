<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Paygiftactivity\Activities\_activity_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Merchants\Add $add
 * @property-read Merchants\Delete $delete
 */
interface Merchants
{
    /**
     * 查询活动发券商户号(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/paygiftactivity/chapter3_5.shtml
     */
    public function get(array $options = [
        'activity_id' => '',
        'query' => [
            'offset' => 0,
            'limit' => 20,
        ],
    ]): ResponseInterface;

    /**
     * 查询活动发券商户号(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/paygiftactivity/chapter3_5.shtml#async
     */
    public function getAsync(array $options = [
        'activity_id' => '',
        'query' => [
            'offset' => 0,
            'limit' => 20,
        ],
    ]): PromiseInterface;
}
