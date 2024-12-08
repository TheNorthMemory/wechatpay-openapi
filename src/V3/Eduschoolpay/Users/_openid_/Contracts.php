<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Eduschoolpay\Users\_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Contracts
{
    /**
     * 查询用户签约列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/eduschoolpay/users/%7Bopenid%7D/contracts
     */
    public function get(array $options = [
        'openid' => 'oUpF8uMuAJOM2pxb1Q',
        'query' => [
            'plan_id' => '101164396123311331',
            'contract_status' => 'ADD',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): ResponseInterface;

    /**
     * 查询用户签约列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/eduschoolpay/users/%7Bopenid%7D/contracts
     */
    public function getAsync(array $options = [
        'openid' => 'oUpF8uMuAJOM2pxb1Q',
        'query' => [
            'plan_id' => '101164396123311331',
            'contract_status' => 'ADD',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): PromiseInterface;
}
