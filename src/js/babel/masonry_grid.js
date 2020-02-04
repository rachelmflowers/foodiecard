"use strict";

if (window.innerWidth >= 575) {
  var resizeGridItem = function resizeGridItem(item) {
    grid = document.getElementsByClassName("masonry-gallery")[0];
    rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
    rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
    rowSpan = Math.ceil((item.querySelector('.gallery-content').getBoundingClientRect().height + rowGap) / (rowHeight + rowGap));
    item.style.gridRowEnd = "span " + rowSpan;
  };

  var resizeAllGridItems = function resizeAllGridItems() {
    allItems = document.getElementsByClassName("gallery-item");

    for (x = 0; x < allItems.length; x++) {
      resizeGridItem(allItems[x]);
    }
  };

  var resizeInstance = function resizeInstance(instance) {
    item = instance.elements[0];
    resizeGridItem(item);
  };

  window.onload = resizeAllGridItems();
  window.addEventListener("resize", resizeAllGridItems);
  allItems = document.getElementsByClassName("gallery-item");

  for (x = 0; x < allItems.length; x++) {
    imagesLoaded(allItems[x], resizeInstance);
  }
}