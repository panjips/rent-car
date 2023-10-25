const overlay = document.querySelector('.overlay');
const contents = document.querySelector('.container-transaction');
overlay.addEventListener('click', () => {
  contents.classList.remove('active');
  overlay.classList.remove('active');
});

document.getElementById('btnSewa').addEventListener('click', () => {
  contents.classList.toggle('active');
  overlay.classList.toggle('active');
});
