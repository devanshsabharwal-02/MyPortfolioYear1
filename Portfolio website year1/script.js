let btnClear = documnet.querySelector('button');
let inputs = documnet.querySelectorAll('input');

btnClear.addEvenmtListener('click', () => {
 inputs.forEach(input => input.value = '');
});