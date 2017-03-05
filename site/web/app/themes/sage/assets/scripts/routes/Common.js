export default {
  init() {
    // JavaScript to be fired on all page
    const setSideAreaHeight = function setSideAreaHeight() {
      // $('.wbba-side-area').css('height', $(document).height());
      $('.wbba-side-area').each = function showHeights() {
      };
    };
    const makeContentImagesResponsive = function makeContentImagesResponsive() {
      $('#content img').addClass('img-fluid');
    };

    setSideAreaHeight();
    makeContentImagesResponsive();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
