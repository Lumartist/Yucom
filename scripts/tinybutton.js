/*global tinyMCE, tinymce*/
/*jshint forin:true, noarg:true, noempty:true, eqeqeq:true, bitwise:true, strict:true, undef:true, unused:true, curly:true, browser:true, devel:true, maxerr:50 */

(function() {
"use strict";    
document.getElementById("content-tmce").onclick = function(){
document.getElementById("mce_30").style.display = "block";
document.getElementById("wp-content-wrap").classList.remove("html-active");
document.getElementById("wp-content-wrap").className += " tmce-active";
}
document.getElementById("content-html").onclick = function(){
document.getElementById("mce_30").style.display = "none";
document.getElementById("wp-content-wrap").classList.remove("tmce-active");
document.getElementById("wp-content-wrap").className += " html-active";
}
    tinymce.init({
        selector: ".wp-editor-area",
        toolbar: "shortcodes",
        setup: function(editor) {

            tinymce.PluginManager.add( 'ubl_location', function( editor, url ) {

                editor.addButton( 'shortcodes', {
                    type: 'listbox',
                    text: 'Shortcodes',
                    icon: false,
                    tooltip: 'Editor Shortcodes',
                    classes: 'ublnewlist',
                    onselect: function(e) {
                    }, 
                    values: [

                        //SHORTCODE STARTS
                        {text: 'H1 Title', onclick : function() {

                            var selected = tinyMCE.activeEditor.selection.getContent();
                            var content = '';
                            var h1titleclass = prompt("Would you like a custom class?", "");

                            if(h1titleclass != ''){
                                h1titleclass = ' class="'+h1titleclass+'"';
                            }

                            if (selected !== '') {
                                content = '[h1'+h1titleclass+']' + selected + '[/h1]';
                            } else {
                                content = '[h1'+h1titleclass+'][/h1]';
                            }

                            tinymce.execCommand('mceInsertContent', false, content);
                        }},
                        // END SHORTCODE

                        /*

                        Keep adding adding shortcodes as shown on the tutorial here

                        */
                    ]

                });

          });

        }

    });

})();