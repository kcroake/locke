$(document).ready(function(){
    //     $("#home-banner").mason({
    //     itemSelector: ".box",
    //     ratio: 1.5,
    //     sizes: [
    //         [1,1],
    //         [1,2],
    //         [2,2]
    //     ],
    //     columns: [
    //         [0,480,1],
    //         [480,780,2],
    //         [780,1080,3],
    //         [1080,1320,3],
    //         [1320,1680,3]
    //     ],
    //     promoted: [
    //     ],
    //     filler: {
    //         itemSelector: '.fillerBox',
    //         filler_class: 'custom_filler',
    //         keepDataAndEvents: false
    //     },
    //     layout: 'fluid',
    //     gutter: 5
    // },function(){
    //     console.log("COMPLETE!")
    // });
    $('.grid').isotope({
      // options
      itemSelector: '.grid-item',
      layoutMode: 'masonry' 
    });
});