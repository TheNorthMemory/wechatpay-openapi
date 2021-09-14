<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read _card_id_\Codes $codes
 * @property-read _card_id_\DecryptCode $decryptCode
 * @property-read _card_id_\Qrcode $qrcode
 * @property-read _card_id_\Rights $rights
 * @property-read _card_id_\Upgrade $upgrade
 */
interface _card_id_
{
    /**
     * 查询会员卡模板信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_2.shtml
     */
    public function get(array $options = [
        'card_id' => '',
    ]): ResponseInterface;

    /**
     * 查询会员卡模板信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_2.shtml#async
     */
    public function getAsync(array $options = [
        'card_id' => '',
    ]): PromiseInterface;

    /**
     * 修改会员卡模板信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_9.shtml
     */
    public function patch(array $options = [
        'card_id' => '',
        'json' => [
            'appid' => '',
            'logo_url' => '',
            'title' => '',
            'background_picture_url' => '',
            'description' => '',
            'service_phone' => '',
            'total_quantity' => 0,
            'date_information' => [],
            'need_display_level' => '',
            'init_level' => '',
            'balance_information' => [],
            'user_information_form' => [],
            'additional_statement' => [],
        ],
    ]): ResponseInterface;

    /**
     * 修改会员卡模板信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_9.shtml#async
     */
    public function patchAsync(array $options = [
        'card_id' => '',
        'json' => [
            'appid' => '',
            'logo_url' => '',
            'title' => '',
            'background_picture_url' => '',
            'description' => '',
            'service_phone' => '',
            'total_quantity' => 0,
            'date_information' => [],
            'need_display_level' => '',
            'init_level' => '',
            'balance_information' => [],
            'user_information_form' => [],
            'additional_statement' => [],
        ],
    ]): PromiseInterface;

    /**
     * 删除会员卡模板(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_11.shtml
     */
    public function delete(array $options = [
        'card_id' => '',
    ]): ResponseInterface;

    /**
     * 删除会员卡模板(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_11.shtml#async
     */
    public function deleteAsync(array $options = [
        'card_id' => '',
    ]): PromiseInterface;
}
