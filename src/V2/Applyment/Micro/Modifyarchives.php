<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Applyment\Micro;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Modifyarchives
{
    /**
     * 修改结算银行卡(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2023.03.13
     * @link https://pay.weixin.qq.com/wiki/doc/api/xiaowei.php?chapter=21_2
     */
    public function post(array $options = [
        'xml' => [
            'version' => '1.0',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'sub_mch_id' => '1230000109',
            'account_number' => '',
            'bank_name' => '深圳农村商业银行xxx支行',
            'account_bank' => '中国银行',
            'bank_address_code' => '110000',
            'cert_sn' => '5430056GFRJK54YTFF653GDFH09HFGHF',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 修改结算银行卡(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2023.03.13
     * @link https://pay.weixin.qq.com/wiki/doc/api/xiaowei.php?chapter=21_2#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'version' => '1.0',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'sub_mch_id' => '1230000109',
            'account_number' => '',
            'bank_name' => '深圳农村商业银行xxx支行',
            'account_bank' => '中国银行',
            'bank_address_code' => '110000',
            'cert_sn' => '5430056GFRJK54YTFF653GDFH09HFGHF',
        ],
        'security' => true,
    ]): PromiseInterface;
}
