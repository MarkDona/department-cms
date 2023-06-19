function modal(id, action) {
    $('#'+id).modal(action)
}

let paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
    e.preventDefault();
    let handler = PaystackPop.setup({
        key: $('#key').data('public-key'), // Replace with your public key
        email: document.getElementById("email_address").value,
        amount: document.getElementById("amount").value * 100,
        currency: 'GHS',
        metadata: {
            'csdms': {
                'phone_number': $('#phone_number').val(),
                'user_id': $('#user_index').val(),
                'dues_index': $('#dues_index').val(),
                'dues_year': $('#dues_year').val(),
            }
        },
        ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        // label: "Optional string that replaces customer email"
        onClose: function(){
            toastAlert('warning', 'Window closed.');
        },
        callback: function(response){
            let reference = response.reference;
            //verify payment
            $.ajax({
                type: "GET",
                url:  'verify-payment/'+reference,
                success: function (response) {
                    console.log(response)
                    if (response.status === 'success') {
                        toastAlert('success', response.message)
                        modal('payDues', 'hide')
                        refresh(5000)
                    }
                }
            });
        }
    });
    handler.openIframe();
}

function toastAlert(status, msg, timer = 3000) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: timer,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: status,
        title: msg
    })
}

function back(location) {
    setTimeout(() => {
        window.location.href = location
    }, 3000)
}

function refresh(timer = 3000) {
    setTimeout(() => location.reload(), timer)
}

function redirect(location) {
    setTimeout(() => window.location.href = location, 3000)
}
