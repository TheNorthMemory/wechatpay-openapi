<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Palmservice\Authorization\Openid;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _openid_
{
    /**
     * 查询刷掌授权(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/palmservice/authorization/openid/%7Bopenid%7D
     */
    public function get(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'query' => [
            'organization_id' => '1004',
        ],
    ]): ResponseInterface;

    /**
     * 查询刷掌授权(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/palmservice/authorization/openid/%7Bopenid%7D
     */
    public function getAsync(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'query' => [
            'organization_id' => '1004',
        ],
    ]): PromiseInterface;
}
