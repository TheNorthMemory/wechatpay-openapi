<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\CgiBin\Mch\Customs;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Customdeclareorder
{
    /**
     * 订单附加信息提交接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/external/declarecustom.php?chapter=18_1
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'out_trade_no' => '20150806125346',
            'transaction_id' => '1000320306201511078440737890',
            'customs' => 'SHANGHAI',
            'mch_customs_no' => '123456',
            'duty' => '888',
            'action_type' => 'ADD',
            'sub_order_no' => '20150806125346',
            'fee_type' => 'CNY',
            'order_fee' => '888',
            'transport_fee' => '888',
            'product_fee' => '888',
            'cert_type' => 'IDCARD',
            'cert_id' => '330821198809085211',
            'name' => '张三',
        ],
        'nonceless' => true,
    ]): ResponseInterface;

    /**
     * 订单附加信息提交接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/external/declarecustom.php?chapter=18_1#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'out_trade_no' => '20150806125346',
            'transaction_id' => '1000320306201511078440737890',
            'customs' => 'SHANGHAI',
            'mch_customs_no' => '123456',
            'duty' => '888',
            'action_type' => 'ADD',
            'sub_order_no' => '20150806125346',
            'fee_type' => 'CNY',
            'order_fee' => '888',
            'transport_fee' => '888',
            'product_fee' => '888',
            'cert_type' => 'IDCARD',
            'cert_id' => '330821198809085211',
            'name' => '张三',
        ],
        'nonceless' => true,
    ]): PromiseInterface;
}
