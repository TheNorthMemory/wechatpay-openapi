<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Apply4subject\Applyment\Merchants\_sub_mchid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface State
{
    /**
     * 获取商户开户意愿确认状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/apply4subject/applyment/merchants/%7Bsub_mchid%7D/state
     */
    public function get(array $options = [
        'sub_mchid' => '',
    ]): ResponseInterface;

    /**
     * 获取商户开户意愿确认状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/apply4subject/applyment/merchants/%7Bsub_mchid%7D/state
     */
    public function getAsync(array $options = [
        'sub_mchid' => '',
    ]): PromiseInterface;
}
