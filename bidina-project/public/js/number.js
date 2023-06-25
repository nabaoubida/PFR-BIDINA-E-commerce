let btnIncrement = document.getElementById('increment');
let btnDecrement = document.getElementById('decrement');
let counter = document.getElementById('counter');
  btnIncrement.addEventListener('click',function () {
    let value = parseInt(counter.value);
    if (value < 30) {
        value++;
        counter.value = value ;
    }
})
btnDecrement.addEventListener('click',function (){
    let value = parseInt(counter.value);
    if (value > 1) {
        value--;
        counter.value = value ;
    }
})