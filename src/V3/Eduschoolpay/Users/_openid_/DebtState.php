<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Eduschoolpay\Users\_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface DebtState
{
    /**
     * 商户查询用户欠款状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/eduschoolpay/users/%7Bopenid%7D/debt-state
     */
    public function get(array $options = [
        'openid' => 'oUpF8uMuAJOM2pxb1Q',
    ]): ResponseInterface;

    /**
     * 商户查询用户欠款状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/eduschoolpay/users/%7Bopenid%7D/debt-state
     */
    public function getAsync(array $options = [
        'openid' => 'oUpF8uMuAJOM2pxb1Q',
    ]): PromiseInterface;
}
