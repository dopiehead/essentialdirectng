

// TOGGLE THE MENU ICONS CODE --- show/hide the nav menu\
// access the document dom  upon loading the screen using DomContentLoader and access the variable using querySelector
document.addEventListener('DOMContentLoaded', function () {
    var menuIcon = document.querySelector('#menu-icon');
    var sidebar = document.querySelector('#sidebar');
    var closeButton = document.querySelector('#close-button');

    // Function to toggle the sidebar visibility 
    function toggleSidebar() {
        sidebar.classList.toggle('sidebar-open');
    }

    // Function to close the sidebar when the close button is clicked
    function closeSidebar() {
        sidebar.classList.remove('sidebar-open');
    }

    // Add a click event listener to the menu icon to open the sidebar
    menuIcon.addEventListener('click', toggleSidebar);

    // Add a click event listener to the close button to close the sidebar
    closeButton.addEventListener('click', closeSidebar);
});



$(document).ready(function(){

  $("#slide_2").hide();

  $("#slide_3").hide();





   $('#slideButton').click(function() {
    
    $("#slide").slideUp(100);

    $("#slide_2").slideDown(100);

   });





   $('#slideButton2').click(function() {

    $("#slide").slideUp(100);
    
    $("#slide_2").slideUp(100);

    $("#slide_3").slideDown(100);

   }); 
        
        
 
   

   $('#previousButton2').click(function() {

    $("#slide").slideDown(100);
    
    $("#slide_2").slideUp(100);

    $("#slide_3").slideUp(100);

    

   }); 




   $('#previousButton3').click(function() {

    $("#slide").slideUp(100);
    
    $("#slide_2").slideDown(100);

    $("#slide_3").slideUp(100);

    

   }); 



});



//dashboard open/close menu


 

//Groups page

 $('#user_details').hide();

 $('#members').on('click',function(e){

  e.preventDefault();

  $("#members").addClass('btn-red');

  $("#anonymous_post").removeClass('btn-danger');

  $("#anonymous_post").removeClass('btn-red');

 $(".comment_container").hide();

  $('#user_details').toggle(100);





});



$("#anonymous_post").on('click',function(e){

  $(this).addClass('btn-red');
 
  e.preventDefault();

  $('#members').removeClass('btn-red');

  $(".comment_container").toggle(100);

  $('#user_details').hide();

});


function openModal() {
  
  var popup = document.getElementById('popup');
  popup.classList.toggle('active');
  }


  function report(){
    var popup = document.getElementById('popup-report');
    popup.classList.toggle('active');
  }



$(document).ready(function() {
    // Function to handle button clicks
    $('.button').click(function() {
      var buttonId = $(this).attr('id'); // Get the ID of the clicked button
      $('.output').append('<span id="' + buttonId + '">' + buttonId + ' &nbsp;<a id="remove-button" class="remove-button">&times;</a></span>'); // Append the ID and a remove button to the output div
      $(this).hide(); // Hide the clicked button
    });
  
    // Function to remove ID from output
    $('.output').on('click', '.remove-button', function() {
      var parentID = $(this).parent().attr('id'); // Get the ID of the parent <p> element
      $('#' + parentID).remove(); // Remove the <p> element from the output
      $('#' + parentID.replace('-output', '')).show(); // Show the corresponding button again
    });
  }); 


  $(document).ready(function() {

    $(".btn-person").on('click',function(e) {
    
    $("#persons").toggle();
  
    });
  
    
  });

  $(document).ready(function() {

    $(".btn-person-mobile").on('click',function(e) {
    
    $("#persons-mobile").toggle();
  
    });
  
    
  });



$('.trending-post-section').flickity({
  // options
  cellAlign: 'left',
  contain: true,
  prevNextButtons: false,
pageDots: false
});



$('.highlight').flickity({
  // options
  cellAlign: 'left',
  contain: true,
  prevNextButtons: false,
pageDots: false
});




$('#menu').flickity({
  // options
  cellAlign: 'left',
  contain: true,
  prevNextButtons: false,
pageDots: false
});


$('#main').flickity({
  // options
  cellAlign: 'left',
  contain: true,
  prevNextButtons: false,
pageDots: false
});



$('.main').flickity({
  // options
  cellAlign: 'left',
  contain: true,
  prevNextButtons: false,
pageDots: false
});





$('.video').flickity({
  // options
  cellAlign: 'left',
  contain: true,
  prevNextButtons: false,
pageDots: false
});



$('.businesses').flickity({
  // options
  cellAlign: 'left',
  contain: true,
  prevNextButtons: false,
pageDots: false
});



$('.menu_wanted_container').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    prevNextButtons: false,
pageDots: false
  });


  $('.businesses').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    prevNextButtons: false,
  pageDots: false
  });
 


