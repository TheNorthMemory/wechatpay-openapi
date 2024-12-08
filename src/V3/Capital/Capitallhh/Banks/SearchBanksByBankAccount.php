<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Capital\Capitallhh\Banks;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface SearchBanksByBankAccount
{
    /**
     * 获取对私银行卡号开户银行(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/capital/capitallhh/banks/search-banks-by-bank-account
     */
    public function get(array $options = [
        'query' => [
            'account_number' => 'd+xT+MQCvrLHUVDWv/8MR/dB7TkXLVfSrUxMPZy6jWWYzpRrEEaYQE8ZRGYoeorwC+w==',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 获取对私银行卡号开户银行(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/capital/capitallhh/banks/search-banks-by-bank-account
     */
    public function getAsync(array $options = [
        'query' => [
            'account_number' => 'd+xT+MQCvrLHUVDWv/8MR/dB7TkXLVfSrUxMPZy6jWWYzpRrEEaYQE8ZRGYoeorwC+w==',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
