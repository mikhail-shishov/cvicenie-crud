const qnaBlock = document.querySelectorAll('.qna-block');

qnaBlock.forEach((el) => {
  el.addEventListener('click', function () {
    el.classList.toggle('is-shown');
  });
});
