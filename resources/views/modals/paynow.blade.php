<div class="modal fade text-start" id="payNow" tabindex="-1" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="text-center" id="myModalLabel17">Pay Departmental Dues</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="paymentForm">
                @csrf
                <input type="hidden" name="email_address" id="email_address" value="{{Auth::user()->email}}">
                <input type="hidden" name="user_index" id="user_index" value="{{Auth::user()->index_number}}">
                <input type="hidden" name="dues_index" id="dues_index" value="{{$fetch_dues->id}}">
                <input type="hidden" name="dues_year" id="dues_year" value="{{$fetch_dues->academic_year}}">
                <div class="row">
                    <div class="mb-0 col-md-6">
                        <div class="modal-body">
                            <label>Phone Number:</label>
                            <div class="mb-1">
                                <input type="text" name="phone_number" id="phone_number" maxlength="12" placeholder="0544000000" class="form-control"  required/>
                            </div>
                        </div>
                    </div>
                    <div class="mb-0 col-md-6">
                        <div class="modal-body">
                            <label>Amount (GH₵): </label>
                            <div class="mb-1">
                                <input type="text" name="amount" id="amount" value="{{$fetch_dues->amount ?? ''}}" class="form-control" readonly  required/>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="key" data-public-key="{{env('PUBLIC_KEY')}}"></div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary PAYNOW" onclick="payWithPaystack(event)">Pay Now</button>
                </div>
            </form>
        </div>
    </div>
</div>
