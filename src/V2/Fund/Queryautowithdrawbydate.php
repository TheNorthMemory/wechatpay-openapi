<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Fund;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Queryautowithdrawbydate
{
    /**
     * 查询提现状态(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2023.03.13
     * @link https://pay.weixin.qq.com/wiki/doc/api/xiaowei.php?chapter=21_1
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'date' => '20180508',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 查询提现状态(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2023.03.13
     * @link https://pay.weixin.qq.com/wiki/doc/api/xiaowei.php?chapter=21_1#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'date' => '20180508',
        ],
        'security' => true,
    ]): PromiseInterface;
}
