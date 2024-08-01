
  
   

    <!--navigation bar close-->

    <?php  
  include("include/header.php");
  ?>
        <!--slider start-->

    <div class="slider_container">
      
            <div class="slider_image">
              <img src="jewwllarypic/sliderimg2.jpg" alt="Image 1" class="slide">
              <img src="jewwllarypic/sliderimage.jpg" alt="Image 2" class="slide">
              <img src="jewwllarypic/sliderimg3.jpg" alt="Image 3" class="slide">
            </div>
            <div class="prev" onclick="changeSlide(-1)">❮</div>
            <div class="next" onclick="changeSlide(1)">❯</div>
          </div>
        </div>
        <!--slider stop-->
        <!--explore button start -->
        <a href="gallary.php" ><button class="explorebutton">Explore Now</button></a>
        <!--explore button stop -->

<!--chat with us start -->
<div >
  <a href="https://web.whatsapp.com/"><img src="jewwllarypic/whatsappicon.png" alt="whatapp" class="whatappbutton"></a>
</div>
        <!--chat with us stop-->

<!--vendor categori-->


<div class="header">Vendor Catogories</div>

<div class="vendor_container">
 <div class="makeup">
 <a href="mackupvendors.PHP"><img src="jewwllarypic/mackup2.jpg"  class="circle"  alt="Image 1">
 <div class="message"><div class="venname">Makeup</div></div></a>

</div>

 <div class="makeup">
   <a href="weddingwear.PHP"><img src="jewwllarypic/imgd8.jpg"  class="circle"  alt="Image 1">
   <div class="message"><div class="venname">Wedding Wear</div></div></a>

   </div>
   <div class="makeup">
     <a href="djvendors.php"><img src="jewwllarypic/dj3.jpg"  class="circle"  alt="Image 1">
     <div class="message"><div class="venname">Music System</div></div></a>

     </div>
     <div class="makeup">
       <a href="decorvandor.php"> <img src="jewwllarypic/decor7.jpg"  class="circle"  alt="Image 1">
       <div class="message"><div class="venname">Decoration</div></div></a>

       </div>
       <div class="makeup">
         <a href="invetationvendor.php"> <img src="jewwllarypic/invite10.png"  class="circle"  alt="Image 1">
         <div class="message"><div class="venname">Invitation Cards</div></div></a>

         </div><div class="makeup">
           <a href="venuevendors.php"><img src="jewwllarypic/venue6.jpeg"  class="circle"  alt="Image 1">
           <div class="message"><div class="venname">Venue</div></div></a>

           </div><div class="makeup">
             <a href="jewellaryvendor.php"><img src="jewwllarypic/img6.jpg"  class="circle"  alt="Image 1">
             <div class="message"><div class="venname">Jewellery</div></div></a>
             </div>
    

           </div>
           

        

             <!--vendors close-->

               <!--message girl start -->

  <div class="message_girl_container">
   <img src="jewwllarypic/imggirls.jpg" alt="girl" class="girl">

   <div class="message_box">"Time waits for no one" <br> 
    but memories last a lifetime.
     Join us for an event filled<br>   with 
     "laughter, friendship, and unforgettable <br >experiences."
  <a href="contact.php"> <button class="contact_button">Contact Us</button></a>
 </div>  </div>


               <!--message girl close-->


                  <!-- trusted vendors start-->


  <div class="headertrust">Trusted Vendors</div>
 <div class="tersted_vendors_container">
   <div class="imgtrust">
   <a href="photography.php"><img src="jewwllarypic/camera.png" class="boxtrust">
   <div class="trustname"><div class="mgs">Photography</div></div></a>
 </div>
 <div class="imgtrust">
   <a href="weddingwear.php"><img src="jewwllarypic/dress.png"  class="boxtrust" >
   <div class="trustname"><div class="mgs">Wedding Wear</div></div></a>
 </div>
 <div class="imgtrust">
   <a href="jewellaryvendor.php"> <img src="jewwllarypic/jewellery.png" class="boxtrust" >
   <div class="trustname"><div class="mgs">Jewellery</div></div></a>
 </div>
 <div class="imgtrust">
   <a href="mackupvendors.php"> <img src="jewwllarypic/makeup.png" class="boxtrust">
   <div class="trustname"> <div class="mgs">MakeUp Artist</div></div></a>
 </div>

 </div>

                   <!-- trusted vendors stop-->
                   <!-- follow section start -->

 <div>
   <div class="header">follow us on</div>
   <a href="instagram.com"><img src="jewwllarypic/instaicon.png" alt="instagram" class="follow instagram"></a>
   <a href="facebook.com"><img src="jewwllarypic/facebookicon.png" alt="facebook" class="follow facebook"></a>
   <a href="https://www.whatsapp.com/"><img src="jewwllarypic/whatsappicon.png" alt="whatapp" class="follow facebook"></a>
  <a href="twitter.com"> <img src="jewwllarypic/twittericon.png" alt="twittericon" class="follow facebook"></a>
 </div>

                   <!-- follow section start -->
                 
                   <?php  
  include("include/footer.php");
  
  ?>
<!-- js-->

<script>

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

</script>




</body>
</html>