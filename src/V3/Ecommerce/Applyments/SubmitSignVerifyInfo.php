<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Applyments;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface SubmitSignVerifyInfo
{
    /**
     * 平台代理签约核身(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/applyments/submit-sign-verify-info
     */
    public function post(array $options = [
        'json' => [
            'out_request_no' => '1900013511_10000',
            'applyment_id' => 2000002124775691,
            'pre_sign_time' => '2018-06-08T10:34:56+08:00',
            'proxy_verify_identity_info' => [
                'verify_identity_type' => 'VERIFY_IDENTITY_TYPE_FACE_TO_FACE',
                'verify_identity_result' => true,
            ],
        ],
    ]): ResponseInterface;

    /**
     * 平台代理签约核身(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/applyments/submit-sign-verify-info
     */
    public function postAsync(array $options = [
        'json' => [
            'out_request_no' => '1900013511_10000',
            'applyment_id' => 2000002124775691,
            'pre_sign_time' => '2018-06-08T10:34:56+08:00',
            'proxy_verify_identity_info' => [
                'verify_identity_type' => 'VERIFY_IDENTITY_TYPE_FACE_TO_FACE',
                'verify_identity_result' => true,
            ],
        ],
    ]): PromiseInterface;
}
