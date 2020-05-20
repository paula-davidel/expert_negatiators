
const heroBtnLeft = document.getElementById("hero-btn-left");
const heroBtnRight = document.getElementById("hero-btn-right");
const slides = Array.from(document.getElementsByClassName("slide"));
const heroDot_1 = document.getElementById("hero-dot-1");
const heroDot_2 = document.getElementById("hero-dot-2");
const heroDot_3 = document.getElementById("hero-dot-3");



heroBtnRight.addEventListener( "click", () => {

    let currentSlideIndex = 0;
    
    for( i=0; i<slides.length; i++)
        if(slides[i].classList.contains("current"))
            currentSlideIndex=i;


    if(currentSlideIndex + 1 < slides.length){
        heroBtnLeft.classList.remove("hero-btn-inactive");
        slides[currentSlideIndex].classList.remove("current");
        slides[currentSlideIndex].classList.remove("slide-in-from-left");
        slides[currentSlideIndex].classList.remove("slide-out-to-left");
        slides[currentSlideIndex].classList.remove("slide-in-from-right");
        slides[currentSlideIndex].classList.remove("slide-out-to-right");
        slides[currentSlideIndex].classList.add("slide-out-to-left");



        slides[currentSlideIndex+1].classList.remove("slide-out-to-right");


        slides[currentSlideIndex+1].classList.remove("hide");
        slides[currentSlideIndex+1].classList.add("slide-in-from-right")
        slides[currentSlideIndex+1].classList.add("current");
    }
    
    if(currentSlideIndex + 2 == slides.length){
        heroBtnRight.classList.add("hero-btn-inactive");
    }
    if(currentSlideIndex+2 == 2){
        heroDot_2.classList.add("hero-dot-active");
        heroDot_1.classList.remove("hero-dot-active");
        heroDot_3.classList.remove("hero-dot-active");
    } else     if(currentSlideIndex +2 == 3){
        heroDot_3.classList.add("hero-dot-active");
        heroDot_2.classList.remove("hero-dot-active");
        heroDot_1.classList.remove("hero-dot-active");
    }
})


heroBtnLeft.addEventListener( "click", () => {

    let currentSlideIndex = 0;
    
    for( i=0; i<slides.length; i++)
        if(slides[i].classList.contains("current"))
            currentSlideIndex=i;


    if(currentSlideIndex > 0){
        heroBtnRight.classList.remove("hero-btn-inactive");
        slides[currentSlideIndex].classList.remove("current");
        slides[currentSlideIndex].classList.remove("slide-in-from-left");
        slides[currentSlideIndex].classList.remove("slide-out-to-left");
        slides[currentSlideIndex].classList.remove("slide-in-from-right");
        slides[currentSlideIndex].classList.remove("slide-out-to-right");        
        slides[currentSlideIndex].classList.add("slide-out-to-right");
        slides[currentSlideIndex-1].classList.remove("hide");
        slides[currentSlideIndex-1].classList.add("slide-in-from-left")
        slides[currentSlideIndex-1].classList.add("current");
    }
    if(currentSlideIndex - 1 == 0){
        heroBtnLeft.classList.add("hero-btn-inactive");

    }

    console.log(currentSlideIndex);
    if(currentSlideIndex == 1){
        heroDot_1.classList.add("hero-dot-active");
        heroDot_2.classList.remove("hero-dot-active");
        heroDot_3.classList.remove("hero-dot-active");
    } else if(currentSlideIndex == 2){
        heroDot_2.classList.add("hero-dot-active");
        heroDot_3.classList.remove("hero-dot-active");
        heroDot_1.classList.remove("hero-dot-active");
    }
})



/////////////////////////////////////////

const servicesSlides = Array.from(document.getElementsByClassName("services-item"));
const servicesLeftButton = document.getElementById("services-control-left");
const servicesRightButton = document.getElementById("services-control-right");

var productsSliderCharacteristics = {
    numberOfProducts: 3,
    firstProductPosition: 0,
    lastProductPosition: 2,
    modifyNumberOfProducts(number) { this.numberOfProducts = number },
    modifyFirstProductsPosition(number) { this.firstProductPosition = number },
    modifyLastProductsPosition() { this.lastProductPosition = this.firstProductPosition + this.numberOfProducts - 1 },
}

