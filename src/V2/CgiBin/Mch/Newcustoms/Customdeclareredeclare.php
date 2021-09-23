<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\CgiBin\Mch\Newcustoms;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Customdeclareredeclare
{
    /**
     * 订单附加信息重推接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/external/declarecustom.php?chapter=18_4
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
     * @link https://pay.weixin.qq.com/wiki/doc/api/external/declarecustom.php?chapter=18_4#async
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
