<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Cards\_card_id_ $_card_id_
 */
interface Cards
{
    /**
     * 创建会员卡模板(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'appid' => '',
            'logo_url' => '',
            'brand' => [],
            'title' => '',
            'background_picture_url' => '',
            'description' => '',
            'service_phone' => '',
            'code_type' => '',
            'total_quantity' => 0,
            'date_information' => [],
            'code_mode' => '',
            'need_display_level' => '',
            'init_level' => '',
            'out_request_no' => '',
            'balance_information' => [],
            'user_information_form' => [],
            'additional_statement' => [],
        ],
    ]): ResponseInterface;

    /**
     * 创建会员卡模板(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => '',
            'logo_url' => '',
            'brand' => [],
            'title' => '',
            'background_picture_url' => '',
            'description' => '',
            'service_phone' => '',
            'code_type' => '',
            'total_quantity' => 0,
            'date_information' => [],
            'code_mode' => '',
            'need_display_level' => '',
            'init_level' => '',
            'out_request_no' => '',
            'balance_information' => [],
            'user_information_form' => [],
            'additional_statement' => [],
        ],
    ]): PromiseInterface;

    /**
     * 查询会员卡模板列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_3.shtml
     */
    public function get(array $options = [
        'query' => [
            'brand_id' => '',
            'appid' => '',
            'offset' => 0,
            'limit' => 0,
        ],
    ]): ResponseInterface;

    /**
     * 查询会员卡模板列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_3.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'brand_id' => '',
            'appid' => '',
            'offset' => 0,
            'limit' => 0,
        ],
    ]): PromiseInterface;
}
