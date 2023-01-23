



document.querySelector(".c_content_like_button").addEventListener("click", function() {

   const clicked = false;

      if(localStorage.clickcount) {
         localStorage.clickcount = Number(localStorage.clickcount) + 1;
         document.querySelector(".c_liked_icon").innerHTML=`<i class="fas fa-thumbs-up"></i>`;
      }
      else {
         localStorage.clickcount = 1;
      }

      document.querySelector(".c_user_content_like_count").innerHTML = localStorage.clickcount;
      console.log(localStorage.clickcount);
   });
//website socail content like button functionality

   // var cLikedIcon = document.querySelector(".c_liked_icon");
   // let clicked = false;



//  function checkIfButtonsAreWorking() {

//    let likedIcon = document.querySelector(".c_liked_icon");
//    var likedCount = document.querySelector(".c_user_content_like_count");
//    let clicked = false;


//    document.querySelector(".c_content_like_button").addEventListener("click", function(){

      // if(!clicked) {
      //    clicked = true;
      //    likedCount.textContent++;
      //    likedIcon.innerHTML = `<i class="fas fa-thumbs-up">`;
      // }

      // else {
      //    clicked = false;
      //    likedCount.textContent--;
      //    likedIcon.innerHTML = `<i class="far fa-thumbs-up">`;

      // }

//       saveLikedInLocalStorage();


//    });

//   window.onload = function() {

//    var preventAct = function preventDefaultAct() {
//       this.preventDefault;
//    }

//    preventAct = ()=> {
//       function saveLikedInLocalStorage() {
//          if(localStorage.counter) {
//             localStorage.counter = Number(localStorage.counter) + 1;
//          }
//          else {
//             localStorage.counter = 1;
//          }
   
//          function showCounters() {
//             likedCount.innerHTML = localStorage.counter;
//             console.log(localStorage.counter);
//          }
//          showCounters();
//       }
   
//       saveLikedInLocalStorage();
//    }

//    preventAct();
//   }    
   

//  }

//  checkIfButtonsAreWorking();



// let array = [1, "turing", {c:2}, [3,4], {y:5}];
// for (let i =0; i< inputs.length; i++) {
//    if (inputs[i]==="turing") inputs.splice(i,1)
//    else console.log(inputs[i]);
// }




















//some document items changes when window scroll

// window.onscroll = function() {

   
//    var cShareButtonContainer = document.querySelector(".c_share_button_container");

//    var cSocialIconsShareLinkA = document.querySelector(".c_facebook_share_link i");
//    var cSocialIconsShareLinkB = document.querySelector(".c_twitter_share_link i");
//    var cSocialIconsShareLinkC = document.querySelector(".c_linkedin_share_link i");
//    var cSocialIconsShareLinkD = document.querySelector(".c_whatsapp_share_link i");

//    cShareButtonContainer.style.height = "0.8cm";

//    cSocialIconsShareLinkA.style.fontSize = "22px";
//    cSocialIconsShareLinkB.style.fontSize = "22px";
//    cSocialIconsShareLinkC.style.fontSize = "22px";
//    cSocialIconsShareLinkD.style.fontSize = "22px";

//    console.log("Working");

// }







/**
 * 
 * 
 *https://www.facebook.com/sharer.php?u=[post-url]
 * 
 * 
 * https://twitter.com/share?url=[post-url]&text=[post-title]&via=[via]&hashtags=[hashtags]
 * 
 * 

 https://www.linkedin.com/shareArticle?url=[post-url]&title=[post-title]
 * 



 https://api.whatsapp.com/send?text=[post-title] [post-url]
 */


 function shareContentOrArticlesLinkToSocailMedia() {

   var facebookButton = document.querySelector(".c_facebook_sharing_link")

   var linkedinButton = document.querySelector(".c_linkedin_sharing_link")

   var twitterButton = document.querySelector(".c_twitter_sharing_link")

   var whatsAppButton = document.querySelector(".c_whatsapp_sharing_link")


   function init(){
      var socialLinkImages = document.querySelector(".c_share_social_image");
      var postURL = document.location.href;
      var postTitle = "Hi Everyone, please check this out";
      var postImg = encodeURI(socialLinkImages.src);

      facebookButton.setAttribute("href", `https://www.facebook.com/sharer.php?u=${postURL}`);

      linkedinButton.setAttribute("href", `https://www.linkedin.com/shareArticle?url=${postURL}&title=${postTitle}`);

      twitterButton.setAttribute("href", `https://twitter.com/share?url=${postURL}&text=${postTitle}`);

      whatsAppButton.setAttribute("href", `https://api.whatsapp.com/send?text=${postTitle} ${postURL}`);
   }

   init();

 }
 shareContentOrArticlesLinkToSocailMedia();





function openTableOfContentModal() {
   var cTableOfContent = document.querySelector(".c_table_of_content_button");
   var cTableOfContentModal = document.querySelector(".c_table_of_content_modal");
   cTableOfContent.addEventListener("click", ()=>{
      document.querySelector(".c_table_of_content_container").style.display="block";
      cTableOfContent.style.display = "none";
      cTableOfContent.style.transitionProperty = "all";
      cTableOfContent.style.transitionDuration = "2s";
      cTableOfContent.style.transitionTimingFunction = "ease-in-out";
      
   });
}
openTableOfContentModal();

function closeTableOfContentModal() {
   
   var closeTableOfContent = document.querySelector(".c_table_of_content_close_button");
   var cTableOfContent = document.querySelector(".c_table_of_content_button");
   closeTableOfContent.addEventListener("click", ()=>{
      document.querySelector(".c_table_of_content_container").style.display="none";
      cTableOfContent.style.display = "flex";
      cTableOfContent.style.transitionProperty = "all";
      cTableOfContent.style.transitionDuration = "2s";
      cTableOfContent.style.transitionTimingFunction = "ease-in-out";
      
   });
}
closeTableOfContentModal();


//faq functions begin





            // const medicalPostedSourcesArticle = document.querySelector(".c_medical_specialists_posted_times_sources_button");
            // const medicalPostedHistoryArticle = document.querySelector(".c_medical_specialists_posted_times_history_button");

            
            // medicalPostedSourcesArticle.addEventListener("click", ()=> {

            //     var x = document.querySelector(".c_article_sources_div");

            //     if (x.style.display === "none") {
            //     x.style.display = "block";
            //     } 
                
            //     else {
            //     x.style.display = "none";
            //     }

            // });

            

            // medicalPostedHistoryArticle.addEventListener("click", ()=> {

            //     var x = document.querySelector(".c_article_history_div");

            //     if (x.style.display === "none") {
            //     x.style.display = "block";
            //     } 
                
            //     else {
            //     x.style.display = "none";
            //     }

            // });



//faq functions ends




//c_general_pages_date_update

// function cGeneralPagesUpdateDate() {

//    const cGeneralPagesDateUpdate = document.querySelectorAll('.c_general_pages_date_update');
//    const newDate = new Date();
//    cGeneralPagesDateUpdate.innerHTML = newDate;
// }

// cGeneralPagesUpdateDate();



document.addEventListener('DOMContentLoaded', ()=>{
   
   const countryCodeDropDown = document.querySelector("#c_tel_country_code");

   fetch('http://restcountries.eu/rest/v2/all').then(res => {
      return res.json();
   }).then(data => {
      let output = "";
      data.forEach(country => {
         console.log(country.callingCodes);
         // output += `<option value="${country.callingCodes}">${country.callingCodes}</option>`;
      })
      // countryCodeDropDown.innerHTML = output;
   }).catch(err => {
      console.log(err);
   })

});