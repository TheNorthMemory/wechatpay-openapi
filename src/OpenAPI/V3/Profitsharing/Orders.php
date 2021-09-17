<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Profitsharing;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Orders\_out_order_no_ $_out_order_no_
 * @property-read Orders\Unfreeze $unfreeze
 */
interface Orders
{
    /**
     * 请求分账(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_1_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'receivers' => [],
            'unfreeze_unsplit' => '',
        ],
    ]): ResponseInterface;

    /**
     * 请求分账(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_1_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'receivers' => [],
            'unfreeze_unsplit' => '',
        ],
    ]): PromiseInterface;
}
