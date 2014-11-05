        <script>
              
              
              $(document).ready(function() {

              var sync1 = $("#sync1");
              var sync2 = $("#sync2");

              sync1.owlCarousel({
                singleItem : true,
                slideSpeed : 1000,
                navigation: false,
                pagination:false,
                afterAction : syncPosition,
                responsiveRefreshRate : 200,
                afterInit : progressBar,
                afterMove : moved,
                startDragging : pauseOnDragging
              });

              sync2.owlCarousel({
                items : 5,
                itemsDesktop      : [1199,5],
                itemsDesktopSmall     : [979,4],
                itemsTablet       : [768,3],
                itemsMobile       : [479,3],
                pagination:false,
                responsiveRefreshRate : 100,
                afterInit : function(el){
                  el.find(".owl-item").eq(0).addClass("synced");
                }
              });

              function syncPosition(el){
                var current = this.currentItem;
                $("#sync2")
                  .find(".owl-item")
                  .removeClass("synced")
                  .eq(current)
                  .addClass("synced")
                if($("#sync2").data("owlCarousel") !== undefined){
                  center(current)
                }
              }

              $("#sync2").on("click", ".owl-item", function(e){
                e.preventDefault();
                var number = $(this).data("owlItem");
                sync1.trigger("owl.goTo",number);
              });

              function center(number){
                var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
                var num = number;
                var found = false;
                for(var i in sync2visible){
                  if(num === sync2visible[i]){
                    var found = true;
                  }
                }

                if(found===false){
                  if(num>sync2visible[sync2visible.length-1]){
                    sync2.trigger("owl.goTo", num - sync2visible.length+2)
                  }else{
                    if(num - 1 === -1){
                      num = 0;
                    }
                    sync2.trigger("owl.goTo", num);
                  }
                } else if(num === sync2visible[sync2visible.length-1]){
                  sync2.trigger("owl.goTo", sync2visible[1])
                } else if(num === sync2visible[0]){
                  sync2.trigger("owl.goTo", num-1)
                }

              }

                var time = 7; // time in seconds

                var $progressBar,
                  $bar, 
                  $elem, 
                  isPause, 
                  tick,
                  percentTime;

                //Init progressBar where elem is $("#owl-demo")
                function progressBar(elem){
                  $elem = sync1;
                  //build progress bar elements
                  buildProgressBar();
                  //start counting
                  start();
                }

                //create div#progressBar and div#bar then prepend to $("#owl-demo")
                function buildProgressBar(){
                  $progressBar = $("<div>",{
                    id:"progressBar"
                  });
                  $bar = $("<div>",{
                    id:"bar"
                  });
                  $progressBar.append($bar).prependTo($elem);
                }

                function start() {
                  //reset timer
                  percentTime = 0;
                  isPause = false;
                  //run interval every 0.01 second
                  tick = setInterval(interval, 10);
                };

                function interval() {
                  if(isPause === false){
                    percentTime += 1 / time;
                    $bar.css({
                       width: percentTime+"%"
                     });
                    //if percentTime is equal or greater than 100
                    if(percentTime >= 100){
                      //slide to next item 
                      $elem.trigger('owl.next')
                    }
                  }
                }

                //pause while dragging 
                function pauseOnDragging(){
                  isPause = true;
                }

                //moved callback
                function moved(){
                  //clear interval
                  clearTimeout(tick);
                  //start again
                  start();
                }

                $elem.on('mouseover',function(){
                isPause = true;
                })
                $elem.on('mouseout',function(){
                 isPause = false;
                })

                // Custom Navigation Events
                $(".slider_next").click(function(){
                    sync1.trigger('owl.next');
                })
                $(".slider_prev").click(function(){
                    sync1.trigger('owl.prev');
                })

            })
        </script>
        <script>
            Ink.requireModules( ['Ink.UI.Tooltip_1'], function( Tooltip ){
                var Tooltip = new Tooltip( '.tip', {color: 'orange', where: 'mousemove'});
            });
            Ink.requireModules( ['Ink.UI.Tooltip_1'], function( Tooltip ){
                var Tooltip = new Tooltip( '.tiptop', {color: 'orange', where: 'up'});
            });
            Ink.requireModules( ['Ink.UI.Tooltip_1'], function( Tooltip ){
                var Tooltip = new Tooltip( '.tiprgt', {color: 'orange', where: 'right'});
            });
            Ink.requireModules( ['Ink.UI.Tooltip_1'], function( Tooltip ){
                var Tooltip = new Tooltip( '.tiplft', {color: 'orange', where: 'left'});
            });
            Ink.requireModules( ['Ink.UI.Tooltip_1'], function( Tooltip ){
                var Tooltip = new Tooltip( '.tipbtm', {color: 'orange', where: 'down'});
            });
        </script>