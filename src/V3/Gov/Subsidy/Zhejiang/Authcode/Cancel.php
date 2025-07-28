<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Zhejiang\Authcode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Cancel
{
    /**
     * 品类凭证码预核销撤销(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/authcode/cancel
     */
    public function post(array $options = [
        'json' => [
            'sp_serial_no' => '',
            'cred_frozen_no' => '',
            'trans_date' => '',
            'trans_time' => '',
            'auth_code' => '',
            'req_ssn' => '123',
        ],
    ]): ResponseInterface;

    /**
     * 品类凭证码预核销撤销(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/authcode/cancel
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_serial_no' => '',
            'cred_frozen_no' => '',
            'trans_date' => '',
            'trans_time' => '',
            'auth_code' => '',
            'req_ssn' => '123',
        ],
    ]): PromiseInterface;
}
