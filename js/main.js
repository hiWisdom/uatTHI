
try {




// window.onload=function(){








//     // function slideTouchFunction() {
    
//     //     const elViewCon = document.querySelector(".c_main_0");
//     //     const el = document.querySelectorAll('.c_slide_container');
//     //     const lilen = el[1].length - 1;
//     //     let conWidth = elViewCon.clientWidth;
//     //     let leftData = parseInt(el[0].style.left);
    
    
//     //     const pointer = {}; //{start:0, end:0, gap:0};
//     //     let SLIDE_COUNT = 0;
//     //     let PERMISSION = true;
//     //     let TIMED = 500;
    
//     //     elViewCon.style.overflowX = "hidden";
//     //     el[0].style.marginLeft = 0;
//     //     el[0].style.position = "relatve";
//     //     el[0].style.left = 0;
//     //     el[0].style.transition = "left" + TIMED + "ms linear";
    
    
//     //     const fnSlideMove = () => {
    
//     //         if(PERMISSION) {
    
//     //             PERMISSION = false;
    
//     //             if (pointer.gap >= 100 && SLIDE_COUNT < lilen){
//     //                 SLIDE_COUNT +=1;
//     //             }
    
//     //             else if(pointer.gap <= -100 && SLIDE_COUNT > 0 ){
//     //                 SLIDE_COUNT -=1;
//     //             }
    
//     //             el[0].style.left = -100 * SLIDE_COUNT + '%';
//     //             setTimeout(()=> {PERMISSION = true;}, TIMED);
//     //         }
//     //     };
    
//     //     elViewCon.addEventListener('touchstart', (e) => {
//     //         console.log("Hello", e.changedTouches[0].pageX);
//     //         pointer.start = e.changedTouches[0].pageX;
//     //         leftData = parseInt(el[0].style.left);
//     //     });
      
//     //     elViewCon.addEventListener('touchmove', (e) => {
//     //         let _newPointer = e.changedTouches[0].pageX;
//     //         let _pointerMove = pointer.start - _newPointer;
//     //         let movePer = parseInt(_pointerMove / conWidth * 100);
//     //         let moverPx = leftData - movePer;
    
//     //         // if(SLIDE_COUNT !== 0 && SLIDE_COUNT !== lilen) {
//     //         //     el[0].style.left = (leftData - movePer) + '%';
//     //         // }
    
//     //         let firstLocationCheck = SLIDE_COUNT === 0 && _pointerMove > 0;
//     //         let lastLocationCheck = SLIDE_COUNT !== lilen && _pointerMove < 0;
    
//     //         if(firstLocationCheck || lastLocationCheck) {
//     //             el[0].style.left = (leftData - movePer) + '%';
//     //         }
    
//     //         else if(SLIDE_COUNT !== 0 && SLIDE_COUNT !== lilen) {
//     //             el[0].style.left = (leftData - movePer) + '%';
//     //         }
            
//     //     });
    
//     //     elViewCon.addEventListener('touchend', (e)=> {
    
//     //         console.log("Touch End", e.changedTouches[0].pageX);
//     //         pointer.end = e.changedTouches[0].pageX;
    
//     //         pointer.gap = pointer.start - pointer.end;
//     //         console.log(pointer);
//     //         fnSlideMove();
//     //     });
    
    
    
    
//     // };
//     // slideTouchFunction();
    
    

// }




// function loadHistButtons() {

//     var cMedicalSpecialistsPostedTimesButton = document.getElementsByClassName("c_medical_specialists_posted_times_button");

//     window.onload = function(){
        
       
//             const medicalPostedSourcesArticle = document.querySelector(".c_medical_specialists_posted_times_sources_button");
//             const medicalPostedHistoryArticle = document.querySelector(".c_medical_specialists_posted_times_history_button");

            
//             medicalPostedSourcesArticle.addEventListener("click", ()=> {

//                 var x = document.querySelector(".c_article_sources_div");

//                 if (x.style.display === "none") {
//                 x.style.display = "block";
//                 } 
                
//                 else {
//                 x.style.display = "none";
//                 }

//             });

            

//             medicalPostedHistoryArticle.addEventListener("click", ()=> {

//                 var x = document.querySelector(".c_article_history_div");

//                 if (x.style.display === "none") {
//                 x.style.display = "block";
//                 } 
                
//                 else {
//                 x.style.display = "none";
//                 }

//             });
    
//     };
// }
// loadHistButtons();














    
    function websitePageOnload() {

        var headerLoading = document.querySelector("header"),
        mainLoading = document.querySelector("main"),
        footerLoading = document.querySelector("footer");
    
    
        headerLoading.style.display = "none";
        mainLoading.style.display = "none";
        footerLoading.style.display = "none";
    
    
    
    
        var overlay = document.querySelector(".overlay");
        window.addEventListener('load', function () {
            overlay.style.display = "none";
            headerLoading.style.display = "block";
            mainLoading.style.display = "block";
            footerLoading.style.display = "block";
        });
    
    }
    websitePageOnload();





//website loading event





window.onload = function() {
    

//c_slide_show_script
    function c_slideShows() {

        // get the slides containers
        let slides = document.querySelectorAll('.c_slide_container');
        let index = 0;

        // get the slides buttons
        document.querySelector('#c_prev').addEventListener('click',previousSlide);
        document.querySelector('#c_next').addEventListener('click',nextSlide);

        // next function 
        function nextSlide() {
            slides[index].classList.remove('active');
            index = (index + 1 ) % slides.length;
            slides[index].classList.add('active');
        }

        //previous function 
        function previousSlide() {
            slides[index].classList.remove('active');
            index = (index - 1 + slides.length) % slides.length;
            slides[index].classList.add('active');
        }

        setInterval(nextSlide, 7000);
        
    }
    c_slideShows();
//c_slide_show_script


//accordion programming starts

function c_Accordion_Function(e) {

    function accordionLoading(website) {

        var accordion = document.querySelectorAll(".c_menu_accordion");

        if(website.matches) {

            for (i = 0; i < accordion.length; i++) {
                accordion[i].addEventListener("click", function() {
                this.classList.toggle("active");
                const panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                panel.style.display = "none";
                } else {
                panel.style.display = "block";
                }
            });
            }
            
        }   

    }

    const accordionLoad = window.matchMedia("(max-width: 850px)");

    accordionLoading(accordionLoad);

    accordionLoad.addListener(accordionLoading);
}
c_Accordion_Function();
    
//accordion programming ends






// function disableNavBarHREF() {

//     function navbarHref(website) {

//         if(!website.matches) {
//             document.querySelector(".c_menu_options_home").href="javascript:void(0)";
//             document.querySelector(".c_menu_options_whoweare").href="javascript:void(0)";
//             document.querySelector(".c_menu_options_contact").href="javascript:void(0)";
//             document.querySelector(".c_menu_options_blog").href="javascript:void(0)";
//         } 

//         else {
//             document.querySelector(".c_menu_options_home").href="javascript:void(0)";
//             document.querySelector(".c_menu_options_whoweare").href="javascript:void(0)";
//             document.querySelector(".c_menu_options_contact").href="javascript:void(0)";
//             document.querySelector(".c_menu_options_blog").href="javascript:void(0)";
//         }

//     }

//     var hrefLink = window.matchMedia("(max-width: 850px)");

//     navbarHref(hrefLink);

//     hrefLink.addListener(navbarHref);

// }
// disableNavBarHREF();




//sticky header/navigation

function websiteHeaderRemainSticky() {
      
    
        function c_navbarMedia_Function(e) {


            function navbarMedia_Function_Loading(website) {

                const navbar = document.querySelector(".c_header_navbar");
                const navbarImage = document.querySelector(".c_menu_header_image_logo");
                const navBarCustomIconsOne = document.querySelector(".c_bar1");
                const navBarCustomIconsTwo = document.querySelector(".c_bar2");
                const navBarCustomIconsThree = document.querySelector(".c_bar3");
                const navBarCustomContainer = document.querySelector(".c_checkbox");
                const navBarSearch = document.querySelector(".c_search_container");
                const sticky = navbar.offsetTop;
                // const cMenuAccordionP = document.querySelectorAll(".c_menu_accordion > a > p");

                        if(website.matches) {

                            window.onload = document.addEventListener("scroll", function(){
                                
                                if (window.pageYOffset > 10 && window.pageYOffset >= sticky) {
                                    navbar.classList.add("sticky");
                                    navbar.style.height = "60px";
                                    navbar.style.backgroundColor = "white";
                                    navbar.style.transitionProperty = "all";
                                    navbar.style.transitionDuration = "2s";
                                    navbar.style.transitionTimingFunction = "ease-in-out";
                                    navbarImage.style.transitionProperty = "all";
                                    navbarImage.style.transitionDuration = "2s";
                                    navbarImage.style.transitionTimingFunction = "ease-in-out";
                                    navbarImage.style.width = "120px";
                                    navbarImage.style.left = "20%";
                                    navBarCustomIconsOne.style.marginTop = "-2.2px";
                                    navBarCustomIconsOne.style.width = "32.5px";
                                    navBarCustomIconsOne.style.height = "3px";
                                    navBarCustomIconsTwo.style.width = "32.5px";
                                    navBarCustomIconsTwo.style.height = "3px";
                                    navBarCustomIconsThree.style.width = "32.5px";
                                    navBarCustomIconsThree.style.height = "3px";
                                    navBarCustomIconsOne.style.transitionProperty = "all";
                                    navBarCustomIconsOne.style.transitionDuration = "2s";
                                    navBarCustomIconsOne.style.transitionTimingFunction = "ease-in-out";
                                    navBarCustomIconsTwo.style.transitionProperty = "all";
                                    navBarCustomIconsTwo.style.transitionDuration = "2s";
                                    navBarCustomIconsTwo.style.transitionTimingFunction = "ease-in-out";
                                    navBarCustomIconsThree.style.transitionProperty = "all";
                                    navBarCustomIconsThree.style.transitionDuration = "2s";
                                    navBarCustomIconsThree.style.transitionTimingFunction = "ease-in-out";
                                } 

                                else {
                                    navbar.classList.remove("sticky");
                                    navbar.style.borderTop = "none";
                                    navbar.style.height = "70px";
                                    navbarImage.style.left = "10%";
                                    navbarImage.style.width = "150px";
                                    navbar.style.backgroundColor = "white";
                                    navbar.style.transitionProperty = "all";
                                    navbar.style.transitionDuration = "2s";
                                    navbar.style.transitionTimingFunction = "ease-in-out";
                                    navbarImage.style.transitionProperty = "all";
                                    navbarImage.style.transitionDuration = "2s";
                                    navbarImage.style.transitionTimingFunction = "ease-in-out";
                                    navBarCustomIconsOne.style.marginTop = "0px";
                                    navBarCustomIconsOne.style.width = "40px";
                                    navBarCustomIconsOne.style.height = "5px";
                                    navBarCustomIconsTwo.style.width = "40px";
                                    navBarCustomIconsTwo.style.height = "5px";
                                    navBarCustomIconsThree.style.width = "40px";
                                    navBarCustomIconsThree.style.height = "5px";
                                    navBarCustomIconsOne.style.transitionProperty = "all";
                                    navBarCustomIconsOne.style.transitionDuration = "2s";
                                    navBarCustomIconsOne.style.transitionTimingFunction = "ease-in-out";
                                    navBarCustomIconsTwo.style.transitionProperty = "all";
                                    navBarCustomIconsTwo.style.transitionDuration = "2s";
                                    navBarCustomIconsTwo.style.transitionTimingFunction = "ease-in-out";
                                    navBarCustomIconsThree.style.transitionProperty = "all";
                                    navBarCustomIconsThree.style.transitionDuration = "2s";
                                    navBarCustomIconsThree.style.transitionTimingFunction = "ease-in-out";
                                }
                            });

                        }

                    //     else {


                    //         document.addEventListener("scroll", function(){


                    //         if (window.pageYOffset > 10 && window.pageYOffset >= sticky) {

                    //             navbar.classList.add("sticky");
                    //             navbar.style.height = "60px";
                    //             navbar.style.backgroundColor = "white";
                    //             navbar.style.transitionProperty = "all";
                    //             navbar.style.transitionDuration = "2s";
                    //             navbar.style.transitionTimingFunction = "ease-in-out";
                    //             navbar.style.transitionTimingFunction = "ease-in-out";
                    //             navbarImage.style.transitionProperty = "all";
                    //             navbarImage.style.transitionDuration = "2s";
                    //             navbarImage.style.transitionTimingFunction = "ease-in-out";
                    //             navbarImage.style.width = "140px";
                    //             navbarImage.style.left = "60%";
                    //             // navBarSearch.style.marginTop = "-0.9px";
                    //             // navBarSearch.style.transitionProperty = "all";
                    //             // navBarSearch.style.transitionDuration = "2s";
                    //             // navBarSearch.style.transitionTimingFunction = "ease-in-out";
                    //             // cMenuAccordionP.style.color = "gold";

                    //             let navBarOptions = document.querySelectorAll(".c_menu_accordion");
                    //             let i;

                    //             for(i = 0; i < navBarOptions.length; i++){                                    
                    //                 navBarOptions[i].style.height = "50px";
                    //                 navBarOptions[i].style.transitionDuration = "2s";
                    //                 navBarOptions[i].style.transitionTimingFunction = "ease-in-out";
                    //             }

                    //         } 
                            

                    //         else {

                    //             navbar.classList.remove("sticky");
                    //             navbar.style.borderTop = "none";
                    //             navbar.style.height = "80px";
                    //             navbar.style.backgroundColor = "white";
                    //             navbar.style.transitionProperty = "all";
                    //             navbar.style.transitionDuration = "2s";
                    //             navbar.style.transitionTimingFunction = "ease-in-out";
                    //             navbarImage.style.left = "20%";
                    //             navbarImage.style.width = "200px";
                    //             navbarImage.style.transitionProperty = "all";
                    //             navbarImage.style.transitionDuration = "2s";
                    //             navbarImage.style.transitionTimingFunction = "ease-in-out";
                    //             navbarImage.style.transitionProperty = "all";

                                
                    //             // navBarSearch.style.marginTop = "1%";
                    //             // navBarSearch.style.transitionProperty = "all";
                    //             // navBarSearch.style.transitionDuration = "2s";
                    //             // navBarSearch.style.transitionTimingFunction = "ease-in-out";
                                    
                    //             let navBarOptions = document.querySelectorAll(".c_menu_accordion");
                    //             let i;
                    //             for(i = 0; i < navBarOptions.length; i++){                                    
                    //                 navBarOptions[i].style.height = "67px";
                    //                 navBarOptions[i].style.transitionDuration = "2s";
                    //                 navBarOptions[i].style.transitionTimingFunction = "ease-in-out";
                    //             }
                                

                    //         }

                    //         });
                
                    //    }
        
            }

        
            const websiteLogoMediaQueryF = window.matchMedia("(max-width: 850px)");
    
            navbarMedia_Function_Loading(websiteLogoMediaQueryF);
        
            websiteLogoMediaQueryF.addListener(navbarMedia_Function_Loading);

        }

        c_navbarMedia_Function();

     
}
websiteHeaderRemainSticky();
//sticky header/navigation









//date update start
function upDateWebsiteDateYear() {

    const updatedTime = document.querySelector('.date');
    var newTime = new Date();
    const newShortTime = newTime.getFullYear();
    updatedTime.innerHTML = newShortTime;

}
upDateWebsiteDateYear();
//date update ends




//load more articles function 
function loadMoreArticlesFunction() {
    
    var cArticlesColumn = document.querySelectorAll(".c_articles_column");
    var cArticlesColumnButton = document.querySelector(".c_articles_load_button");

    var currentimg = 3;
    cArticlesColumnButton?.addEventListener("click", function () {
        for (var i = currentimg; i < currentimg + 3; i++) {
            if (cArticlesColumn[i]) {
                cArticlesColumn[i].style.display = "block";
            }
        }

        currentimg += 3;
    });
       
}
loadMoreArticlesFunction();
//load more articles function




//Scroll toTop Button script begins//
function backToTheTop() {

    var toTop = document.querySelector(".c_back_to_top");
    window.addEventListener("scroll", ()=>{
    if (window.pageYOffset > 100) {
        toTop.classList.add("active");
    } else {
        toTop.classList.remove("active");
    }
    
    
    });

}
backToTheTop();
//Scroll toTop Button script ends//




//onScroll animation script begins//
function onScrollAnimation() {

    var animationItems = document.querySelectorAll(".c_main_0_A_header");

    window.addEventListener("scroll", ()=>{

        const triggerBotton = window.innerHeight / 5 * 4;

        animationItems.forEach( (items) => {
            const itemsTop = items.getBoundingClientRect().top;

        if (itemsTop < animationItems) {
            box.classList.add("show");
        } 
        else {
            box.classList.remove("show");
        }
        });

    
    
    });

}
onScrollAnimation();
//onScroll animation script ends//









//frequently asked question js
function faqFunction() {

    var acc = document.getElementsByClassName("c_faq_accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("editIcons");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
        } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
        } 
    });
    }

}
faqFunction();



