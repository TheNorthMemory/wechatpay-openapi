<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao\UserTitle;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface TitleUrl
{
    /**
     * 获取抬头填写链接(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/new-tax-control-fapiao/chapter3_5.shtml
     */
    public function get(array $options = [
        'query' => [
            'sub_mchid' => '1900000109',
            'fapiao_apply_id' => 'fapiao_20200701_123456',
            'source' => 'WEB',
            'appid' => 'wxb1170446a4c0a5a2',
            'openid' => 'plN5twRbHym_j-QcqCzstl0HmwEs',
            'total_amount' => 382895,
            'seller_name' => '深圳市南山区测试商户',
            'show_phone_cell' => true,
            'must_input_phone' => true,
            'show_email_cell' => true,
            'must_input_email' => true,
        ],
    ]): ResponseInterface;

    /**
     * 获取抬头填写链接(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/new-tax-control-fapiao/chapter3_5.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '1900000109',
            'fapiao_apply_id' => 'fapiao_20200701_123456',
            'source' => 'WEB',
            'appid' => 'wxb1170446a4c0a5a2',
            'openid' => 'plN5twRbHym_j-QcqCzstl0HmwEs',
            'total_amount' => 382895,
            'seller_name' => '深圳市南山区测试商户',
            'show_phone_cell' => true,
            'must_input_phone' => true,
            'show_email_cell' => true,
            'must_input_email' => true,
        ],
    ]): PromiseInterface;
}
