If your project requires fonts (which they all do), be sure to provide the
following formats in this structure:

    @font-face {
        font-family: 'FontName';
          src: url('/fonts/FontName.eot');
          src: url('/fonts/FontName.eot?#iefix') format('embedded-opentype'),
               url('/fonts/FontName.woff') format('woff'),
               url('/fonts/FontName.ttf') format('truetype'),
               url('/fonts/FontName.svg#FontName') format('svg');
        font-weight: normal;
        font-style: normal; }
        
and be sure to call them out via @font-face at the bottom of /css/layout.css
or in a seperate CSS.


Preview plenty of fonts here:
    http://fontsquirrel.com
    http://www.google.com/webfonts

Use these fine ass iconic fonts here:
    http://fortawesome.github.com/Font-Awesome
    http://www.zurb.com/playground/foundation-icons