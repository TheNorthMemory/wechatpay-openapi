<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Offlinefacemch\Organizations\_organization_id_\Users\UserId\_user_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface TerminateContract
{
    /**
     * 解除刷脸用户签约关系接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/offlinefacemch/organizations/%7Borganization_id%7D/users/user-id/%7Buser_id%7D/terminate-contract
     */
    public function post(array $options = [
        'organization_id' => '',
        'use_id' => '',
    ]): ResponseInterface;

    /**
     * 解除刷脸用户签约关系接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/offlinefacemch/organizations/%7Borganization_id%7D/users/user-id/%7Buser_id%7D/terminate-contract
     */
    public function postAsync(array $options = [
        'organization_id' => '',
        'use_id' => '',
    ]): PromiseInterface;
}
