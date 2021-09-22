<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Pappayapply
{
    /**
     * 申请扣款(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/pap.php?chapter=18_3&index=9
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'body' => '水电代扣',
            'detail' => '水电代扣：A水电代扣：B水电代扣：C',
            'attach' => '自定义参数',
            'out_trade_no' => '1217752501201407033233368018',
            'total_fee' => '888',
            'fee_type' => 'CNY',
            'spbill_create_ip' => '8.8.8.8',
            'goods_tag' => 'WXG',
            'notify_url' => 'http://yoursite.com/wxpay.html',
            'trade_type' => 'PAP',
            'contract_id' => 'Wx15463511252015071056489715',
            'receipt' => 'Y',
        ],
    ]): ResponseInterface;

    /**
     * 申请扣款(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/pap.php?chapter=18_3&index=9#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'body' => '水电代扣',
            'detail' => '水电代扣：A水电代扣：B水电代扣：C',
            'attach' => '自定义参数',
            'out_trade_no' => '1217752501201407033233368018',
            'total_fee' => '888',
            'fee_type' => 'CNY',
            'spbill_create_ip' => '8.8.8.8',
            'goods_tag' => 'WXG',
            'notify_url' => 'http://yoursite.com/wxpay.html',
            'trade_type' => 'PAP',
            'contract_id' => 'Wx15463511252015071056489715',
            'receipt' => 'Y',
        ],
    ]): PromiseInterface;
}
