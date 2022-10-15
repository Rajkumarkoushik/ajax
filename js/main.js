var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  fixedHeader();
};
function fixedHeader() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    $("#fixheader").addClass("main-header-fixed");
  } else {
    $("#fixheader").removeClass("main-header-fixed");
  }
}

function fixedHeader() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    $("#fixheader").addClass("main-header-fixed");
  } else {
    $("#fixheader").removeClass("main-header-fixed");
  }
}

// Carousels section starts

let mainPosts = document.querySelectorAll(".main-post");
let posts = document.querySelectorAll(".post");

let i = 0;
let postIndex = 0;
let currentPost = posts[postIndex];
let currentMainPost = mainPosts[postIndex];

let progressInterval = setInterval(progress, 50); // 180

function progress() {
  if (i === 100) {
    i = -10;
    // reset progress bar
    currentPost.querySelector(".progress-bar__fill").style.width = 0;
    document.querySelector(
      ".progress-bar--primary .progress-bar__fill"
    ).style.width = 0;
    currentPost.classList.remove("post--active");

    postIndex++;

    currentMainPost.classList.add("main-post--not-active");
    currentMainPost.classList.remove("main-post--active");

    // reset postIndex to loop over the slides again
    if (postIndex === posts.length) {
      postIndex = 0;
    }

    currentPost = posts[postIndex];
    currentMainPost = mainPosts[postIndex];
  } else {
    i++;
    currentPost.querySelector(".progress-bar__fill").style.width = `${i}%`;
    document.querySelector(
      ".progress-bar--primary .progress-bar__fill"
    ).style.width = `${i}%`;
    currentPost.classList.add("post--active");

    currentMainPost.classList.add("main-post--active");
    currentMainPost.classList.remove("main-post--not-active");
  }
}

// Carousels section ends

// Enquiry form starts
const enquiryButton = document.querySelector('.enquiry-button');
const aboutEnquiryForm = document.querySelector(".about-enquiry-form");
const submitButton = document.querySelector('.submit');
const iconConatct = document.querySelector(".icon-contact");

enquiryButton.addEventListener("click", () => {
  aboutEnquiryForm.classList.toggle("form-show");
});
iconConatct.addEventListener("click", () => {
  aboutEnquiryForm.classList.toggle("form-show");
});
submitButton.addEventListener("click", () => {
  aboutEnquiryForm.classList.toggle("form-show");
});

// Enquiry form section ends



