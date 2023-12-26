const title = document.querySelector('h1');

title.addEventListener('mouseenter', function() {
  title.classList.add('animated', 'pulse');
});

title.addEventListener('mouseleave', function() {
  title.classList.remove('animated', 'pulse');
});

const inputs = document.querySelectorAll('input');

for (const input of inputs) {
  input.addEventListener('focus', function() {
    this.classList.add('animated', 'fadeInLeft');
  });

  input.addEventListener('blur', function() {
    this.classList.remove('animated', 'fadeInLeft');
  });
}

const button = document.querySelector('button');

button.addEventListener('mouseenter', function() {
  button.classList.add('animated', 'pulse');
});

button.addEventListener('mouseleave', function() {
  button.classList.remove('animated', 'pulse');
});
