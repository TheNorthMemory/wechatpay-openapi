<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Apply4sub\Sub_merchants\_sub_mchid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Settlement
{
    /**
     * 查询结算账户(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/apply4sub/sub_merchants/%7Bsub_mchid%7D/settlement
     */
    public function get(array $options = [
        'sub_mchid' => '1900006491',
    ]): ResponseInterface;

    /**
     * 查询结算账户(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/apply4sub/sub_merchants/%7Bsub_mchid%7D/settlement
     */
    public function getAsync(array $options = [
        'sub_mchid' => '1900006491',
    ]): PromiseInterface;
}
