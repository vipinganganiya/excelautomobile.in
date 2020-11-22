<?php
	namespace App\Http\Controllers;

	use SCart\Core\Front\Models\ShopOrderDetail;
	use App\Http\Controllers\Controller;
	use Illuminate\Support\Facades\DB;


	class AdminOrderController extends \SCart\Core\Admin\Controllers\AdminOrderController
	{
	    public function __construct()
	    {
	        parent::__construct();
	    }

	    /**
	     * [postEditPaymentMethod description]
	     * @param   [description]
	     * @return [type]           [description]
	     */
	    public function postEditPaymentMethod() {
	    	
			try
			{    	/*
					Requested Content
		    	*/
		    	$id = request('pk');
	            $field = request('name');
	            $value = request('value');

	            /*
					Feteched data
	            */
	            $order = DB::table('sc_shop_order')
			              ->where('id', $id)
			              ->update([ $field => $value]);

	            $arrayReturn = ['error' => 0, 'msg' => "Payment Method Updated Successfully"];

            } catch (\Throwable $e) {
            	$arrayReturn = ['error' => 1, 'msg' => $e->getMessage()];
        	}


        	return response()->json($arrayReturn);
	    }

	    /**
	     * [postEditOrderStatus description]
	     * @param   [description]
	     * @return [type]           [description]
	     */
	    public function postEditOrderStatus() {
	    	
			try
			{   /*
					Requested Content
		    	*/
		    	$id = request('pk');
	            $field = request('name');
	            $status = request('value');
	            $orderStatusFields = array( '1' => 'New', '2' => 'Processing', '3' => 'Hold', '4' => 'Canceled', '5' =>'Done', '6' => 'Failed');
	            $statusID = array_search($status, $orderStatusFields);

	            /*
					Feteched data
	            */
				if( $statusID != false) {
					 $order = DB::table('sc_shop_order')
			              ->where('id', $id)
			              ->update([ $field => $statusID]);

	            	$arrayReturn = ['error' => 0, 'msg' => "Order Status Updated Successfully"];
				} else {
					$arrayReturn = ['error' => 1, 'msg' => "There is some issue. Please contact to adminstrator"];
				}

            } catch (\Throwable $e) {
            	$arrayReturn = ['error' => 1, 'msg' => $e->getMessage()];
        	}

        	return response()->json($arrayReturn);
	    }

	    /**
	     * [postEditOrderTax description]
	     * @param   [description]
	     * @return [type]           [description]
	     */
	    public function postEditOrderTax() {
	    	
			try
			{   /*
					Requested Content
		    	*/
		    	$id = request('pk');
	            $field = request('name');
	            $value = request('value');
	            $total=0;

	            /*
					Feteched data
	            */
	            $updateOrderTax= DB::table('sc_shop_order')
			              ->where('id', $id)
			              ->update([ $field => $value]);

			    /*
					Update Tax Value
                */
			    $updateOrderTotalTax = DB::table('sc_shop_order_total')
			              ->where('order_id', $id)
			              ->where('code', $field)
			              ->update([ 'value' => $value]);

			    /*
					Get Total Value
                */
			    $getOrderTotalTax = DB::table('sc_shop_order_total')
                     ->select('value')
                     ->where('order_id', $id)
                     ->where('code', 'subtotal')
                     ->get();

                /*
					Update Total Value
                */
                if( !empty($getOrderTotalTax[0]->value)) {
                	$total = $getOrderTotalTax[0]->value + $value;
                	 $updateOrderTotalTax = DB::table('sc_shop_order_total')
			              ->where('order_id', $id)
			              ->where('code', 'total')
			              ->update([ 'value' => $total]);
                }


	            $arrayReturn = ['error' => 0, 'msg' => 'Tax Amount is Updated Successfully!'];

            } catch (\Throwable $e) {
            	$arrayReturn = ['error' => 1, 'msg' => $e->getMessage()];
        	}

        	return response()->json($arrayReturn);
	    }


	    /**
	     * [postEditOrderTaxTitle description]
	     * @param   [description]
	     * @return [type]           [description]
	     */
	    public function postEditOrderTaxTitle() {
	    	
			try
			{   /*
					Requested Content
		    	*/
		    	$id = request('pk');
	            $field = request('name');
	            $value = request('value');
	            $total=0;

			    /*
					Update Tax Value
                */
				if( $field == 'tax_title') {
					$updateOrderTotalTax = DB::table('sc_shop_order_total')
			              ->where('order_id', $id)
			              ->where('code', 'tax')
			              ->update([ 'title' => $value]);
				}

	            $arrayReturn = ['error' => 0, 'msg' => 'Tax Title is Updated Successfully!'];

            } catch (\Throwable $e) {
            	$arrayReturn = ['error' => 1, 'msg' => $e->getMessage()];
        	}

        	return response()->json($arrayReturn);
	    }

	}
?>
