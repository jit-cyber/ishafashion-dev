// function loadComponent(file, elementId) {
//     fetch(file)
//         .then(response => response.text())
//         .then(data => {
//             document.getElementById(elementId).innerHTML = data;
//         });
// }

// document.addEventListener('DOMContentLoaded', function() {
//     loadComponent('includes/header.html', 'header-placeholder');
//     loadComponent('includes/footer.html', 'footer-placeholder');
// });



// function loadHead() {
//     fetch('includes/head.html')
//         .then(response => response.text())
//         .then(data => {
//             document.head.innerHTML = data;
//         });
// }

// document.addEventListener('DOMContentLoaded', loadHead);

// $(document).ready(function() {
//     $('#header-placeholder').load('includes/header.html', function(response, status, xhr) {
//         if (status == "error") {
//             console.log("Error loading header: " + xhr.status + " " + xhr.statusText);
//         }
//     });
// });



//    window.addEventListener('scroll', function() {
//       const imagesRight = document.querySelectorAll('.image-right');
//       imagesRight.forEach(image => {
//         const imagePosition = image.getBoundingClientRect().top;
//         const screenPosition = window.innerHeight / 1.3;

//         if (imagePosition < screenPosition) {
//           image.classList.add('move-right');
//         } else {
//           image.classList.remove('move-right');
//         }
//       });

//       const imagesLeft = document.querySelectorAll('.image-left');
//       imagesLeft.forEach(image => {
//         const imagePosition = image.getBoundingClientRect().top;
//         const screenPosition = window.innerHeight / 1.3;

//         if (imagePosition < screenPosition) {
//           image.classList.add('move-left');
//         } else {
//           image.classList.remove('move-left');
//         }
//       });
//     });

let lastScrollTop = 0;

function handleScroll() {
  const st = window.pageYOffset || document.documentElement.scrollTop;
  const isScrollingDown = st > lastScrollTop;
  lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling

  if (isScrollingDown) {
    const imagesRight = document.querySelectorAll('.image-right');
    const imagesLeft = document.querySelectorAll('.image-left');
    const screenPosition = window.innerHeight / 1.3;

    imagesRight.forEach(image => {
      const imagePosition = image.getBoundingClientRect().top;
      if (imagePosition < screenPosition) {
        image.classList.add('move-right');
      }
    });

    imagesLeft.forEach(image => {
      const imagePosition = image.getBoundingClientRect().top;
      if (imagePosition < screenPosition) {
        image.classList.add('move-left');
      }
    });
  }
}

window.addEventListener('scroll', handleScroll);



const choiceArray = document.querySelectorAll(".choice");

let currentIndex = 0;
const intervalTime = 8000; // Interval time in milliseconds (2 seconds)
let intervalId;

const expandNextCard = () => {
    choiceArray.forEach((element) => {
        element.classList.remove("expand", "unset");
        element.classList.add('small');
    });
    const currentCard = choiceArray[currentIndex];
    currentCard.classList.remove("small");
    currentCard.classList.add('expand');

    // Update the index to point to the next card, wrapping around if necessary
    currentIndex = (currentIndex + 1) % choiceArray.length;
};

// Function to start the automatic expansion
const startInterval = () => {
    intervalId = setInterval(expandNextCard, intervalTime);
};

// Function to stop the automatic expansion
const stopInterval = () => {
    clearInterval(intervalId);
};

// Set the interval to automatically expand the next card
startInterval();

// Add event listeners for manual clicks
choiceArray.forEach((card, index) => {
    card.addEventListener("click", () => {
        // Manually update the currentIndex to the clicked card's index
        currentIndex = index;
        expandNextCard();
    });

    // Pause the interval on hover
    card.addEventListener("mouseenter", stopInterval);

    // Resume the interval when not hovering
    card.addEventListener("mouseleave", startInterval);
});

// document.addEventListener('DOMContentLoaded', () => {
//     // Get all menu items
//     const menuItems = document.querySelectorAll('.menu-item ');

//     menuItems.forEach(item => {
//         item.addEventListener('click', (event) => {
//             // Prevent the default action (which might cause a page reload)
//             // event.preventDefault();

//             // Remove 'active' class from all items
//             menuItems.forEach(i => i.classList.remove('active'));

//             // Add 'active' class to the clicked item
//             item.classList.add('active');
//         });
//     });
// });


// document.addEventListener('DOMContentLoaded', () => {
//     // Get all <li> elements with the 'menu-item' class
//     const menuItems = document.querySelectorAll('.menu-item');

