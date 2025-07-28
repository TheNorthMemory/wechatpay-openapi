<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Zhejiang\Authcode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Try_
{
    /**
     * 预核销品类凭证码(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/authcode/try
     */
    public function post(array $options = [
        'json' => [
            'sp_serial_no' => '',
            'mchnt_no' => '',
            'term_no' => '',
            'auth_code' => '',
            'category' => 'A01',
            'county_code' => '330000',
        ],
    ]): ResponseInterface;

    /**
     * 预核销品类凭证码(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/authcode/try
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_serial_no' => '',
            'mchnt_no' => '',
            'term_no' => '',
            'auth_code' => '',
            'category' => 'A01',
            'county_code' => '330000',
        ],
    ]): PromiseInterface;
}
