<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\CgiBin\Mch\Newcustoms;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Customdeclareredeclare
{
    /**
     * 订单附加信息重推接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/cgi-bin/mch/newcustoms/customdeclareredeclare
     */
    public function post(array $options = [
        'xml' => [
            'sign_type' => 'MD5',
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'out_trade_no' => '20150806125346',
            'transaction_id' => '1000320306201511078440737890',
            'sub_order_no' => '20150806125346',
            'sub_order_id' => '1000320306201511078440737891',
            'customs' => 'SHANGHAI',
            'mch_customs_no' => '123456',
        ],
        'nonceless' => true,
    ]): ResponseInterface;

    /**
     * 订单附加信息重推接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/cgi-bin/mch/newcustoms/customdeclareredeclare
     */
    public function postAsync(array $options = [
        'xml' => [
            'sign_type' => 'MD5',
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'out_trade_no' => '20150806125346',
            'transaction_id' => '1000320306201511078440737890',
            'sub_order_no' => '20150806125346',
            'sub_order_id' => '1000320306201511078440737891',
            'customs' => 'SHANGHAI',
            'mch_customs_no' => '123456',
        ],
        'nonceless' => true,
    ]): PromiseInterface;
}
