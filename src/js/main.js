import 'js/reactApp.jsx';
import '@scss/main';
import { add } from 'js/utils/math';
import { greet } from 'js/utils/greet';
setTimeout(() => {
  import('js/sub');
}, 2000);

console.log('app');

const result = add(1, 2);

const a = 1;
console.log(a);

$('body')
  .append(result)
  .append(`<p>${greet('App')}</p>`);

velocity($('h1'), 'fadeIn', { duration: 2000, loop: true });

const promise = new Promise((resolve) => {
  setTimeout(() => resolve('hello!'), 3000);
});

async function delayHello() {
  const value = await promise;
  console.log(value);
}

utils.log('Hello,utils!');
delayHello();