const testimonialsSlides = Array.from(document.getElementsByClassName("testimonials-grid-item"));
const testimonialsLeftButton = document.getElementById("testimonials-control-left");
const testimonialsRightButton = document.getElementById("testimonials-control-right");

var testimonialsSliderCharacteristics = {
    numberOfProducts: 3,
    firstProductPosition: 0,
    lastProductPosition: 2,
    modifyNumberOfProducts(number) { this.numberOfProducts = number },
    modifyFirstProductsPosition(number) { this.firstProductPosition = number },
    modifyLastProductsPosition() { this.lastProductPosition = this.firstProductPosition + this.numberOfProducts - 1 },
}




var onresize = function () {

    width = window.innerWidth;
    height = window.innerHeight;

    servicesSlides.forEach(slide => { slide.classList.add("hide-product") });

    if (width <= 1400) {
        productsSliderCharacteristics.modifyNumberOfProducts(1);
        productsSliderCharacteristics.modifyLastProductsPosition();
    } else if (width <= 1620) {
        productsSliderCharacteristics.modifyNumberOfProducts(2);
        if(productsSliderCharacteristics.firstProductPosition + productsSliderCharacteristics.numberOfProducts > servicesSlides.length-1){
            
            let overflow = productsSliderCharacteristics.firstProductPosition + productsSliderCharacteristics.numberOfProducts - (servicesSlides.length - 1); 
            productsSliderCharacteristics.modifyFirstProductsPosition(productsSliderCharacteristics.firstProductPosition-overflow)
        }
        productsSliderCharacteristics.modifyLastProductsPosition();
    } else if(width >1620) {
        productsSliderCharacteristics.modifyNumberOfProducts(3);
        if(productsSliderCharacteristics.firstProductPosition + productsSliderCharacteristics.numberOfProducts > servicesSlides.length){
            
            let overflow = productsSliderCharacteristics.firstProductPosition + productsSliderCharacteristics.numberOfProducts - (servicesSlides.length - 1); 
            productsSliderCharacteristics.modifyFirstProductsPosition(productsSliderCharacteristics.firstProductPosition-overflow)
        }
        productsSliderCharacteristics.modifyLastProductsPosition();
    }

    for (index = productsSliderCharacteristics.firstProductPosition; index <= productsSliderCharacteristics.lastProductPosition; index++)
        servicesSlides[index].classList.remove("hide-product");


    servicesRightButton.classList.add("inactive")
    servicesLeftButton.classList.add("inactive")

    if(index < servicesSlides.length)
        servicesRightButton.classList.remove("inactive")

    if(productsSliderCharacteristics.firstProductPosition > 0)
        servicesLeftButton.classList.remove("inactive")

    if(testimonialsSlides.length == productsSliderCharacteristics.lastProductPosition){
        servicesRightButton.classList.add("inactive")
        servicesLeftButton.classList.add("inactive")
    }

    
        
    testimonialsSlides.forEach(slide => { slide.classList.add("hide-testimonial") });

    if (width <= 930) {
        testimonialsSliderCharacteristics.modifyNumberOfProducts(1);
        testimonialsSliderCharacteristics.modifyLastProductsPosition();
    } else if (width <= 1400) {
        testimonialsSliderCharacteristics.modifyNumberOfProducts(2);
        if(testimonialsSliderCharacteristics.firstProductPosition + testimonialsSliderCharacteristics.numberOfProducts > testimonialsSlides.length-1){
            
            let overflow =testimonialsSliderCharacteristics.firstProductPosition + testimonialsSliderCharacteristics.numberOfProducts - (testimonialsSlides.length - 1); 
            testimonialsSliderCharacteristics.modifyFirstProductsPosition(testimonialsSliderCharacteristics.firstProductPosition-overflow)
        }
        testimonialsSliderCharacteristics.modifyLastProductsPosition();
    } else if(width >1400) { 
        testimonialsSliderCharacteristics.modifyNumberOfProducts(3);
        if(testimonialsSliderCharacteristics.firstProductPosition + testimonialsSliderCharacteristics.numberOfProducts > testimonialsSlides.length){
            let overflow = testimonialsSliderCharacteristics.firstProductPosition + testimonialsSliderCharacteristics.numberOfProducts - (testimonialsSlides.length - 1); 
            testimonialsSliderCharacteristics.modifyFirstProductsPosition(testimonialsSliderCharacteristics.firstProductPosition-overflow)
        }
        testimonialsSliderCharacteristics.modifyLastProductsPosition();
    }

    for (index = testimonialsSliderCharacteristics.firstProductPosition; index <= testimonialsSliderCharacteristics.lastProductPosition; index++){
        testimonialsSlides[index].classList.remove("hide-testimonial");

    }

    testimonialsRightButton.classList.add("inactive")
    testimonialsLeftButton.classList.add("inactive")

    if(index < testimonialsSlides.length )
    testimonialsRightButton.classList.remove("inactive")

    if(testimonialsSliderCharacteristics.firstProductPosition > 0)
    testimonialsLeftButton.classList.remove("inactive")

    if(testimonialsSlides.length == index){
        testimonialsRightButton.classList.add("inactive")
        testimonialsLeftButton.classList.add("inactive")
    }





}

