<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Inspolicymgr\Deduct\Policies;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _policy_id_
{
    /**
     * 查询保单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/inspolicymgr/deduct/policies/%7Bpolicy_id%7D
     */
    public function get(array $options = [
        'policy_id' => 'Poisihsiaxishishi4hihsid1ii411id',
    ]): ResponseInterface;

    /**
     * 查询保单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/inspolicymgr/deduct/policies/%7Bpolicy_id%7D
     */
    public function getAsync(array $options = [
        'policy_id' => 'Poisihsiaxishishi4hihsid1ii411id',
    ]): PromiseInterface;
}
