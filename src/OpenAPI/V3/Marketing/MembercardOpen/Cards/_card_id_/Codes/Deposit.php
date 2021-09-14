<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_\Codes;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Deposit
{
    /**
     * 导入会员Code (同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_7.shtml
     */
    public function post(array $options = [
        'card_id' => '',
        'json' => [
            'code' => [],
        ],
    ]): ResponseInterface;

    /**
     * 导入会员Code (异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_7.shtml#async
     */
    public function postAsync(array $options = [
        'card_id' => '',
        'json' => [
            'code' => [],
        ],
    ]): PromiseInterface;
}
