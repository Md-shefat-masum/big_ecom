function addToCart(product_id, qty=1) {
    fetch("/add_to_cart", {
        method: "POST",
        headers: {
            "content-type": "application/json",
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        body: JSON.stringify({
            id: product_id,
            qty: qty
        })
    }).then(res => {
        return res.json()
    }).then(res => {
        console.log(res);
    })
}