<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Coupons;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Deactivate
{
    /**
     * 使券失效(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_14.shtml
     */
    public function post(array $options = [
        'json' => [
            'coupon_code' => 'sxxe34343434',
            'stock_id' => '1234567891',
            'deactivate_request_no' => '1002600620019090123143254436',
            'deactivate_reason' => '此券使用时间设置错误',
        ],
    ]): ResponseInterface;

    /**
     * 使券失效(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_14.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'coupon_code' => 'sxxe34343434',
            'stock_id' => '1234567891',
            'deactivate_request_no' => '1002600620019090123143254436',
            'deactivate_reason' => '此券使用时间设置错误',
        ],
    ]): PromiseInterface;
}
