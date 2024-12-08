<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\IndividualContracts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _openid_
{
    /**
     * 查询个人收款方授权结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/individual-contracts/%7Bopenid%7D
     */
    public function get(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'query' => [
            'appid' => 'wxd678efh567h23787',
            'permission_type' => 'INDIVIDUAL_PAYEE',
        ],
    ]): ResponseInterface;

    /**
     * 查询个人收款方授权结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/individual-contracts/%7Bopenid%7D
     */
    public function getAsync(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'query' => [
            'appid' => 'wxd678efh567h23787',
            'permission_type' => 'INDIVIDUAL_PAYEE',
        ],
    ]): PromiseInterface;
}
