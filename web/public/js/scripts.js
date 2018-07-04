// jQuery(document).ready(function () {

//     jQuery(window).on('beforeunload', function () {
//         return "Вы точно решили покинуть наш сайт?";
//     });

//     $('a').click(function () {
//         $(window).off('beforeunload');
//     });
// });

jQuery(document).ready(function () {
    $(".subscribe-me").subscribeBetter({
        trigger: "onload",       // You can choose which kind of trigger you want for the subscription modal to appear. Available triggers are "atendpage" which will display when the user scrolls to the bottom of the page, "onload" which will display once the page is loaded, and "onidle" which will display after you've scrolled.
        animation: "fade",          // You can set the entrance animation here. Available options are "fade", "flyInRight", "flyInLeft", "flyInUp", and "flyInDown". The default value is "fade".
        delay: 15,                   // You can set the delay between the trigger and the appearance of the modal window. This works on all triggers. The value should be in milliseconds. The default value is 0.
        showOnce: false,             // Toggle this to false if you hate your users. :)
        autoClose: false,           // Toggle this to true to automatically close the modal window when the user continue to scroll to make it less intrusive. The default value is false.
        scrollableModal: false      //  If the modal window is long and you need the ability for the form to be scrollable, toggle this to true. The default value is false.
    });
});