window.addEventListener("resize", onresize);


servicesRightButton.addEventListener("click", () => {

    const { firstProductPosition, lastProductPosition, numberOfProducts } = productsSliderCharacteristics;

    if(lastProductPosition + 1< servicesSlides.length ){

        servicesSlides.forEach(slide => { slide.classList.add("hide-product") });
        servicesLeftButton.classList.remove("inactive")

        productsSliderCharacteristics.modifyFirstProductsPosition(firstProductPosition+1);
        productsSliderCharacteristics.modifyLastProductsPosition();

        for(index = productsSliderCharacteristics.firstProductPosition; index <= productsSliderCharacteristics.lastProductPosition; index++)
        servicesSlides[index].classList.remove("hide-product");
    
      

    }
     if(productsSliderCharacteristics.lastProductPosition+1 == servicesSlides.length ){
        servicesRightButton.classList.add("inactive")
    }

})


servicesLeftButton.addEventListener("click", () => {

    if(productsSliderCharacteristics.firstProductPosition  > 0){

        servicesRightButton.classList.remove("inactive")
        servicesSlides.forEach(slide => { slide.classList.add("hide-product") });

        productsSliderCharacteristics.modifyFirstProductsPosition(productsSliderCharacteristics.firstProductPosition-1);
        productsSliderCharacteristics.modifyLastProductsPosition();

        for(index = productsSliderCharacteristics.firstProductPosition; index <= productsSliderCharacteristics.lastProductPosition; index++)
        servicesSlides[index].classList.remove("hide-product");

        
      
    }
     if(productsSliderCharacteristics.firstProductPosition == 0){
        servicesLeftButton.classList.add("inactive")
    }

})

/////////////////////////////////////////





testimonialsRightButton.addEventListener("click", () => {

    const { firstProductPosition, lastProductPosition, numberOfProducts } = testimonialsSliderCharacteristics;

    if(lastProductPosition + 1< testimonialsSlides.length ){

        testimonialsSlides.forEach(slide => { slide.classList.add("hide-testimonial") });
        testimonialsLeftButton.classList.remove("inactive")

        testimonialsSliderCharacteristics.modifyFirstProductsPosition(firstProductPosition+1);
        testimonialsSliderCharacteristics.modifyLastProductsPosition();

        for(index = testimonialsSliderCharacteristics.firstProductPosition; index <= testimonialsSliderCharacteristics.lastProductPosition; index++)
        testimonialsSlides[index].classList.remove("hide-testimonial");
    
      

    }
     if(testimonialsSliderCharacteristics.lastProductPosition+1 == testimonialsSlides.length ){
        testimonialsRightButton.classList.add("inactive")
    }

})


testimonialsLeftButton.addEventListener("click", () => {

    if(testimonialsSliderCharacteristics.firstProductPosition  > 0){

        testimonialsRightButton.classList.remove("inactive")
        testimonialsSlides.forEach(slide => { slide.classList.add("hide-testimonial") });

        testimonialsSliderCharacteristics.modifyFirstProductsPosition(testimonialsSliderCharacteristics.firstProductPosition-1);
        testimonialsSliderCharacteristics.modifyLastProductsPosition();

        for(index = testimonialsSliderCharacteristics.firstProductPosition; index <= testimonialsSliderCharacteristics.lastProductPosition; index++)
        testimonialsSlides[index].classList.remove("hide-testimonial");

        
      
    }
     if(testimonialsSliderCharacteristics.firstProductPosition == 0){
        testimonialsLeftButton.classList.add("inactive")
    }

})


onresize();