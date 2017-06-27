<?php

    namespace App\Http\Controllers;

    use App\Customer;
    use Illuminate\Http\Request;

    class CustomerController extends Controller
    {
        public function index()
        {
            return view( 'customers.index' );
        }

        /**
         * @param \Illuminate\Http\Request $request
         * @param \App\Customer            $customer
         *
         * @return \Illuminate\Http\JsonResponse
         */
        public function store( Request $request, Customer $customer )
        {
            switch ( $request->data ) {
                case "very_satisfied":
                    $customer->very_satisfied = 1;
                    break;
                case "satisfied":
                    $customer->satisfied = 1;
                    break;
                case "not_satisfied":
                    $customer->not_satisfied = 1;
                    break;
            }
            if ( $customer->save() ) {
                return response()->json('Done', 200);
            }
        }

        /**
         * @return $this
         */
        public function dashboard()
        {
            $customers = count( Customer::where('very_satisfied', 1)->get() );
            $total = count( Customer::all() );
            $percentage = round( ( $customers / $total ) * 100 ); # customer / total * 100

            return view( 'admin.dashboard')
                ->with('percentage', $percentage)
                ->with('total', $total);
        }
    }
