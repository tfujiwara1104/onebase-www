import velocity from 'velocity-animate';
import { greet } from './utils/greet';

$('body')
  .css('color', 'red')
  .append(`<p>${greet('sub')}</p>`);
velocity($('h1'), 'fadeIn', { duration: 2000, loop: true });
