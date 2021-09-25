<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Couponcodes
{
    /**
     * 上传预存code (同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_6.shtml
     */
    public function post(array $options = [
        'stock_id' => '98065001',
        'json' => [
            'coupon_code_list' => ['string'],
            'upload_request_no' => '100002322019090134234sfdf',
        ],
    ]): ResponseInterface;

    /**
     * 上传预存code (异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_6.shtml#async
     */
    public function postAsync(array $options = [
        'stock_id' => '98065001',
        'json' => [
            'coupon_code_list' => ['string'],
            'upload_request_no' => '100002322019090134234sfdf',
        ],
    ]): PromiseInterface;
}
