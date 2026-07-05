<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Papay\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Deletecontract
{
    /**
     * 申请解约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/papay/partner/deletecontract
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'sub_appid' => 'wxcbda96de0b165489',
            'mch_id' => '10000098',
            'sub_mch_id' => '1900000109',
            'plan_id' => '12251',
            'contract_code' => '1234',
            'contract_id' => 'Wx15463511252015071056489715',
            'contract_termination_remark' => '解约原因',
            'version' => '1.0',
        ],
        'nonceless' => true,
    ]): ResponseInterface;

    /**
     * 申请解约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/papay/partner/deletecontract
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'sub_appid' => 'wxcbda96de0b165489',
            'mch_id' => '10000098',
            'sub_mch_id' => '1900000109',
            'plan_id' => '12251',
            'contract_code' => '1234',
            'contract_id' => 'Wx15463511252015071056489715',
            'contract_termination_remark' => '解约原因',
            'version' => '1.0',
        ],
        'nonceless' => true,
    ]): PromiseInterface;
}
