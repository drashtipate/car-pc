<button id="rzp-button1" hidden>pay</button>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
        "key": "rzp_test_aWAKaYaCExMwwC",
        "amount": "{{$response['amount']}}",
        "currency": "INR",
        "name": "{{$response['firstname']}}",
        "description": "Test Transaction",
        "image": "https://car-image.com",
        "order_id": "{{$response['orderId']}}",
        "handler": function(response) {

            document.getElementById('rzp_paymentid').value = response.razorpay_payment_id;
            document.getElementById('rzp_orderid').value = response.razorpay_order_id;
            document.getElementById('rzp_signature').value = response.razorpay_signature;


            document.getElementById('rzp-paymentresponse').click();

        },
        "prefill": {
            "name": "{{$response['firstname']}}",
            "email": "{{$response['email']}}",
           
        },
        "notes": {
            "address": "Razorpay Corporate Office"
        },
        "theme": {
            "color": "#3399cc"
        },


    };
    var rzp1 = new Razorpay(options);
    window.onload = function() {
        document.getElementById('rzp-button1').click();

    };
    document.getElementById('rzp-button1').onclick = function(e) {
        rzp1.open();
        e.preventDefault();
    }
</script>

<form action="{{url('users/paymentes')}}" method="POST" hidden>
    <input type="hidden" value="  {{ csrf_token() }}" name="_token">
    <input type="text" class="form-control" name="rzp_paymentid" id="rzp_paymentid">
    <input type="text" class="form-control" name="rzp_orderid" id="rzp_orderid">
    <input type="text" class="form-control" name="rzp_signature" id="rzp_signature">
    <button type="submit" id="rzp-paymentresponse" class="btn-btn-primary">Submit</button>