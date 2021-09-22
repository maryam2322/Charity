<?php

namespace App\Http\Controllers;
use AppTraits\persianDate;
use App\Http\Requests\LoginRequest;
use App\lib\zarinpal;
use Hekmatinasser\Verta\Verta;
use App\Models\User;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Connection;
use Morilog\Jalali\Jalalian;

class paymentController extends Controller
{
    public function add_order(Request $request)
    {
        $PayFor=$request->get('PayFor');
        $price=$request->get('price');
        $user=User::query()->where('nationalCode',$request->get('nationalCode'))->firstOrFail();
        if(auth()->check()){
          $payment=payment::query()->create([
              'price'=>$price,
              'PayFor'=>$PayFor,
              'nationalCode'=>$user->nationalCode,
              'name'=>$user->name,
          ]);
        }

        return redirect('/myPayment');

    }

    public function PaymentList(Request $request)
    {
        $sadaghe=payment::select('price','payFor')
                ->where('payFor','=','صدقه')->sum('price');
        $khoms=payment::select('price','payFor')
            ->where('payFor','=','خمس')->sum('price');
        $jahizie=payment::select('price','payFor')
            ->where('payFor','=','جهیزیه')->sum('price');
        $zakat=payment::select('price','payFor')
            ->where('payFor','=','زکات')->sum('price');
        $darman=payment::select('price','payFor')
            ->where('payFor','=','درمان')->sum('price');
        $fetrie=payment::select('price','payFor')
            ->where('payFor','=','فطریه')->sum('price');
        return view('payment.PaymentList',[
            'sadaghe'=>$sadaghe,
            'khoms'=>$khoms,
            'jahizie'=>$jahizie,
            'zakat'=>$zakat,
            'darman'=>$darman,
            'fet'=>$fetrie,
        ]);

    }

    public function mypayment(Request $request){
        $user=auth()->user();
        $shenase='شناسه نیکوکاری';
        $p='پرداخت به عنوان';
        $pri='مبلغ';
        $nationalCode=$user->nationalCode;
        $payment=payment::query()->select('price','PayFor')->where('nationalCode',$nationalCode)->get();
        $total=payment::query()->select('price')->where('nationalCode',$nationalCode)->sum('price');
        return view('payment.mypayment',[
            'user'=>$user,
            'payment'=>$payment,
            'p'=>$p,
            'shenase'=>$shenase,
            'pri'=>$pri,
            'total'=>$total,
        ]);
    }
    public function monthlyreport(Request $request){
    $payment=payment::all();
    return view('payment.monthlyPayment',[
        'payments'=>$payment,
    ]);
    }
    public function yearlyReport(){
        $payment=payment::all();
        return view('payment.yearlyreport',[
            'payments'=>$payment,
        ]);
    }
}
