<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Mch;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _queryinstitutionsub_
{
    /**
     * 查询子商户(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/sub_merchant_entry/chapter3_2.shtml
     */
    public function post(array $options = [
        'queryinstitutionsub' => 'queryInstitutionsub',
        'xml' => [
            'app_id' => 'wx8888888888888888',
            'mch_id' => '3200000001',
            'sub_mch_id' => '20000100',
        ],
        'nonceless' => true,
        'security' => true,
    ]): ResponseInterface;

    /**
     * 查询子商户(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/sub_merchant_entry/chapter3_2.shtml#async
     */
    public function postAsync(array $options = [
        'queryinstitutionsub' => 'queryInstitutionsub',
        'xml' => [
            'app_id' => 'wx8888888888888888',
            'mch_id' => '3200000001',
            'sub_mch_id' => '20000100',
        ],
        'nonceless' => true,
        'security' => true,
    ]): PromiseInterface;
}
