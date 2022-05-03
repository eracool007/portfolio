
function loadImage(id, image) {
    
    document.getElementById(`${id}`).style.backgroundImage =`url('assets/${image}')`;
}

function getCards(numberOfCards) {
    var cards = [];
    var card = "card";
    for(let i = 0; i <= numberOfCards; i++) {
        
        id = card.concat(i);
        cards[i] = document.getElementById(`${id}`);
       
    }
}
function openModal(text) {
    window.addEventListener("load", function(){
    modal.style.display = "block";
    para = document.getElementById('para-modal');
    para.innerHTML = text;
    });
    
}

document.addEventListener("DOMContentLoaded", function() {

    //burger menu
    const burger = document.getElementById('burger');
    const bars = document.querySelectorAll('.menu');
    const subMenu= document.getElementById('sub-menu');
    const links = document.querySelectorAll('.burger-links');
    
    burger.addEventListener('click', function(){
    
       subMenu.classList.toggle('show');
       toggleOpen();
    });

    links.forEach(function(currentValue, currentIndex, listObj) {
        currentValue.addEventListener('click', function() {
        subMenu.classList.toggle('show');
        toggleOpen();
         
        });
    });
    function toggleOpen(){
        bars.forEach(function(currentValue, currentIndex, listObj) {
            currentValue.classList.toggle('opened');
         },);
         if(subMenu.classList.contains('show')) {
             subMenu.style.width = "100%";
         } else {
             subMenu.style.width = "0%";
         }
    }
    

    //initiate slider
   
    loadSlider();
    
    //Credits Modal

    var creditsList = document.getElementById('credits');
    
    creditsList.addEventListener('click', function() {
        creditsList.classList.toggle('hidden');
    });
    var credits = document.querySelector('.credits');
    credits.addEventListener('click', function(){
        creditsList.classList.toggle('hidden');
    });
    
   
   
    //modal
   
    var modal = document.getElementById("modal");
    
    var closeModal = document.getElementsByClassName("close")[0];
    
    
    closeModal.addEventListener('click', function () {
        modal.style.display = "none";
    });

    closeModal.onclick = function() {
        modal.style.display = "none";
        }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        }
    }
    

});

function loadSlider() {
    var currentSlide = 0;
    var numberOfCards;
    var slides = document.querySelectorAll('.card');
    numberOfCards = slides.length;
    var action=1;

    const btnPrev = document.getElementById('btn-prev');
    const btnNext = document.getElementById('btn-next');
    btnPrev.addEventListener('click', function() {
       action = -1;
       changeSlide();
    });

    btnNext.addEventListener('click', function() {
        action = 1;
        changeSlide();
    });

    function changeSlide() {
        slides[currentSlide].classList.add('hidden');
        if (currentSlide < numberOfCards) {
            //if next button
            if(action == 1) {
               
                if(currentSlide < numberOfCards - 1) {
                    currentSlide = currentSlide + action;
                } else {
                    currentSlide = 0;
                }
            } else {
                //if previous button
                if (currentSlide <= 0) {
                    currentSlide = numberOfCards - 1;
                    } else {
                        currentSlide = currentSlide + action;
                    }
            }
            slides[currentSlide].classList.remove('hidden');
        }
    }
   
}
function scrollToContact(){
    const documentHeight = document.body.scrollHeight;
    const clientHeight = document.documentElement.clientHeight;
    var place = documentHeight - 60/100;
    window.scrollTo({
        top: place,
        left: 0,
        behavior: 'smooth'
    });
}



