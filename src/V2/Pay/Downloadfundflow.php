<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Downloadfundflow
{
    /**
     * 下载资金账单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxa/wxa_api.php?chapter=9_18&index=7
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'bill_date' => '20140603',
            'account_type' => 'Basic',
            'tar_type' => 'GZIP',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 下载资金账单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxa/wxa_api.php?chapter=9_18&index=7#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'bill_date' => '20140603',
            'account_type' => 'Basic',
            'tar_type' => 'GZIP',
        ],
        'security' => true,
    ]): PromiseInterface;
}
