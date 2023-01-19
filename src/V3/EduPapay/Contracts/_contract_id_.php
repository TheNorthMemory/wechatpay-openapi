<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\EduPapay\Contracts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _contract_id_
{
    /**
     * 解约(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter5_2_4.shtml
     */
    public function delete(array $options = [
        'contract_id' => 'wx998877665544wx',
    ]): ResponseInterface;

    /**
     * 解约(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter5_2_4.shtml#async
     */
    public function deleteAsync(array $options = [
        'contract_id' => 'wx998877665544wx',
    ]): PromiseInterface;
}
