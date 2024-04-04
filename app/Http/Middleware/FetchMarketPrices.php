<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\MarketPriceWatch;
// use App\Http\Middleware\Carbon;
use Carbon\Carbon;

class FetchMarketPrices
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Get the current month and year
        $currentMonth = Carbon::now()->format('Y-m');
        // Check if there are prices created this month
        $pricesThisMonth = MarketPriceWatch::whereYear('created_at', '=', Carbon::now()->year)
        ->whereMonth('created_at', '=', Carbon::now()->month)
        ->exists();

        if($pricesThisMonth){
            $prices = MarketPriceWatch::whereYear('created_at', '=', Carbon::now()->year)
                                   ->whereMonth('created_at', '=', Carbon::now()->month)
                                   ->orderByDesc('id')
                                   ->get();
        }else{
            $latestMonthPrices = MarketPriceWatch::orderBy('created_at', 'desc')->first();
            $prices = $latestMonthPrices ? MarketPriceWatch::whereYear('created_at', '=', $latestMonthPrices->created_at->year)
                                                    ->whereMonth('created_at', '=', $latestMonthPrices->created_at->month)
                                                    ->orderByDesc('id')
                                                    ->get()
                                        : collect();
        }

        // $prices = MarketPriceWatch::orderByDesc('id')->get();
        \View::share('prices', $prices);
        return $next($request);
    }
}
