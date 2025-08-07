<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\TransactionBlock\TransactionBlockSubmissions\SubMchid;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _sub_mchid_
{
    /**
     * 发起交易拦截申诉(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transaction-block/transaction-block-submissions/sub-mchid/%7Bsub_mchid%7D
     */
    public function post(array $options = [
        'sub_mchid' => '123000110',
        'json' => [
            'merchant_submit_id' => 'ABC123456789',
            'submit_data' => \json_encode([
                'record_fields' => [[
                    'item_id' => '',
                    'field_name' => '',
                    'name' => '',
                    'type' => 0,
                    'tips' => '',
                    'placeholder' => '',
                    'tooltip' => '',
                    'required' => 0,
                    'check_rule' => [
                        'min_length' => 0,
                        'max_length' => 0,
                        'enum_file_exts' => ['png'],
                        'max_file_size' => 0,
                        'enum_keys' => [1],
                        'enum_values' => ['string'],
                    ],
                    'relations' => [[
                        'source_key' => 0,
                        'source_value' => '',
                    ],],
                    'need_encrypt' => true,
                ],],
            ]),
        ],
    ]): ResponseInterface;

    /**
     * 发起交易拦截申诉(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transaction-block/transaction-block-submissions/sub-mchid/%7Bsub_mchid%7D
     */
    public function postAsync(array $options = [
        'sub_mchid' => '123000110',
        'json' => [
            'merchant_submit_id' => 'ABC123456789',
            'submit_data' => \json_encode([
                'record_fields' => [[
                    'item_id' => '',
                    'field_name' => '',
                    'name' => '',
                    'type' => 0,
                    'tips' => '',
                    'placeholder' => '',
                    'tooltip' => '',
                    'required' => 0,
                    'check_rule' => [
                        'min_length' => 0,
                        'max_length' => 0,
                        'enum_file_exts' => ['png'],
                        'max_file_size' => 0,
                        'enum_keys' => [1],
                        'enum_values' => ['string'],
                    ],
                    'relations' => [[
                        'source_key' => 0,
                        'source_value' => '',
                    ],],
                    'need_encrypt' => true,
                ],],
            ]),
        ],
    ]): PromiseInterface;
}
