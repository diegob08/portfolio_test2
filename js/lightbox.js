(function () {
 var theImages = document.querySelectorAll('.image-holder'),

     appliedClass;

     function changeElements() {
    
       let subImages = document.querySelector('.subImagesContainer');
       let objectIndex = dynamicContent[this.id];


       while (subImages.firstChild) {
         subImages.removeChild(subImages.firstChild);
       }

       objectIndex.images.forEach(function(element, index){
         let newSubImg = document.createElement('img');


         newSubImg.classList.add('thumb');

         newSubImg.src = "images/" + objectIndex.images[index];


         newSubImg.dataset.index = index;


         newSubImg.addEventListener('click', function(){popLightbox(index, objectIndex);})


         subImages.appendChild(newSubImg);
       });

       theSubhead.classList.remove(appliedClass);
       theHeader.classList.remove(appliedClass);
