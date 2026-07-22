<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int|null $purchase_id
 * @property int $supplier_id
 * @property int|null $payment_method_id
 * @property string $document_number
 * @property int $installment
 * @property string $issue_date
 * @property \Illuminate\Support\Carbon $due_date
 * @property \Illuminate\Support\Carbon|null $payment_date
 * @property numeric $original_amount
 * @property numeric $interest
 * @property numeric $fine
 * @property numeric $discount
 * @property numeric $paid_amount
 * @property numeric $balance
 * @property string $status
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Company|null $company
 * @property-read \App\Models\PaymentMethod|null $paymentMethod
 * @property-read \App\Models\Purchase|null $purchase
 * @property-read \App\Models\Supplier|null $supplier
 * @method static \Database\Factories\AccountPayableFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable whereDocumentNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable whereFine($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable whereInstallment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable whereInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable whereIssueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable whereOriginalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable wherePurchaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountPayable whereUpdatedAt($value)
 */
	class AccountPayable extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int|null $sale_id
 * @property int $client_id
 * @property int|null $payment_method_id
 * @property string $document_number
 * @property int $installment
 * @property string $issue_date
 * @property \Illuminate\Support\Carbon $due_date
 * @property \Illuminate\Support\Carbon|null $payment_date
 * @property numeric $original_amount
 * @property numeric $interest
 * @property numeric $fine
 * @property numeric $discount
 * @property numeric $paid_amount
 * @property numeric $balance
 * @property string $status
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Client|null $client
 * @property-read \App\Models\Company|null $company
 * @property-read \App\Models\PaymentMethod|null $paymentMethod
 * @property-read \App\Models\Sale|null $sale
 * @method static \Database\Factories\AccountReceivableFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereDocumentNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereFine($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereInstallment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereIssueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereOriginalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountReceivable whereUpdatedAt($value)
 */
	class AccountReceivable extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand withoutTrashed()
 */
	class Brand extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int $cash_register_id
 * @property int $user_id
 * @property int|null $payment_method_id
 * @property int|null $sale_id
 * @property int|null $purchase_id
 * @property int|null $account_receivable_id
 * @property int|null $account_payable_id
 * @property string $type
 * @property string $origin
 * @property \Illuminate\Support\Carbon $movement_date
 * @property numeric $amount
 * @property string $description
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\AccountPayable|null $accountPayable
 * @property-read \App\Models\AccountReceivable|null $accountReceivable
 * @property-read \App\Models\CashRegister $cashRegister
 * @property-read \App\Models\Company|null $company
 * @property-read \App\Models\PaymentMethod|null $paymentMethod
 * @property-read \App\Models\Purchase|null $purchase
 * @property-read \App\Models\Sale|null $sale
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\CashMovementFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement whereAccountPayableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement whereAccountReceivableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement whereCashRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement whereMovementDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement whereOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement wherePurchaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement whereSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashMovement whereUserId($value)
 */
	class CashMovement extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int $user_id
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon $opened_at
 * @property \Illuminate\Support\Carbon|null $closed_at
 * @property numeric $opening_balance
 * @property numeric $closing_balance
 * @property numeric $expected_balance
 * @property numeric $difference
 * @property string $status
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CashMovement> $movements
 * @property-read int|null $movements_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\CashRegisterFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister whereClosedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister whereClosingBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister whereDifference($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister whereExpectedBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister whereOpenedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister whereOpeningBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CashRegister whereUserId($value)
 */
	class CashRegister extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category withoutTrashed()
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property string $person_type
 * @property string $name
 * @property string|null $trade_name
 * @property string $document
 * @property string|null $state_registration
 * @property string|null $municipal_registration
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $mobile
 * @property string|null $zip_code
 * @property string|null $address
 * @property string|null $number
 * @property string|null $complement
 * @property string|null $district
 * @property string|null $city
 * @property string|null $state
 * @property numeric $credit_limit
 * @property string|null $notes
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Company|null $company
 * @property-read string $document_formatted
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereComplement($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereCreditLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereMunicipalRegistration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client wherePersonType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereStateRegistration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereTradeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereZipCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client withoutTrashed()
 */
	class Client extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $corporate_name
 * @property string $trade_name
 * @property string $document
 * @property string|null $state_registration
 * @property string|null $municipal_registration
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $zip_code
 * @property string|null $address
 * @property string|null $number
 * @property string|null $complement
 * @property string|null $district
 * @property string|null $city
 * @property string|null $state
 * @property string $tax_regime
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AccountPayable> $accountPayables
 * @property-read int|null $account_payables_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AccountReceivable> $accountReceivables
 * @property-read int|null $account_receivables_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Brand> $brands
 * @property-read int|null $brands_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CashRegister> $cashRegisters
 * @property-read int|null $cash_registers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Category> $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Client> $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Invoice> $invoices
 * @property-read int|null $invoices_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PaymentMethod> $paymentMethods
 * @property-read int|null $payment_methods_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PriceList> $priceLists
 * @property-read int|null $price_lists_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Purchase> $purchases
 * @property-read int|null $purchases_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Sale> $sales
 * @property-read int|null $sales_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Supplier> $suppliers
 * @property-read int|null $suppliers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Unit> $units
 * @property-read int|null $units_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Warehouse> $warehouses
 * @property-read int|null $warehouses_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereComplement($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereCorporateName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereMunicipalRegistration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereStateRegistration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereTaxRegime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereTradeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereZipCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company withoutTrashed()
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int|null $sale_id
 * @property int|null $client_id
 * @property int|null $user_id
 * @property string $model
 * @property int $number
 * @property int $series
 * @property string|null $access_key
 * @property string|null $protocol
 * @property string|null $receipt
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $issued_at
 * @property string|null $authorized_at
 * @property string|null $cancelled_at
 * @property numeric $products_total
 * @property numeric $discount
 * @property numeric $freight
 * @property numeric $insurance
 * @property numeric $other_expenses
 * @property numeric $ipi
 * @property numeric $icms
 * @property numeric $icms_st
 * @property numeric $pis
 * @property numeric $cofins
 * @property numeric $total
 * @property string|null $xml
 * @property string|null $xml_cancel
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Client|null $client
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\InvoiceItem> $items
 * @property-read int|null $items_count
 * @property-read \App\Models\Sale|null $sale
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereAccessKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereAuthorizedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereCancelledAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereCofins($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereFreight($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereIcms($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereIcmsSt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereInsurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereIpi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereIssuedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereOtherExpenses($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice wherePis($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereProductsTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereProtocol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereReceipt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereSeries($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereXml($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereXmlCancel($value)
 */
	class Invoice extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int $invoice_id
 * @property int|null $product_id
 * @property string $product_code
 * @property string $product_name
 * @property string $unit_symbol
 * @property string $ncm
 * @property string $cfop
 * @property string|null $cest
 * @property string|null $origin
 * @property string|null $cst_icms
 * @property string|null $csosn
 * @property string|null $cst_pis
 * @property string|null $cst_cofins
 * @property numeric $quantity
 * @property numeric $unit_price
 * @property numeric $discount
 * @property numeric $freight
 * @property numeric $insurance
 * @property numeric $other_expenses
 * @property numeric $ipi
 * @property numeric $icms
 * @property numeric $icms_st
 * @property numeric $pis
 * @property numeric $cofins
 * @property numeric $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Invoice $invoice
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereCest($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereCfop($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereCofins($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereCsosn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereCstCofins($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereCstIcms($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereCstPis($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereFreight($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereIcms($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereIcmsSt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereInsurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereIpi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereNcm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereOtherExpenses($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem wherePis($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereProductCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereUnitSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvoiceItem whereUpdatedAt($value)
 */
	class InvoiceItem extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string $code
 * @property string $type
 * @property bool $installments
 * @property int $generates_receivable
 * @property int $generates_cash
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AccountPayable> $accountsPayable
 * @property-read int|null $accounts_payable_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AccountReceivable> $accountsReceivable
 * @property-read int|null $accounts_receivable_count
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PurchasePayment> $purchasePayments
 * @property-read int|null $purchase_payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SalePayment> $salePayments
 * @property-read int|null $sale_payments_count
 * @method static \Database\Factories\PaymentMethodFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereGeneratesCash($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereGeneratesReceivable($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereInstallments($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereUpdatedAt($value)
 */
	class PaymentMethod extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string|null $description
 * @property string|null $start_date
 * @property string|null $end_date
 * @property numeric $markup_percentage
 * @property numeric $discount_percentage
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PriceListItem> $items
 * @property-read int|null $items_count
 * @method static \Database\Factories\PriceListFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceList query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceList whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceList whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceList whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceList whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceList whereDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceList whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceList whereMarkupPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceList whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceList whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceList whereUpdatedAt($value)
 */
	class PriceList extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int $price_list_id
 * @property int $product_id
 * @property numeric $cost_price
 * @property numeric $price
 * @property numeric $minimum_price
 * @property numeric $maximum_discount
 * @property string|null $start_date
 * @property string|null $end_date
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PriceList $priceList
 * @property-read \App\Models\Product|null $product
 * @method static \Database\Factories\PriceListItemFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceListItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceListItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceListItem query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceListItem whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceListItem whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceListItem whereCostPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceListItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceListItem whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceListItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceListItem whereMaximumDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceListItem whereMinimumPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceListItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceListItem wherePriceListId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceListItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceListItem whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PriceListItem whereUpdatedAt($value)
 */
	class PriceListItem extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int $category_id
 * @property int|null $brand_id
 * @property int $unit_id
 * @property string $code
 * @property string|null $sku
 * @property string|null $barcode
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property string $type
 * @property string|null $ncm
 * @property string|null $cest
 * @property string|null $cfop
 * @property string|null $origin
 * @property string|null $cst_icms
 * @property string|null $csosn
 * @property int $stock_control
 * @property int $allow_negative_stock
 * @property numeric $minimum_stock
 * @property numeric $maximum_stock
 * @property string|null $location
 * @property int $batch_control
 * @property int $expiration_control
 * @property numeric $gross_weight
 * @property numeric $net_weight
 * @property numeric $height
 * @property numeric $width
 * @property numeric $length
 * @property numeric $cost_price
 * @property numeric $sale_price
 * @property numeric|null $promotional_price
 * @property numeric $profit_margin
 * @property int $featured
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Brand|null $brand
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductImage> $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StockMovement> $movements
 * @property-read int|null $movements_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Stock> $stocks
 * @property-read int|null $stocks_count
 * @property-read \App\Models\Unit|null $unit
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereAllowNegativeStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereBatchControl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCest($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCfop($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCostPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCsosn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCstIcms($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereExpirationControl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereGrossWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereMaximumStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereMinimumStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereNcm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereNetWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereProfitMargin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product wherePromotionalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSalePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereStockControl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product withoutTrashed()
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int $product_id
 * @property string $file_name
 * @property string $file_path
 * @property string|null $mime_type
 * @property int|null $file_size
 * @property int $is_main
 * @property int $sort_order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Company|null $company
 * @property-read \App\Models\Product|null $product
 * @method static \Database\Factories\ProductImageFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductImage query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductImage whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductImage whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductImage whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductImage whereFileSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductImage whereIsMain($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductImage whereMimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductImage whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductImage whereSortOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductImage whereUpdatedAt($value)
 */
	class ProductImage extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int $supplier_id
 * @property int|null $user_id
 * @property string $number
 * @property string|null $invoice_number
 * @property string|null $invoice_series
 * @property string|null $invoice_key
 * @property string $purchase_date
 * @property string|null $delivery_date
 * @property string $status
 * @property numeric $products_total
 * @property numeric $discount
 * @property numeric $freight
 * @property numeric $insurance
 * @property numeric $other_expenses
 * @property numeric $ipi
 * @property numeric $icms_st
 * @property numeric $total
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PurchaseItem> $items
 * @property-read int|null $items_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PurchasePayment> $payments
 * @property-read int|null $payments_count
 * @property-read \App\Models\Supplier|null $supplier
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereDeliveryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereFreight($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereIcmsSt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereInsurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereInvoiceKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereInvoiceSeries($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereIpi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereOtherExpenses($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereProductsTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase wherePurchaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Purchase whereUserId($value)
 */
	class Purchase extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int $purchase_id
 * @property int $product_id
 * @property string $product_code
 * @property string $product_name
 * @property string $unit_symbol
 * @property string|null $ncm
 * @property string|null $cfop
 * @property string|null $cest
 * @property string|null $origin
 * @property string|null $cst_icms
 * @property string|null $csosn
 * @property numeric $quantity
 * @property numeric $received_quantity
 * @property numeric $unit_cost
 * @property numeric $discount
 * @property numeric $freight
 * @property numeric $insurance
 * @property numeric $other_expenses
 * @property numeric $ipi
 * @property numeric $icms_st
 * @property numeric $total
 * @property string|null $batch
 * @property string|null $expiration_date
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\Purchase $purchase
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereBatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereCest($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereCfop($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereCsosn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereCstIcms($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereExpirationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereFreight($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereIcmsSt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereInsurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereIpi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereNcm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereOtherExpenses($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereProductCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem wherePurchaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereReceivedQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereUnitCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereUnitSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchaseItem whereUpdatedAt($value)
 */
	class PurchaseItem extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int $purchase_id
 * @property int $payment_method_id
 * @property int $installment
 * @property \Illuminate\Support\Carbon $due_date
 * @property string|null $payment_date
 * @property numeric $amount
 * @property numeric $interest
 * @property numeric $fine
 * @property numeric $discount
 * @property numeric $paid_amount
 * @property string $status
 * @property string|null $transaction_number
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PaymentMethod $paymentMethod
 * @property-read \App\Models\Purchase $purchase
 * @method static \Database\Factories\PurchasePaymentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment whereFine($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment whereInstallment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment whereInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment wherePurchaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment whereTransactionNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PurchasePayment whereUpdatedAt($value)
 */
	class PurchasePayment extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int|null $client_id
 * @property int $user_id
 * @property string $number
 * @property string|null $invoice_number
 * @property string|null $invoice_series
 * @property string|null $invoice_key
 * @property string $type
 * @property string $status
 * @property \Illuminate\Support\Carbon $sale_date
 * @property string|null $delivery_date
 * @property numeric $products_total
 * @property numeric $discount
 * @property numeric $freight
 * @property numeric $insurance
 * @property numeric $other_expenses
 * @property numeric $ipi
 * @property numeric $icms_st
 * @property numeric $total
 * @property string|null $payment_method
 * @property int $installments
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Client|null $client
 * @property-read \App\Models\Company|null $company
 * @property-read \App\Models\Invoice|null $invoice
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SaleItem> $items
 * @property-read int|null $items_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SalePayment> $payments
 * @property-read int|null $payments_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereDeliveryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereFreight($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereIcmsSt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereInstallments($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereInsurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereInvoiceKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereInvoiceSeries($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereIpi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereOtherExpenses($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereProductsTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereSaleDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale whereUserId($value)
 */
	class Sale extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int $sale_id
 * @property int $product_id
 * @property string $product_code
 * @property string $product_name
 * @property string $unit_symbol
 * @property string|null $ncm
 * @property string|null $cfop
 * @property string|null $cest
 * @property string|null $origin
 * @property string|null $cst_icms
 * @property string|null $csosn
 * @property numeric $quantity
 * @property numeric $delivered_quantity
 * @property numeric $unit_cost
 * @property numeric $unit_price
 * @property numeric $discount
 * @property numeric $freight
 * @property numeric $insurance
 * @property numeric $other_expenses
 * @property numeric $ipi
 * @property numeric $icms_st
 * @property numeric $total
 * @property numeric $commission_percentage
 * @property numeric $commission_value
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\Sale $sale
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereCest($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereCfop($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereCommissionPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereCommissionValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereCsosn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereCstIcms($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereDeliveredQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereFreight($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereIcmsSt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereInsurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereIpi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereNcm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereOtherExpenses($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereProductCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereUnitCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereUnitSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SaleItem whereUpdatedAt($value)
 */
	class SaleItem extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int $sale_id
 * @property int $payment_method_id
 * @property int $installment
 * @property \Illuminate\Support\Carbon $due_date
 * @property string|null $payment_date
 * @property numeric $amount
 * @property numeric $interest
 * @property numeric $fine
 * @property numeric $discount
 * @property numeric $paid_amount
 * @property string $status
 * @property string|null $transaction_number
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PaymentMethod $paymentMethod
 * @property-read \App\Models\Sale $sale
 * @method static \Database\Factories\SalePaymentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment whereFine($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment whereInstallment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment whereInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment whereSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment whereTransactionNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SalePayment whereUpdatedAt($value)
 */
	class SalePayment extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int $product_id
 * @property numeric $quantity
 * @property numeric $reserved_quantity
 * @property numeric $available_quantity
 * @property string|null $last_movement_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Company|null $company
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\Warehouse|null $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock whereAvailableQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock whereLastMovementAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock whereReservedQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock whereUpdatedAt($value)
 */
	class Stock extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int $product_id
 * @property int $stock_id
 * @property string $movement_type
 * @property string $operation
 * @property numeric $quantity
 * @property numeric $stock_before
 * @property numeric $stock_after
 * @property numeric $unit_cost
 * @property numeric $total_cost
 * @property string|null $reference_type
 * @property int|null $reference_id
 * @property string|null $observation
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Company|null $company
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\User|null $user
 * @property-read \App\Models\Warehouse|null $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement whereMovementType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement whereObservation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement whereOperation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement whereReferenceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement whereReferenceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement whereStockAfter($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement whereStockBefore($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement whereStockId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement whereTotalCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement whereUnitCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMovement whereUserId($value)
 */
	class StockMovement extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property int $product_id
 * @property int $source_warehouse_id
 * @property int $destination_warehouse_id
 * @property int $user_id
 * @property numeric $quantity
 * @property string $transfer_date
 * @property string $status
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Company|null $company
 * @property-read \App\Models\Warehouse|null $destinationWarehouse
 * @property-read \App\Models\Warehouse|null $originWarehouse
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\StockTransferFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTransfer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTransfer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTransfer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTransfer whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTransfer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTransfer whereDestinationWarehouseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTransfer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTransfer whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTransfer whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTransfer whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTransfer whereSourceWarehouseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTransfer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTransfer whereTransferDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTransfer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTransfer whereUserId($value)
 */
	class StockTransfer extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property string $person_type
 * @property string $name
 * @property string|null $trade_name
 * @property string $document
 * @property string|null $state_registration
 * @property string|null $municipal_registration
 * @property string|null $contact_name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $mobile
 * @property string|null $website
 * @property string|null $zip_code
 * @property string|null $address
 * @property string|null $number
 * @property string|null $complement
 * @property string|null $district
 * @property string|null $city
 * @property string|null $state
 * @property int $payment_term
 * @property string|null $pix_key
 * @property string|null $bank
 * @property string|null $agency
 * @property string|null $account
 * @property string|null $account_type
 * @property string|null $notes
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AccountPayable> $accountsPayable
 * @property-read int|null $accounts_payable_count
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Purchase> $purchases
 * @property-read int|null $purchases_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereAccountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereAgency($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereComplement($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereContactName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereMunicipalRegistration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier wherePaymentTerm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier wherePersonType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier wherePixKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereStateRegistration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereTradeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereZipCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier withoutTrashed()
 */
	class Supplier extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string $symbol
 * @property string|null $description
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Unit onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Unit whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Unit whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Unit whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Unit whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Unit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Unit whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Unit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Unit withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Unit withoutTrashed()
 */
	class Unit extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property bool $active
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $teams
 * @property-read int|null $teams_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User permission($permissions, bool $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User role($roles, ?string $guard = null, bool $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User team($teams, bool $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutRole($roles, ?string $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutTeam($teams)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string $code
 * @property string|null $description
 * @property string|null $zip_code
 * @property string|null $address
 * @property string|null $number
 * @property string|null $complement
 * @property string|null $district
 * @property string|null $city
 * @property string|null $state
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Stock> $stocks
 * @property-read int|null $stocks_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StockTransfer> $transfersFrom
 * @property-read int|null $transfers_from_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StockTransfer> $transfersTo
 * @property-read int|null $transfers_to_count
 * @method static \Database\Factories\WarehouseFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse whereComplement($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse whereZipCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Warehouse withoutTrashed()
 */
	class Warehouse extends \Eloquent {}
}

