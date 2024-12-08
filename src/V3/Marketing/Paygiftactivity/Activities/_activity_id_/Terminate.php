<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Paygiftactivity\Activities\_activity_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Terminate
{
    /**
     * 终止活动(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/paygiftactivity/activities/%7Bactivity_id%7D/terminate
     */
    public function post(array $options = [
        'activity_id' => '',
    ]): ResponseInterface;

    /**
     * 终止活动(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/paygiftactivity/activities/%7Bactivity_id%7D/terminate
     */
    public function postAsync(array $options = [
        'activity_id' => '',
    ]): PromiseInterface;
}
