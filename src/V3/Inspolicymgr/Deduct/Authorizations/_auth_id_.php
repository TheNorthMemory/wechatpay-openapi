<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Inspolicymgr\Deduct\Authorizations;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _auth_id_
{
    /**
     * 查询保单授权信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/inspolicymgr/deduct/authorizations/%7Bauth_id%7D
     */
    public function get(array $options = [
        'auth_id' => '5778aadY9nltAsZzXixCkFIGYnV2V',
    ]): ResponseInterface;

    /**
     * 查询保单授权信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/inspolicymgr/deduct/authorizations/%7Bauth_id%7D
     */
    public function getAsync(array $options = [
        'auth_id' => '5778aadY9nltAsZzXixCkFIGYnV2V',
    ]): PromiseInterface;
}
