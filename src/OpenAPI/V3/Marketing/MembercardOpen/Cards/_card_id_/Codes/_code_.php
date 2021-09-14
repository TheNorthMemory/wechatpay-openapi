<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_\Codes;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read _code_\Activate $activate
 * @property-read _code_\Rights $rights
 * @property-read _code_\Unavailable $unavailable
 */
interface _code_
{
    /**
     * 查询用户会员卡信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_4.shtml
     */
    public function get(array $options = [
        'card_id' => '',
        'code' => '',
    ]): ResponseInterface;

    /**
     * 查询用户会员卡信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_4.shtml#async
     */
    public function getAsync(array $options = [
        'card_id' => '',
        'code' => '',
    ]): PromiseInterface;

    /**
     * 修改用户会员卡信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_8.shtml
     */
    public function patch(array $options = [
        'card_id' => '',
        'code' => '',
        'json' => [
            'membership_number' => '',
            'background_picture_url' => '',
            'level' => '',
            'out_request_no' => '',
            'balance_information' => [],
        ],
    ]): ResponseInterface;

    /**
     * 修改用户会员卡信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_8.shtml#async
     */
    public function patchAsync(array $options = [
        'card_id' => '',
        'code' => '',
        'json' => [
            'membership_number' => '',
            'background_picture_url' => '',
            'level' => '',
            'out_request_no' => '',
            'balance_information' => [],
        ],
    ]): PromiseInterface;
}