//our team dropdown js 
function ourTeamAccordion() {

    var acc = document.getElementsByClassName("c_about_our_team_accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("ourTeamIcons");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
            panel.style.transitionProperty = "all";
            panel.style.transitionDuration = ".5s";
            panel.style.transitionTimingFunction = "ease-in-out";
          } else {
            panel.style.display = "block";
            panel.style.transitionProperty = "all";
            panel.style.transitionDuration = ".5s";
            panel.style.transitionTimingFunction = "ease-in-out";
          }
    });
    }

}
ourTeamAccordion();


//modal advert js

function modalAds() {

    // Get the modal
    var modal = document.getElementById("c_modal_container");

    // Get the <span> element that closes the modal
    var span = document.querySelector(".c_close_modal");

    // When the modal automatically loads 
    function displayModal() {
    modal.style.display = "block";
    // modal.style.animationName = "modalEffect";
    // modal.style.animationIterationCount = "infinite";
    // modal.style.animationTimingFunction = "ease-in-out";
    // modal.style.animationDuration = ".2s";
    // modal.style.transitionProperty = "all";
    // modal.style.transitionDuration = ".10s";
    // modal.style.transitionTimingFunction = "ease-in-out";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }

    // setInterval(displayModal,13000);

}
modalAds();



function loadAPICountry() {

    

    document.addEventListener('DOMContentLoaded', ()=>{
    
        const countryCodeDropDown = document.querySelector("#c_tel_country_code");
    
        fetch('https://restcountries.com/v2/all').then(res => {
        return res.json();
        }).then(data => {
        let output = "";
        data.forEach(country => {
            console.log(country.callingCodes);
            output +=`<option value="${country.callingCodes}">+ ${country.callingCodes}</option>`;
        })
        countryCodeDropDown.innerHTML = output;
        }).catch(err => {
        console.log(err);
        })
    
    });

}

loadAPICountry();



function signUp_Profile_Picture() {

    const image_input = document.querySelector("#c_create_an_account_userPicture");
    var uploaded_image = "";

    image_input.addEventListener("change", function(){

        var reader = new FileReader();
        reader.addEventListener("load", function(){
            uploaded_image = reader.result;
            document.querySelector("#c_display_upload_avatar").style.backgroundImage = `url(${uploaded_image}) `;
            document.querySelector("#c_display_upload_avatar").style.backgroundPosition = "center";
            document.querySelector("#c_display_upload_avatar").style.backgroundRepeat = "no-repeat";
            document.querySelector("#c_display_upload_avatar").style.backgroundSize = "contain";
            document.querySelector("#c_cancel_picture").style.display="block";
            document.querySelector("#c_confirm_picture").style.display = "block";
            document.querySelector("#c_profile_image_icon").style.display="none";
        });
        reader.readAsDataURL(this.files[0]);
    });

    document.querySelector("#c_cancel_picture").onclick = function() {
            document.querySelector("#c_create_an_account_userPicture").value="";
            document.querySelector("#c_profile_image_icon").style.display="block";
            document.querySelector("#c_display_upload_avatar").style.backgroundImage = "none";
            document.querySelector("#c_display_upload_avatar").style.backgroundPosition = "center";
            document.querySelector("#c_display_upload_avatar").style.backgroundRepeat = "no-repeat";
            document.querySelector("#c_display_upload_avatar").style.backgroundSize = "contain";
            document.querySelector("#c_cancel_picture").style.display="none";
            document.querySelector("#c_confirm_picture").style.display = "none";
    }

    document.querySelector("#c_confirm_picture").onclick = function() {
        if (confirm("Please confirm profile picture!")) { 
            document.querySelector("#c_cancel_picture").style.display="none";
        } 
        
        else {
            document.querySelector("#c_cancel_picture").style.display="block";
            document.querySelector("#c_confirm_picture").style.display = "block";
        }
    }


}
signUp_Profile_Picture();






























































































































































































































































































































































































































}





































}

