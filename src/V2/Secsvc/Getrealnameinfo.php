<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secsvc;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Getrealnameinfo
{
    /**
     * 微信支付实名授权(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secsvc/getrealnameinfo
     */
    public function post(array $options = [
        'xml' => [
            'version' => '1.0',
            'mch_id' => '1900000109',
            'appid' => 'wx2421b1c4370ec43b',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'cert_serialno' => '59303040AA42CB61E0C059E8E6156C9F0F2A1E5E',
            'access_token' => '81_...',
            'timestamp' => '1414561699',
            'cert_sign' => 'MuRThxRSlqvs2Mi9i2VRCr_MQ==',
            'charset' => 'UTF-8',
            'sign_type' => 'HMAC-SHA256',
        ],
        'base_uri' => 'https://fraud.mch.weixin.qq.com/',
    ]): ResponseInterface;

    /**
     * 微信支付实名授权(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secsvc/getrealnameinfo
     */
    public function postAsync(array $options = [
        'xml' => [
            'version' => '1.0',
            'mch_id' => '1900000109',
            'appid' => 'wx2421b1c4370ec43b',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'cert_serialno' => '59303040AA42CB61E0C059E8E6156C9F0F2A1E5E',
            'access_token' => '81_...',
            'timestamp' => '1414561699',
            'cert_sign' => 'MuRThxRSlqvs2Mi9i2VRCr_MQ==',
            'charset' => 'UTF-8',
            'sign_type' => 'HMAC-SHA256',
        ],
        'base_uri' => 'https://fraud.mch.weixin.qq.com/',
    ]): PromiseInterface;
}
