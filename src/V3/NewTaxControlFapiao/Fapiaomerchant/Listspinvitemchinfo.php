<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao\Fapiaomerchant;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Listspinvitemchinfo
{
    /**
     * 获取邀请开通的商户信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/fapiaomerchant/listspinvitemchinfo
     */
    public function get(array $options = [
        'query' => [
            'query_time_start' => '2020-07-01T12:00:00+08:00',
            'query_time_end' => '2020-07-02T12:00:00+08:00',
            'offset' => 10,
            'limit' => 1,
            'invite_code' => 'code_20200101_123',
            'mch_invite_status' => 'MCH_INVITE_SUCC',
        ],
    ]): ResponseInterface;

    /**
     * 获取邀请开通的商户信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/fapiaomerchant/listspinvitemchinfo
     */
    public function getAsync(array $options = [
        'query' => [
            'query_time_start' => '2020-07-01T12:00:00+08:00',
            'query_time_end' => '2020-07-02T12:00:00+08:00',
            'offset' => 10,
            'limit' => 1,
            'invite_code' => 'code_20200101_123',
            'mch_invite_status' => 'MCH_INVITE_SUCC',
        ],
    ]): PromiseInterface;
}
