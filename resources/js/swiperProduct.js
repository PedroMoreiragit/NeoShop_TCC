import Swiper from 'swiper';
import 'swiper/css';

import { Navigation } from 'swiper/modules';

const swiperProduct = new Swiper('.swiperProduct', {
  modules: [Navigation],
  direction: 'horizontal',
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
