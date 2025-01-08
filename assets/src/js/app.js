try {
    window.jQuery = window.$ = require('jquery');
   // require("lazysizes/lazysizes.min");
   require("./vendors");
   require("./modules/input_mask");
   require("./modules/menu");
   require("./modules/fog");
   require("./modules/generall");
   require("./modules/tabs");
  // require("./modules/swiper");



}
catch (e) {
    console.log('JS ERROR!!!', e);
}