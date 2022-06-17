let upload_img_box = document.querySelector('.upload_img_box');
let selectedImage = document.querySelector('#selectedImage');

let image_holder = document.querySelector('.choose_image .image_holder');
let image = document.querySelector('.image_holder #image');

let convert_btn = document.querySelector('#convert_btn');


/*handle choose image event*/
upload_img_box.addEventListener("click", function(){
           selectedImage.click();
});


/*set image*/
selectedImage.addEventListener("change", function(){
const file = this.files[0];

if(file){
  const reader = new FileReader();

  upload_img_box.style.display = "none";
  image_holder.style.display = "block";

  reader.addEventListener("load", function(){
      image.setAttribute("src", this.result);
  });

  reader.readAsDataURL(file);
  convert_btn.style.pointerEvents = "auto";
  convert_btn.style.background = "#6C3483";
}
       
})


/*refresh button click*/
function refresh_page(){
  location.reload();
}



/*By DevIdeas*/