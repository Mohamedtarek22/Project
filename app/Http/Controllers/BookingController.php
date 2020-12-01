<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Package;
use App\Booking;
class BookingController extends Controller
{
    
       public function Bookingview($id){
          $package=Package::find($id);

        return view('booking.bookingform',  compact('package'));
    }
     public function book(Request $requset,$id){
         
       $request_date=$requset->validate([
        'FullName'=>'required',
        'Email'=>'required',
        'Phone'=>'required',
           
        'Payment'=>'required',
           'Individuals'=>'required'
        ]);    
       if($request_date){
           Booking::create([
               'FullName'=>$requset->FullName,
               'Email'=>$requset->Email,
               'Phone'=>$requset->Phone,
               'Payment'=>$requset->Payment,
               'Individuals'=>$requset->Individuals,
               'Package_id'=>$id
               
       ]);
           
       }
        //   dd($request_date);         
  session()->flash('success', __('booked_successfully'));
         return redirect('/home');
           
       
     }
    public function bookings_list(){
        $listofbookings = Booking::all();
        
        return view('booking.bookingslist',compact('listofbookings'));
    }
}
