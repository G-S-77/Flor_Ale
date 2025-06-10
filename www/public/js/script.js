// Code 1 : Curseur

const cursor = document.querySelector('.cursor');
const cursorText = document.querySelector('.cursor-text');

document.addEventListener('mousemove', e => {
    cursor.setAttribute('style', 'top:'+(e.pageY - 20)+'px; left:'+(e.pageX - 20)+'px;')
    cursorText.setAttribute('style', 'top:'+(e.pageY - 20)+'px; left:'+(e.pageX - 20)+'px;')
})

const textFields = document.querySelectorAll(
    'input[type="text"], input[type="email"], input[type="search"], input[type="number"], textarea'
);

textFields.forEach(field => {
    field.addEventListener('mouseover', () => {
        cursor.style.display = 'none';
        cursorText.style.display = 'block';
    });

    field.addEventListener('mouseout', () => {
        cursor.style.display = 'block';
        cursorText.style.display = 'none';
    });
});

textFields.forEach(field => {
    field.addEventListener('focus', () => {
        cursor.style.display = 'none';
        cursorText.style.display = 'block';
    });

    field.addEventListener('blur', () => {
        cursor.style.display = 'block';
        cursorText.style.display = 'none';
    });
});

// Animation curseur

document.addEventListener('click', ()=> {
    cursor.classList.add('expand');

    setTimeout(()=>{
        cursor.classList.remove("expand");
    }, 500);
})

// Code 2 : Popup

function openPopup () {
    const popup = document.querySelector(".overlay-popup");
    popup.classList.add('active-popup')
}

function closePopup() {
    const popup = document.querySelector(".overlay-popup");
    popup.classList.remove('active-popup');
}

// Code 3 : Bouton pour remonter vers le haut
const btn = document.querySelector('.btn1');
if (btn) {
btn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })
})
}

// Code 4 : Hover effet logo
const logo = document.querySelector('.not-effect');
const contact = document.getElementById('contact');

if(logo && contact) {
logo.addEventListener('mouseenter', () => contact.classList.add('blur'));
logo.addEventListener('mouseleave', () => contact.classList.remove('blur'));
}

// Code 5 : Timeline
const allRonds = document.querySelectorAll('.rond');
const allBoxes = document.querySelectorAll('.box');

if (typeof ScrollMagic !== 'undefined' && allBoxes.length && allRonds.length) {
const controller = new ScrollMagic.Controller();

allBoxes.forEach(box => {
    for(i = 0; i < allRonds.length; i++){
        if(allRonds[i].getAttribute('data-anim') === box.getAttribute('data-anim')){
            let tween = gsap.from(box, {y: -50, opacity: 0, duration: 0.5})
            let scene = new ScrollMagic.Scene({
                triggerElement: allRonds[i],
                reverse: false
            })
            .setTween(tween)
            .addTo(controller)
        }
    }
})
}

//Code 6 : Carrousel équipe

document.addEventListener('DOMContentLoaded', () => {
    const cardsMMI = document.querySelectorAll('.cardMMI');
    const cardsGB = document.querySelectorAll('.cardGB');

// Groupe MMI

if (cardsMMI.length > 0 && cardsGB.length > 0) {
let indexMMI = 0;

if (rightMMI && leftMMI) {
document.getElementById('rightMMI').addEventListener('click', () => {
    slideSuivante(cardsMMI, 'MMI');
});

document.getElementById('leftMMI').addEventListener('click', () => {
    slidePrecedente(cardsMMI, 'MMI');
});
}

// Groupe GB
let indexGB = 0;

if (rightGB && leftGB) {
document.getElementById('rightGB').addEventListener('click', () => {
    slideSuivante(cardsGB, 'GB');
});

document.getElementById('leftGB').addEventListener('click', () => {
    slidePrecedente(cardsGB, 'GB');
});
}
function slideSuivante(cards, group) {
    if (group === 'MMI') {
        cards[indexMMI].classList.remove('active');
        indexMMI = (indexMMI + 1) % cards.length;
        cards[indexMMI].classList.add('active');
    } else if (group === 'GB') {
        cards[indexGB].classList.remove('active');
        indexGB = (indexGB + 1) % cards.length;
        cards[indexGB].classList.add('active');
    }
}

function slidePrecedente(cards, group) {
    if (group === 'MMI') {
        cards[indexMMI].classList.remove('active');
        indexMMI = (indexMMI - 1 + cards.length) % cards.length;
        cards[indexMMI].classList.add('active');
    } else if (group === 'GB') {
        cards[indexGB].classList.remove('active');
        indexGB = (indexGB - 1 + cards.length) % cards.length;
        cards[indexGB].classList.add('active');
    }
}

function keyPress(e){
    if(e.keyCode === 39){
       slideSuivante(cardsMMI, 'MMI');
        slideSuivante(cardsGB, 'GB');
    } else if(e.keyCode === 37){
        slidePrecedente(cardsMMI, 'MMI');
        slidePrecedente(cardsGB, 'GB');
    }
}
document.addEventListener('keydown', keyPress)
}
});

//Code 7 : Carrousel bière

document.addEventListener("DOMContentLoaded", () => {
  const list = document.querySelector('.slider2 .list');
  const items = document.querySelectorAll('.slider2 .list .item');
  const prevBtn = document.getElementById('prev');
  const nextBtn = document.getElementById('next');

  if (!list || !items.length || !prevBtn || !nextBtn) return;

  let index = 0;
  let itemWidth = items[0].offsetWidth;

  const updateItemWidth = () => {
    itemWidth = items[0].offsetWidth;
    updateSliderPosition();
  };
  window.addEventListener('resize', updateItemWidth);

  const updateSliderPosition = () => {
  const slider = document.querySelector('.slider2');
  const sliderWidth = slider.offsetWidth;
  const offset = (sliderWidth - itemWidth) / 2;
  const translateX = -index * itemWidth + offset;
  list.style.transform = `translateX(${translateX}px)`;

  document.querySelector('.item.active')?.classList.remove('active');
  items[index].classList.add('active');
};

  const slideTo = (newIndex) => {
    index = (newIndex + items.length) % items.length;
    updateSliderPosition();
    updateMoreButton();
  };

  nextBtn.addEventListener('click', () => slideTo(index + 1));
  prevBtn.addEventListener('click', () => slideTo(index - 1));

  function keyPress(e){
    if(e.keyCode === 37){
        slideTo(index - 1);
    } else if(e.keyCode === 39){
        slideTo(index + 1);
    }
}
document.addEventListener('keydown', keyPress)

  const btnFiche = document.getElementById('btn-fiche');

const updateMoreButton = () => {
  const currentItem = items[index];
  const id = currentItem.getAttribute('data-id');
  btnFiche.onclick = () => {
    window.location.href = `index.php?route=produit&id=${id}`;
  };
};

  updateSliderPosition();
  updateMoreButton();
});

// Code 8 : Animation bouton "Ajouter au panier" sur les fiches bières

document.addEventListener('DOMContentLoaded', function() {
  const btn = document.querySelector('.biere-carte .ajouter-panier');
  if(btn) {
    btn.addEventListener('click', function() {
      btn.classList.remove('animate');
      // Force reflow pour relancer l'animation
      void btn.offsetWidth;
      btn.classList.add('animate');
    });
  }
});

// Code 9 : Bouton input panier

document.querySelectorAll('.nombre').forEach(container => {
  const input = container.querySelector('input');
  container.querySelector('.increment').addEventListener('click', () => {
    input.stepUp();
  });
  container.querySelector('.decrement').addEventListener('click', () => {
    input.stepDown();
  });
});