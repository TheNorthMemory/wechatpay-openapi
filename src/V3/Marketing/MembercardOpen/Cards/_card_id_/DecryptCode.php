<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface DecryptCode
{
    /**
     * 加密code解码（跳转型激活）(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter4_4.shtml
     */
    public function get(array $options = [
        'card_id' => '',
        'query' => [
            'encrypt_code' => '',
        ],
    ]): ResponseInterface;

    /**
     * 加密code解码（跳转型激活）(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter4_4.shtml#async
     */
    public function getAsync(array $options = [
        'card_id' => '',
        'query' => [
            'encrypt_code' => '',
        ],
    ]): PromiseInterface;
}