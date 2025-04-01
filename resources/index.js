import "@babel/polyfill";
import './styles/main.scss';
import Router from './js/utils/Router';
import home from './js/screens/home';
import common from './js/screens/common';
import detailNews from './js/screens/single';

console.log('yo');

const routes = new Router({
    home,
    common,
    detailNews
});
  
// Load Events
window.addEventListener('DOMContentLoaded', () => routes.loadEvents());