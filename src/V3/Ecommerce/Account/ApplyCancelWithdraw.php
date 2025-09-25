<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Account;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read ApplyCancelWithdraw\OutRequestNo $outRequestNo
 * @property-read ApplyCancelWithdraw\ApplymentId $applymentId
 * @property-read ApplyCancelWithdraw\Confirm $confirm
 */
interface ApplyCancelWithdraw
{
    /**
     * 提交注销提现申请(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/account/apply-cancel-withdraw
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_request_no' => 'P202410241010125346',
            'withdraw' => 'APPLY_WITHDRAW',
            'payee_info' => [
                'account_type' => 'ACCOUNT_TYPE_CORPORATE',
                'bank_account_info' => [
                    'account_name' => 'AOZdYGISxo4y44/UgZ69b0zZXkw==',
                    'account_bank' => '工商银行',
                    'bank_branch_id' => '402713354941',
                    'bank_name' => '402713354941',
                    'account_number' => 'd+xT+MQCvrLHeorwC+w==',
                ],
                'identity_info' => [
                    'id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD',
                    'identification_name' => 'pVd1HJ6zyvPedzfg==',
                    'identification_no' => 'AOZdYGISxo4y44/UgZ69bkw==',
                ],
            ],
            'proof_medias' => [[
                'proof_media_type' => 'WITHDRAWAL_APPLICATION',
                'proof_media' => 'jTpGmxUX3FBWVQ5NJTZvlKXQ',
            ],],
            'additional_materials' => ['jTpGmxUX3FBWVQ5NFQ'],
            'remark' => '特殊理由',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 提交注销提现申请(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/account/apply-cancel-withdraw
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_request_no' => 'P202410241010125346',
            'withdraw' => 'APPLY_WITHDRAW',
            'payee_info' => [
                'account_type' => 'ACCOUNT_TYPE_CORPORATE',
                'bank_account_info' => [
                    'account_name' => 'AOZdYGISxo4y44/UgZ69b0zZXkw==',
                    'account_bank' => '工商银行',
                    'bank_branch_id' => '402713354941',
                    'bank_name' => '402713354941',
                    'account_number' => 'd+xT+MQCvrLHeorwC+w==',
                ],
                'identity_info' => [
                    'id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD',
                    'identification_name' => 'pVd1HJ6zyvPedzfg==',
                    'identification_no' => 'AOZdYGISxo4y44/UgZ69bkw==',
                ],
            ],
            'proof_medias' => [[
                'proof_media_type' => 'WITHDRAWAL_APPLICATION',
                'proof_media' => 'jTpGmxUX3FBWVQ5NJTZvlKXQ',
            ],],
            'additional_materials' => ['jTpGmxUX3FBWVQ5NFQ'],
            'remark' => '特殊理由',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
