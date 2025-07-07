import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/autoplay';

import { Autoplay } from 'swiper/modules';

const swiperHome = new Swiper('.swiperHome', {
  modules: [Autoplay],
  direction: 'horizontal',
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
});
