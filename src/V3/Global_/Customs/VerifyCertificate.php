<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Customs;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface VerifyCertificate
{
    /**
     * 身份信息校验(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_3_2.shtml
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1230000109',
            'out_trade_no' => '20150806125346',
            'transaction_id' => '1000320306201511078440737890',
            'sub_order_no' => '20150806125346',
            'customs' => 'SHANGHAI_ZS',
            'merchant_customs_no' => '123456',
            'certificate_type' => 'IDCARD',
            'certificate_id' => 'Rsa::encrypt(0101211X, WechatpayPlatformCertificateInstance, OPENSSL_PKCS1_PADDING)',
            'certificate_name' => 'Rsa::encrypt(张三, WechatpayPlatformCertificateInstance, OPENSSL_PKCS1_PADDING)',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): ResponseInterface;

    /**
     * 身份信息校验(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_3_2.shtml#async
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1230000109',
            'out_trade_no' => '20150806125346',
            'transaction_id' => '1000320306201511078440737890',
            'sub_order_no' => '20150806125346',
            'customs' => 'SHANGHAI_ZS',
            'merchant_customs_no' => '123456',
            'certificate_type' => 'IDCARD',
            'certificate_id' => 'Rsa::encrypt(0101211X, WechatpayPlatformCertificateInstance, OPENSSL_PKCS1_PADDING)',
            'certificate_name' => 'Rsa::encrypt(张三, WechatpayPlatformCertificateInstance, OPENSSL_PKCS1_PADDING)',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): PromiseInterface;
}
