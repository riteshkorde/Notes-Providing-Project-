const stars = document.querySelectorAll('.star');
const ratingLabel = document.querySelector('.rating-label');

function setRating(rating) {
  stars.forEach((star, index) => {
    star.classList.remove('active');
    if (index < rating) {
      star.classList.add('active');
    }
  });
  ratingLabel.textContent = rating.toFixed(1) + ' out of 5 stars';
}

stars.forEach((star, index) => {
  star.addEventListener('click', () => {
    setRating(index + 1);
  });
});

setRating(parseFloat(document.querySelector('.stars').dataset.rating));