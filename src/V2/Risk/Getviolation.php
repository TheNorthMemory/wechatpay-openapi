<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Risk;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Getviolation
{
    /**
     * 银行特约商户违规信息查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_28&index=1&p=902
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1230000110',
            'sign_type' => 'HMAC-SHA256',
            'begin_time' => '2020-05-11 10:10:00',
            'end_time' => '2020-05-11 10:10:00',
            'page_index' => '1',
            'page_size' => '10',
            'violation_records_format' => 'json',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 银行特约商户违规信息查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_28&index=1&p=902#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1230000110',
            'sign_type' => 'HMAC-SHA256',
            'begin_time' => '2020-05-11 10:10:00',
            'end_time' => '2020-05-11 10:10:00',
            'page_index' => '1',
            'page_size' => '10',
            'violation_records_format' => 'json',
        ],
        'security' => true,
    ]): PromiseInterface;
}
