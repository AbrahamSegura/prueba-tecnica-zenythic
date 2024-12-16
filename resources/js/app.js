import './bootstrap';
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'
import { allGames, games1, games2, games3 } from './images';
import loteriaImg from '../../img/loteria.png'
import pagosImg from '../../img/pagos.png'


$('#play-more').hover(()=>{
  $('#arrow-l').addClass('animate-Hbounce')
}).mouseleave(()=>{
  $('#arrow-l').removeClass('animate-Hbounce')
})

new Swiper(".mySwiper", {
  watchSlidesProgress: true,
  slidesPerView: 5,
  spaceBetween: 5,
  loop: true,
});

const createSwiper = (name) =>{
  const posiblesGames = {
    'outstanding' : () => games1,
    'new-games' : () => games2,
    'clasic' : () => games3,
    'all-games' : () => allGames
  }

  const games = posiblesGames[name]() || allGames
  const fragment = new DocumentFragment()
  
  for(const game of games){
    const li = document.createElement('li')
    li.classList.add('swiper-slide')
    const div = document.createElement('div')
    div.classList = 'size-72 object-contain rounded-xl hover:size-80 transition-all cursor-pointer'
    div.style.backgroundImage = `url(${game})`
    div.style.backgroundSize = 'cover' 
    div.style.backgroundPosition = 'center'
    li.appendChild(div)
    fragment.appendChild(li)
  }

  const swiperCont = `.${name}-swiper`

  const prev = `.${name}-prev`
  const next = `.${name}-next`
  console.log($(swiperCont))
  $(swiperCont).append(fragment)
  const swiper = `.${name}`
  new Swiper( swiper , {
    watchSlidesProgress: true,
    slidesPerView: 4,
    spaceBetween: 15,
    loop:true,
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

$('#loteria').attr('src',loteriaImg)
$('#pagos').attr('src',pagosImg)