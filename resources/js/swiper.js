import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/autoplay'; // Importa o CSS (opcional se já importou 'swiper/css')

import { Autoplay } from 'swiper/modules'; // Importa o módulo de autoplay

const swiper = new Swiper('.swiper', {
  modules: [Autoplay], // Ativa o módulo
  direction: 'horizontal',
  loop: true,
  autoplay: {
    delay: 3000, // Tempo entre os slides (em ms)
    disableOnInteraction: false, // Continua mesmo após interação
  },
});
