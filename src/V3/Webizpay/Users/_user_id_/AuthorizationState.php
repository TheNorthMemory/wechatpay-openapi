<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Webizpay\Users\_user_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface AuthorizationState
{
    /**
     * 企业商户查询企业员工开通授权状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/users/%7Buser_id%7D/authorization-state
     */
    public function get(array $options = [
        'user_id' => '123456',
        'query' => [
            'sp_mchid' => '12341234',
            'sub_mchid' => '43214321',
        ],
    ]): ResponseInterface;

    /**
     * 企业商户查询企业员工开通授权状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/users/%7Buser_id%7D/authorization-state
     */
    public function getAsync(array $options = [
        'user_id' => '123456',
        'query' => [
            'sp_mchid' => '12341234',
            'sub_mchid' => '43214321',
        ],
    ]): PromiseInterface;
}
