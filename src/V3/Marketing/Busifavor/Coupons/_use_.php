<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Coupons;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _use_
{
    /**
     * 核销用户券(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_3.shtml
     */
    public function post(array $options = [
        'use' => 'use',
        'json' => [
            'coupon_code' => 'sxxe34343434',
            'stock_id' => '100088',
            'appid' => 'wx1234567889999',
            'use_time' => '2015-05-20T13:29:35+08:00',
            'use_request_no' => '1002600620019090123143254435',
            'openid' => 'xsd3434454567676',
        ],
    ]): ResponseInterface;

    /**
     * 核销用户券(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_3.shtml#async
     */
    public function postAsync(array $options = [
        'use' => 'use',
        'json' => [
            'coupon_code' => 'sxxe34343434',
            'stock_id' => '100088',
            'appid' => 'wx1234567889999',
            'use_time' => '2015-05-20T13:29:35+08:00',
            'use_request_no' => '1002600620019090123143254435',
            'openid' => 'xsd3434454567676',
        ],
    ]): PromiseInterface;
}
