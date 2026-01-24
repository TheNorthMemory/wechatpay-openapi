<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Inspolicymgr\Deduct\Policies;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Terminate
{
    /**
     * 保单失效(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/inspolicymgr/deduct/policies/terminate
     */
    public function post(array $options = [
        'json' => [
            'policy_id' => 'Poisihsiaxishishi4hihsid1ii411id',
        ],
    ]): ResponseInterface;

    /**
     * 保单失效(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/inspolicymgr/deduct/policies/terminate
     */
    public function postAsync(array $options = [
        'json' => [
            'policy_id' => 'Poisihsiaxishishi4hihsid1ii411id',
        ],
    ]): PromiseInterface;
}