//     // Get the current URL hash (e.g., #home, #about)
//     const currentHash = window.location.hash;

//     // If there is a hash, add the 'active' class to the corresponding <li>
//     if (currentHash) {
//         const activeItem = document.querySelector(`.menu-item a[href$="${currentHash}"]`);
//         if (activeItem) {
//             activeItem.parentElement.classList.add('active');
//         }
//     }

//     menuItems.forEach(item => {
//         item.addEventListener('click', () => {
//             // Remove 'active' class from all <li> elements
//             menuItems.forEach(i => i.classList.remove('active'));

//             // Add 'active' class to the clicked <li>
//             item.classList.add('active');
//         });
//     });
// });

// document.addEventListener('DOMContentLoaded', () => {
//     // Get all <li> elements with the 'menu-item' class
//     const menuItems = document.querySelectorAll('.menu-item');

//     // Get the active item ID from local storage
//     const activeItemId = localStorage.getItem('activeMenuItem');

//     // If an active item ID is found, add the 'active' class to the corresponding <li>
//     if (activeItemId) {
//         const activeItem = document.getElementById(activeItemId);
//         if (activeItem) {
//             activeItem.classList.add('active');
//         }
//     }

//     menuItems.forEach(item => {
//         item.addEventListener('click', () => {
//             // Remove 'active' class from all <li> elements
//             menuItems.forEach(i => i.classList.remove('active'));

//             // Add 'active' class to the clicked <li>
//             item.classList.add('active');

//             // Store the clicked item's ID in local storage
//             localStorage.setItem('activeMenuItem', item.id);
//         });
//     });
// });




document.addEventListener('DOMContentLoaded', () => {
    // Get the current URL path and remove leading slashes
    const currentPath = window.location.pathname.replace(/^\/|\/$/g, '');
    console.log(currentPath);

    // Get all <li> elements with the 'menu-item' class
    const menuItems = document.querySelectorAll('.menu-item');

    menuItems.forEach(item => {
        const link = item.querySelector('a');

        // Extract the href from the link and remove leading slashes
        const linkPath = link.getAttribute('href').replace(/^\/|\/$/g, '');
        console.log(linkPath);

        // Check if the current URL matches the href of the link
        if (linkPath === currentPath) {
            item.classList.add('active');
        }
    });
});


function highlightActiveMenuItem() {
    const currentPath = window.location.pathname.replace(/^\/|\/$/g, '');
    const menuItems = document.querySelectorAll('.menu-item');

    menuItems.forEach(item => {
        const link = item.querySelector('a');
        const linkPath = link.getAttribute('href').replace(/^\/|\/$/g, '');

        if (linkPath === currentPath) {
            item.classList.add('active');
        }
    });
}

// Initial highlight
highlightActiveMenuItem();

// Retry after a delay if needed
setTimeout(highlightActiveMenuItem, 1000);

            // const choiceArray = document.querySelectorAll(".choice");

            // let currentIndex = 0;
            // const intervalTime = 10000; // Interval time in milliseconds (2 seconds)

            // const expandNextCard = () => {
            //     choiceArray.forEach((element) => {
            //         element.classList.remove("expand", "unset");
            //         element.classList.add('small');
            //     });
            //     const currentCard = choiceArray[currentIndex];
            //     currentCard.classList.remove("small");
            //     currentCard.classList.add('expand');

            //     // Update the index to point to the next card, wrapping around if necessary
            //     currentIndex = (currentIndex + 1) % choiceArray.length;
            // };

            // // Set the interval to automatically expand the next card
            // setInterval(expandNextCard, intervalTime);

            // // Add event listeners for manual clicks
            // choiceArray.forEach((card, index) => {
            //     card.addEventListener("click", () => {
            //         // Manually update the currentIndex to the clicked card's index
            //         currentIndex = index;
            //         expandNextCard();
            //     });
            // });


            // choiceArray.forEach((card) => {
            //     card.addEventListener("click", () => {
            //         choiceArray.forEach((element) => {
            //             element.classList.remove("expand", "unset")
            //             element.classList.add('small')
            //         })
            //         card.classList.remove("small")
            //         card.classList.add('expand')
            //     });
            // });
// header-sticky on scroll
            window.onscroll = function() {
                    toggleStickyHeader();
                };

                function toggleStickyHeader() {
                    // Set the scroll position threshold for adding the class
                    let scrollThreshold = 1; // Adjust this value as needed
                    if (window.scrollY > scrollThreshold) {
                        document.body.classList.add("header-sticky");
                    } else {
                        document.body.classList.remove("header-sticky");
                    }
                }


                
                