catch(err) {

    document.querySelector("body").innerHTML = `<p class="c_error_message"> Dear Users/ Customers,` + "<br>"+ "<br>"  + `Thank you for visiting our website!` + "<br>" +  "<br>" + "<br>" + "&nbsp" + "&nbsp" +  "&nbsp" +  ` 
    'This could be a website syntax, type, object, event, date or any javaScript/ programmed software engine error which can easily be resolved, please kindly contact our developers and engineers on <a href="tel:+2347052223261">+234 705 222 3261 </a> or email at support@timobhealthinternational.com to resolve this error quickly, Thank you!. In the mean time you can always contact <a href="">+234 803 576 8694</a>, <a href="">+234 803 576 8694</a>, <a href="">+234 741 723 4205</a> or email <a href="">info@timobhealthinternational.com</a> or <a href="">support@timobhealthinternational.com</a> for any medical advise, medical support or emergencies.  We deeply apologize for every inconviences this may have caused. Thank you for your understanding, It is very much apperciated.'

    `  + "<br>" 
    
    + "<br>" + "&nbsp" + "&nbsp" +  "&nbsp" 
    
    + "We found some computer error clue, some computer errors are : " +  "&nbsp" + err.name +  "&nbsp" + err.message +  "&nbsp" + err.stack + "<br>" + "Thank you and Best Wishes" + "</p>"
     ; 
}