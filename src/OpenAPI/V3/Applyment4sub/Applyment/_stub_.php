<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Applyment4sub\Applyment;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _stub_
{
    /**
     * 提交申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/applyment4sub/chapter3_1.shtml
     */
    public function post(array $options = [
        'stub' => '',
        'json' => [
            'business_code' => '',
            'contact_info' => [],
            'subject_info' => [],
            'business_info' => [],
            'settlement_info' => [],
            'bank_account_info' => [],
            'addition_info' => [],
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): ResponseInterface;

    /**
     * 提交申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/applyment4sub/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'stub' => '',
        'json' => [
            'business_code' => '',
            'contact_info' => [],
            'subject_info' => [],
            'business_info' => [],
            'settlement_info' => [],
            'bank_account_info' => [],
            'addition_info' => [],
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): PromiseInterface;
}
