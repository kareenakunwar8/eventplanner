let currentSlide = 1;

  function changeSlide(n) {
    showSlide(currentSlide += n);
  }

  function showSlide(n) {
    let slides = document.getElementsByClassName("slide");
    if (n > slides.length) {
      currentSlide = 1;
    }
    if (n < 1) {
      currentSlide = slides.length;
    }
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[currentSlide - 1].style.display = "block";
  }
  showSlide(currentSlide);



  const scrollers=document.querySelectorAll('.vendor_container');
  function addAnimation(){
    scrollers.forEach((vendor_container)=>{
      vendor_container.setAttribute("data-animated",true);
      const innercontainer=vendor_container.querySelector('.innercontainer');
      const innercontainerContent=Array.from('.innercontainer.children');
       innercontainerContent.forEach(iteam=>{
        const duplicatedItem=item.cloneNode(true)
        duplicatedItem.setAttribute('aria-hidden',true)
        innercontainer.appendChild(duplicatedItem)
       });
      
    })

  }
  addAnimation()