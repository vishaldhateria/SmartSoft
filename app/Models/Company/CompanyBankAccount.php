<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $account_identifier
 * @property string $entity_name
 * @property string $holder_name
 * @property string $bank_name
 * @property string $account_number
 * @property string $ifsc_code
 * @property string $notes
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property PurchasePayment[] $purchasePayments
 * @property SalesPayment[] $salesPayments
 */
class CompanyBankAccount extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'company_bank_accounts';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $fillable = ['company_id', 'account_identifier', 'entity_name', 'holder_name', 'bank_name', 'account_number', 'ifsc_code', 'notes', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo('App\Models\Company\Company');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchasePayments()
    {
        return $this->hasMany('App\Models\Purchase\PurchasePayment', 'company_account_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesPayments()
    {
        return $this->hasMany('App\Models\Sales\SalesPayment', 'company_account_id');
    }

    public function sale()
    {
        return $this->hasMany('App\Models\Sale\Sale');
    }

    public function purchase()
    {
        return $this->hasMany('App\Models\Purchase\Purchase');
    }

    public function creditDebitNote()
    {
        return $this->hasMany('App\Models\CreditDebitNote\CreditDebitNote');
    }
}
