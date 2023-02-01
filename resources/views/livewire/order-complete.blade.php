<style>
    .checkmark {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left: -15px;
    }
    .success_msg {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }
    .gif_load {
        height: 150px;
        max-width: 150px;
    }
</style>
<div class="page-not-found-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 m-auto">
                <div class="error-content text-center">
                    <img src="{{ asset('contents/frontend/assets/images/verified.gif') }}" class="gif_load" alt="">
                    {{-- <div class="mb-4" style="border-radius: 200px; height: 200px; width: 200px; background: #f8faf5; margin: 0 auto;">
                        <i class="checkmark">✓</i>
                    </div>       --}}
                    <h1 class="success_msg"><b>Success</b></h1>              
                    <h2 class="text-primary"><b>Your order has been received</b></h2>
                    <p>Thank you for shopping with us. we'll be in touch shortly!</p>
                    <a class="btn btn-primary" href="/">Back to Shopping</a>
                </div>
            </div>
        </div>
    </div>
</div>
