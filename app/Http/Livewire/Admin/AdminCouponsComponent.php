<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;
use Livewire\WithPagination;

class AdminCouponsComponent extends Component
{
    public $coupon_id;
    use WithPagination;

    public function deleteCoupon()
    {
        $coupon = Coupon::find($this->coupon_id);
         
        $coupon->delete();
        session()->flash('message','Coupon has been deleted Successfully!');
    }
    public function render()
    {
        $coupons = Coupon::all();
        return view('livewire.admin.admin-coupons-component',['coupons'=>$coupons]);
    }
}