$('#draggable').flickity({
  // options
  cellAlign: 'left',
  contain: true,
  prevNextButtons: false,
pageDots: false
});


 $(document).ready(function() {
        // Function to animate the counter
        function animateValue(id, start, end, duration) {
            var range = end - start;
            var current = start;
            var increment = end > start ? 1 : -1;
            var stepTime = Math.abs(Math.floor(duration / range));
            var obj = $('#' + id); // Use jQuery selector to get element by ID
            var timer = setInterval(function() {
                current += increment;
                obj.text(current); // Update text using jQuery
                if (current == end) {
                    clearInterval(timer);
                }
            }, stepTime);
        }

        // Call the function to start animations for each counter
        animateValue("counter1", 0, 101, 3000); // Example: Count from 0 to 100 in 3 seconds
        animateValue("counter2", 0, 80, 4000); // Example: Count from 50 to 200 in 4 seconds
        animateValue("counter3", 0, 150, 2500); // Example: Count from 10 to 50 in 2.5 seconds
         animateValue("counter4", 0, 85, 2500); 
          animateValue("counter5", 0, 110, 2500); 
           animateValue("counter6", 0, 130, 2500); 
            animateValue("counter7", 0, 165, 2500); 
             animateValue("counter8", 0, 145, 2500); 
              animateValue("counter9", 0, 124, 2500); 
               animateValue("counter10", 0, 105, 2500); 
            animateValue("counter11", 0, 142, 2500); 
             animateValue("counter12", 0,145, 2500); 
              animateValue("counter13", 0, 106, 2500); 
            animateValue("counter14", 0, 102, 2500); 
             animateValue("counter15", 0, 179, 2500); 
              animateValue("counter16", 0, 50, 2500); 
            animateValue("counter17", 0, 20, 2500); 
             animateValue("counter18", 0, 90, 2500); 

    });

//document.documentElement.style.overflow = 'hidden';




    
$(document).ready(function() {
  
  $(".btn-accordion").each(function() {
    $(this).on('click', function() {
  $(this).next(".accordion-dropdown").toggleClass("active-accordion");
    });
  });

});




// Playing around with my code



// end of toggling the nav menu




// FORGOT PASSWORD JAVASCRIPT TOOGLE JS CODE
function toggleResetOption() {
    const resetOption = document.getElementById("reset-option").value;
    const chooseOption = document.querySelector(".choose-option");
    const emailOption = document.querySelector(".email-option");
    const phoneOption = document.querySelector(".phone-option");
    const btnSendLink = document.querySelector(".btn-send-otp");
    
    // checking for the options selected by the user

    if (resetOption === "email") {
        emailOption.style.display = "block";
        phoneOption.style.display = "none";
        chooseOption.style.display = 'none';
        btnSendLink.style.display = "block";

    } else if (resetOption === "phone") {
        emailOption.style.display = "none";
        phoneOption.style.display = "block";
        chooseOption.style.display = 'none';
        btnSendLink.style.display = "block";

    } else {
        chooseOption.style.display = "block";
        phoneOption.style.display = "none";
        emailOption.style.display = "none";
        btnSendLink.style.display = "none";
       
    }
}

function sendResetLink() {
    // Implement the logic to send the reset link based on the selected option (email or phone).
    const resetOption = document.getElementById("reset-option").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone-number").value;

    if (resetOption === "email") {
        // Send reset link to the provided email address (email variable).
        alert(` Developer Adewale testing the Reset link sent to email: ${email}`);
    } else {
        // Send reset link to the provided phone number (phone variable).
        alert(`Developer Adewale testing the Reset link sent to phone number: ${phone}`);
    }
}

//   WORKING ON THE USER DASHBOARD --- SHOW AND UPDATE THE SWITCH ACCOUNT FROM THE DASHBOARD
function showSwitchAccountAlert() {
    const switchAccountAlert = document.getElementById('switch-account-alert');
    switchAccountAlert.style.display = 'block';

    // Attach a click event listener to the Cancel button
    const cancelButton = switchAccountAlert.querySelector('.cancel-button');
    cancelButton.addEventListener('click', closeSwitchAccountAlert);
}

function switchAccount() {
    const userRadio = document.getElementById('user-radio');
    const businessRadio = document.getElementById('business-radio');

    if (userRadio.checked) {
        // Redirect to the user account page
        window.location.href = 'profile';
    } else if (businessRadio.checked) {
        // Redirect to the business account page
        window.location.href = 'business_account_page_url_here';
    }

    // Close the custom alert
    closeSwitchAccountAlert();
}

function closeSwitchAccountAlert() {
    const switchAccountAlert = document.getElementById('switch-account-alert');
    switchAccountAlert.style.display = 'none';
}

// Add this function to show the alert when clicking "Switch Account"
document.querySelector('.switch-account').addEventListener('click', showSwitchAccountAlert);











// playing around with the code for loading the content from the db in the dashboard
function loadContent(sectionId) {
    // Get the content of the selected section
    const content = document.getElementById(sectionId);

    // Get the dashboard section
    const dashboardSection = document.getElementById('dashboard-section');

    // Clear the content of the dashboard section
    dashboardSection.innerHTML = '';

    // Append the selected content to the dashboard section
    dashboardSection.appendChild(content.cloneNode(true));
}






