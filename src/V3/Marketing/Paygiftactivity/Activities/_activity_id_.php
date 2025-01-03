<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Paygiftactivity\Activities;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _activity_id_\Merchants $merchants
 * @property-read _activity_id_\Goods $goods
 * @property-read _activity_id_\Terminate $terminate
 */
interface _activity_id_
{
    /**
     * 查询活动详情接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/paygiftactivity/activities/%7Bactivity_id%7D
     */
    public function get(array $options = [
        'activity_id' => '',
    ]): ResponseInterface;

    /**
     * 查询活动详情接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/paygiftactivity/activities/%7Bactivity_id%7D
     */
    public function getAsync(array $options = [
        'activity_id' => '',
    ]): PromiseInterface;
}
