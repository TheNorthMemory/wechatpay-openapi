<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao\FapiaoApplications\_fapiao_apply_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Reverse
{
    /**
     * 冲红电子发票(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/fapiao-applications/%7Bfapiao_apply_id%7D/reverse
     */
    public function post(array $options = [
        'fapiao_apply_id' => '4200000444201910177461284488',
        'json' => [
            'sub_mchid' => '1900000109',
            'reverse_reason' => '退款',
            'fapiao_information' => [[
                'fapiao_id' => '20200701123456',
                'fapiao_code' => '044001911211',
                'fapiao_number' => '12897794',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 冲红电子发票(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/fapiao-applications/%7Bfapiao_apply_id%7D/reverse
     */
    public function postAsync(array $options = [
        'fapiao_apply_id' => '4200000444201910177461284488',
        'json' => [
            'sub_mchid' => '1900000109',
            'reverse_reason' => '退款',
            'fapiao_information' => [[
                'fapiao_id' => '20200701123456',
                'fapiao_code' => '044001911211',
                'fapiao_number' => '12897794',
            ],],
        ],
    ]): PromiseInterface;
}
