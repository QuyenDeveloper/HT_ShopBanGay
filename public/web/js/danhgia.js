function danhgia(rating) {
    var stars = document.querySelectorAll('.prod-rating i');

    for (var i = stars.length - 1; i >= 0; i--) {
        if (stars.length - i <= rating) {
            stars[i].classList.remove('fa-star-o');
            stars[i].classList.add('fa-star');
        } else {
            stars[i].classList.remove('fa-star');
            stars[i].classList.add('fa-star-o');
        }
    }

    // Set the value of DGiaSao input field
    document.getElementById('danhgia').value = rating;
}

