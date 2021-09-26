<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Customs;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Redeclare
{
    /**
     * 报关重推(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/declarecustom_ch/chapter3_4.shtml
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/global/', // 跨境(香港接入)
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1230000109',
            'out_trade_no' => '20150806125346',
            'transaction_id' => '1000320306201511078440737890',
            'sub_order_no' => '20150806125346',
            'sub_order_id' => '1000320306201511078440737891',
            'customs' => 'SHANGHAI_ZS',
            'merchant_customs_no' => '123456',
        ],
    ]): ResponseInterface;

    /**
     * 报关重推(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/declarecustom_ch/chapter3_4.shtml#async
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/global/', // 跨境(香港接入)
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1230000109',
            'out_trade_no' => '20150806125346',
            'transaction_id' => '1000320306201511078440737890',
            'sub_order_no' => '20150806125346',
            'sub_order_id' => '1000320306201511078440737891',
            'customs' => 'SHANGHAI_ZS',
            'merchant_customs_no' => '123456',
        ],
    ]): PromiseInterface;
}
