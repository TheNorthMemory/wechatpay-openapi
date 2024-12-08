<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Mchalterapply\Mchsubjectalterapplyment\_apply_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Revoke
{
    /**
     * 撤销资料变更申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mchalterapply/mchsubjectalterapplyment/%7Bapply_id%7D/revoke
     */
    public function post(array $options = [
        'apply_id' => '20220617143306000013906025001',
    ]): ResponseInterface;

    /**
     * 撤销资料变更申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mchalterapply/mchsubjectalterapplyment/%7Bapply_id%7D/revoke
     */
    public function postAsync(array $options = [
        'apply_id' => '20220617143306000013906025001',
    ]): PromiseInterface;
}
