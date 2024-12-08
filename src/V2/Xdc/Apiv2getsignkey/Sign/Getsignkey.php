<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Xdc\Apiv2getsignkey\Sign;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Getsignkey
{
    /**
     * 获取验签密钥(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/xdc/apiv2getsignkey/sign/getsignkey
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 获取验签密钥(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/xdc/apiv2getsignkey/sign/getsignkey
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
        ],
    ]): PromiseInterface;
}
