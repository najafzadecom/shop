<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\AttributeGroupController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerGroupController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoteCategoryController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PredefinedReplyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ShippingMethodController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('address', AddressController::class);
Route::resource('article', ArticleController::class);
Route::resource('attribute', AttributeController::class);
Route::resource('attribute_group', AttributeGroupController::class);
Route::resource('brand', BrandController::class);
Route::resource('category', CategoryController::class);
Route::resource('city', CityController::class);
Route::resource('contract', ContractController::class);
Route::resource('country', CountryController::class);
Route::resource('coupon', CouponController::class);
Route::resource('currency', CurrencyController::class);
Route::resource('customer', CustomerController::class);
Route::resource('customer_group', CustomerGroupController::class);
Route::resource('district', DistrictController::class);
Route::resource('expense', ExpenseController::class);
Route::resource('expense_category', ExpenseCategoryController::class);
Route::resource('invoice', InvoiceController::class);
Route::resource('language', LanguageController::class);
Route::resource('menu', MenuController::class);
Route::resource('menu_item', MenuItemController::class);
Route::resource('news', NewsController::class);
Route::resource('note', NoteController::class);
Route::resource('note_category', NoteCategoryController::class);
Route::resource('notification', NotificationController::class);
Route::resource('option', OptionController::class);
Route::resource('order', OrderController::class);
Route::resource('order_status', OrderStatusController::class);
Route::resource('page', PageController::class);
Route::resource('payment_method', PaymentMethodController::class);
Route::resource('permission', PermissionController::class);
Route::resource('predefined_reply', PredefinedReplyController::class);
Route::resource('product', ProductController::class);
Route::resource('project', ProjectController::class);
Route::resource('review', ReviewController::class);
Route::resource('role', RoleController::class);
Route::resource('service', ServiceController::class);
Route::resource('setting', SettingController::class);
Route::resource('shipping_method', ShippingMethodController::class);
Route::resource('sms', SmsController::class);
Route::resource('state', StateController::class);
Route::resource('store', StoreController::class);
Route::resource('subscriber', SubscriberController::class);
Route::resource('subscription', SubscriptionController::class);
Route::resource('task', TaskController::class);
Route::resource('tax', TaxController::class);
Route::resource('ticket', TicketController::class);
Route::resource('transaction', TransactionController::class);
Route::resource('user', UserController::class);
