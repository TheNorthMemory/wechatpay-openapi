<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Risk;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Getpublickey
{
    /**
     * 获取RSA加密公钥(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/mch_pay_yhk.php?chapter=24_7&index=4
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sign_type' => 'MD5',
        ],
        'security' => true,
        'base_uri' => 'https://fraud.mch.weixin.qq.com/',
    ]): ResponseInterface;

    /**
     * 获取RSA加密公钥(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/mch_pay_yhk.php?chapter=24_7&index=4#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sign_type' => 'MD5',
        ],
        'security' => true,
        'base_uri' => 'https://fraud.mch.weixin.qq.com/',
    ]): PromiseInterface;
}
