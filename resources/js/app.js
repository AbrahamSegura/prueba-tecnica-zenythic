import './bootstrap';
import $ from 'jquery';
import Swiper from 'swiper';
import 'swiper/css'
import 'swiper/css/autoplay';
import 'swiper/css/free-mode';
import 'swiper/css/navigation';
import 'swiper/css/scrollbar';
import { Navigation, Autoplay, Scrollbar, FreeMode } from 'swiper/modules';
import { allGames, games1, games2, games3 } from './images';
import loteriaImg from '../../img/loteria.png';
import pagosImg from '../../img/pagos.png';


$('#play-more').hover(() => {
  $('#arrow-l').addClass('animate-Hbounce')
}).mouseleave(() => {
  $('#arrow-l').removeClass('animate-Hbounce')
})

const heartWraper = document.querySelectorAll('.heart-wraper')
heartWraper.forEach(hw=> hw.addEventListener('click',()=>{
  hw.classList.toggle('bg-red-500')
})
)

const createSwiper = (name) => {
  const posiblesGames = {
    'outstanding': () => games1,
    'new-games': () => games2,
    'clasic': () => games3,
    'all-games': () => allGames
  }

  const games = posiblesGames[name]() || allGames
  const fragment = new DocumentFragment()

  for (const game of games) {
    const li = document.createElement('li')
    li.classList.add('swiper-slide')
    const div = document.createElement('div')
    div.classList = 'size-72 object-contain rounded-xl hover:scale-110 transition-all cursor-pointer'
    div.style.backgroundImage = `url(${game})`
    div.style.backgroundSize = 'cover'
    div.style.backgroundPosition = 'center'
    li.appendChild(div)
    fragment.appendChild(li)
  }

  const swiperCont = `.${name}-swiper`

  const prev = `.${name}-prev`
  const next = `.${name}-next`
  $(swiperCont).append(fragment)
  const swiper = `.${name}`
  new Swiper(swiper, {
    modules: [Navigation,Autoplay],
    watchSlidesProgress: true,
    slidesPerView: 4,
    spaceBetween: 15,
    loop: true,
    autoplay: {
      delay: 1000,
    },
    navigation: {
      nextEl: next,
      prevEl: prev
    }
  });
}

createSwiper('outstanding')
createSwiper('new-games')
createSwiper('clasic')
createSwiper('all-games')

$('#loteria').attr('src', loteriaImg)
$('#pagos').attr('src', pagosImg)


new Swiper('.game-card-swiper', {
  modules: [Scrollbar, FreeMode],
  slidesPerView: "auto",
  spaceBetween: 10,
  freeMode: {
    enabled: true
  },
  scrollbar:{
    el: ".game-scrollbar",
    hide: false 
  }
})
new Swiper('.games-category', {
  modules: [FreeMode],
  slidesPerView: "auto",
  spaceBetween: 10,
  freeMode: {
    enabled: true
  },
})
