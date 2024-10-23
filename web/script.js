
const heroSection = document.querySelector('.hero');
heroSection.addEventListener('mouseover', () => {
  heroSection.classList.add('animate');
  setTimeout(() => {
    heroSection.classList.remove('animate');
  }, 1000);
});


const artworkGallery = document.querySelector('.artwork-gallery');
artworkGallery.addEventListener('mouseover', () => {
  artworkGallery.classList.add('animate');
  setTimeout(() => {
    artworkGallery.classList.remove('animate');
  }, 1000);
});


const recentSearchSection = document.querySelector('.recent-search');
recentSearchSection.addEventListener('mouseover', () => {
  recentSearchSection.classList.add('animate');
  setTimeout(() => {
    recentSearchSection.classList.remove('animate');
  }, 1000);
});


const extraLinks = document.querySelectorAll('.link-box');
extraLinks.forEach((link) => {
  link.addEventListener('mouseover', () => {
    link.classList.add('animate');
    setTimeout(() => {
      link.classList.remove('animate');
    }, 1000);
  });
});


const viewMoreButton = document.querySelector('.view-more-btn');