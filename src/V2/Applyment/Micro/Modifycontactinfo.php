<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Applyment\Micro;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Modifycontactinfo
{
    /**
     * 修改联系信息(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.04.13
     * @link https://wechatpay.im/openapi/v2/applyment/micro/modifycontactinfo
     */
    public function post(array $options = [
        'xml' => [
            'version' => '1.0',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'sub_mch_id' => '1230000109',
            'mobile_phone' => '13734543456',
            'email' => 'zhangsan@227.com',
            'merchant_name' => '张三的小店',
            'cert_sn' => '50062CE505775F070CAB06E697F1BBD1AD4F4D87',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 修改联系信息(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.04.13
     * @link https://wechatpay.im/openapi/v2/applyment/micro/modifycontactinfo
     */
    public function postAsync(array $options = [
        'xml' => [
            'version' => '1.0',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'sub_mch_id' => '1230000109',
            'mobile_phone' => '13734543456',
            'email' => 'zhangsan@227.com',
            'merchant_name' => '张三的小店',
            'cert_sn' => '50062CE505775F070CAB06E697F1BBD1AD4F4D87',
        ],
        'security' => true,
    ]): PromiseInterface;
}
