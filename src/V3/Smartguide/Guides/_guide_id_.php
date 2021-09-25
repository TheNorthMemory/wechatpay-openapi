<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Smartguide\Guides;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read _guide_id_\Assign $assign
 */
interface _guide_id_
{
    /**
     * 服务人员信息更新(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/smartguide/chapter3_4.shtml
     */
    public function patch(array $options = [
        'guide_id' => 'LLA3WJ6DSZUfiaZDS79FH5Wm5m4X69TBic',
        'json' => [
            'sub_mchid' => '1234567890',
            'name' => '',
            'mobile' => '',
            'qr_code' => '',
            'avatar' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): ResponseInterface;

    /**
     * 服务人员信息更新(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/smartguide/chapter3_4.shtml#async
     */
    public function patchAsync(array $options = [
        'guide_id' => 'LLA3WJ6DSZUfiaZDS79FH5Wm5m4X69TBic',
        'json' => [
            'sub_mchid' => '1234567890',
            'name' => '',
            'mobile' => '',
            'qr_code' => '',
            'avatar' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): PromiseInterface;
}
