

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


                
                
