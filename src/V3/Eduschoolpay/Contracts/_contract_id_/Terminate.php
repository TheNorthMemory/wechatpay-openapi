<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Eduschoolpay\Contracts\_contract_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Terminate
{
    /**
     * 商户主动解约(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/edu/eduschoolpay/chapter3_3.shtml
     */
    public function post(array $options = [
        'json' => [
            'contract_id' => '2045011120563805041758214605',
        ],
    ]): ResponseInterface;

    /**
     * 商户主动解约(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/edu/eduschoolpay/chapter3_3.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'contract_id' => '2045011120563805041758214605',
        ],
    ]): PromiseInterface;
}
