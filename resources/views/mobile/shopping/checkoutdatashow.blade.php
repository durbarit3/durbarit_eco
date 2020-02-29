<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr>
														<td class="text-center">Image</td>
														<td class="text-left">Product Name</td>
														<td class="text-left">Quantity</td>
														<td class="text-right">Unit Price</td>
														<td class="text-right">Total</td>
													</tr>
												</thead>
												<tbody>
                                                    @foreach($usercartdatas as $usercartdata)

													<tr>
														<td class="text-center">
															<a href="{{(route('product.details',$usercartdata->attributes->product_id))}}"><img width="100px" src="{{asset('public/uploads/products/thumbnail/')}}/{{$usercartdata->attributes->thumbnail_img}}" alt="{{$usercartdata->attributes->thumbnail_img}}" title="{{$usercartdata->attributes->thumbnail_img}}" class="img-thumbnail">
															</a>
														</td>
														<td class="text-left"><a href="{{(route('product.details',$usercartdata->attributes->product_id))}}">{{$usercartdata->name}}</a>
														</td>
														<td class="text-left">
															<div class="input-group btn-block">
																<form id="getcatdata" onchange="myUpdateOrder(this)">
																<input type="hidden" name="rowid" id="cartrowid" value="{{$usercartdata->id}}"  class="form-control">
																<input type="text" name="quantity" id="cartqty" value="{{$usercartdata->quantity}}" size="1" class="form-control">
																<span class="input-group-btn">
																	<button type="button" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Update"><i class="fa fa-refresh"></i></button>
																	<button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="orderdelete(this)" id="{{$usercartdata->id}}" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
																</span>
																</form>
															</div>
														</td>
														<td class="text-right">৳ {{$usercartdata->price}}</td>
														<td class="text-right">৳ {{$usercartdata->price * $usercartdata->quantity}}</td>
                                                    </tr>
                                                    @endforeach
												</tbody>
												<tfoot>
													<tr>
														<td class="text-right" colspan="4"><strong>Sub-Total:</strong>
														</td>
														<td class="text-right">৳ {{Cart::session(\Request::getClientIp(true))->getSubTotal()}}</td>
													</tr>
													<tr>
														<td class="text-right" colspan="4"><strong>Quantity:</strong>
														</td>
														<td class="text-right">{{Cart::session(\Request::getClientIp(true))->getTotalQuantity()}}</td>
													</tr>
													<tr>
														<td class="text-right" colspan="4"><strong>Discount:</strong>
														</td>
														<td class="text-right">
															@if(isset($cupondatavalue))
																{{$cupondatavalue}}
															@else
																0.00
															@endif

														</td>
													</tr>

													<tr>
														<td class="text-right" colspan="4"><strong>Shipping Charge:</strong>
														</td>
														@php
															$user_division = App\UserAddress::where('user_id',Auth::user()->id)->first();
															if(isset($user_division)){
																$user_division = $user_division->user_division_id;
																$deleveryamount = App\DeleveryAmount::first();
															
															if($user_division == 6){
																$deleverycharge =$deleveryamount->insidedhaka;
															}else{
																$deleverycharge =$deleveryamount->outsidedhaka;
															}
															}
															
														@endphp

														{{$deleverycharge}}

														<td class="text-right">
															@if($user_division == 6)
																@if(isset($deleveryamount))
																<input type="hidden" value="{{$deleveryamount->insidedhaka}}" name="shipping_amount">
																{{$deleveryamount->insidedhaka}}
																@endif
															@else
															@if(isset($deleveryamount))
															<input type="hidden" value="{{$deleveryamount->outsidedhaka}}" name="shipping_amount">
																{{$deleveryamount->outsidedhaka}}
																@endif
															@endif
															
														</td>
													</tr>

													<tr>
														<td class="text-right" colspan="4"><strong>Total:</strong>
														</td>
														@if(isset($deleverycharge))
														<td class="text-right" id="totalpriceafterdelevery">৳ {{Cart::session(\Request::getClientIp(true))->getTotal() + $deleverycharge}}
															<input type="hidden" value="{{Cart::session(\Request::getClientIp(true))->getTotal() + $deleverycharge}}" name="total_price">

															</td>
														@else
															<td class="text-right" id="totalpriceafterdelevery">৳ {{Cart::session(\Request::getClientIp(true))->getTotal()}}

																<input type="hidden" value="{{Cart::session(\Request::getClientIp(true))->getTotal()}}" name="total_price">
															</td>
														@endif
													</tr>
												</tfoot>
											</table>
										</div>


										<script>
    var myVar;
    function myUpdateOrder(el) {


		var cartrowid =el.rowid.value;
		var cartqty =el.quantity.value;

        myVar = setTimeout(function(){
            $.post('{{ route('product.cart.update') }}', {_token: '{{ csrf_token() }}', quantity:cartqty, rowid:cartrowid },
            function(data) {
				console.log(data);
				$('#cartdata').html(data);
                if (data) {
                    toastr.success("Product Quantity Changed successfully");
                }
            });

			
		},10);

    }


</script>

<script>
    function orderdelete(el) {

		var cartrowid =el.id;


        $.post('{{ route('mobile.product.cart.delete') }}', {_token: '{{ csrf_token() }}',user_id: cartrowid},
            function(data) {

                $('#cartdata').html(data);


            });
            toastr.success("Product Deleted successfully");
	}


</script>
