<html>
    <head>
        <script type="text/javascript">
            //사용자가 사용하는 브라우저에 따라 다른 로직들을 실행시켜주는 함수.
            function addEvent(target, eventType,eventHandler, useCapture) {
                //자바스크립트에서 객체, 속성이 정의되어 있지 않고ㅗ if문의 인자로 전달이 되면 false가 된다.
                if (target.addEventListener) { // W3C DOM
                    target.addEventListener(eventType,eventHandler,useCapture?useCapture:false);
                } else if (target.attachEvent) {  // IE DOM
                    var r = target.attachEvent("on"+eventType, eventHandler);
                }
            }

            //event : 시스템이 해주는 역할(인자)
            function clickHandler(event) {
                var nav = document.getElementById('navigation');
                for(var i = 0; i < nav.childNodes.length; i++) {
                    var child = nav.childNodes[i];
                    if(child.nodeType==3)
                        continue;
                    child.className = '';
                }
                //event.target : 사용자가 선택한 엘리먼트값이 들어가 있음.
                event.target.className = 'selected';
            }

            //window : 브라우저 그 자체
            //'load' : 웹페이지가 다운로드가 끝났을 때 이벤트 실행
            //funtion : eventHandler
            addEvent(window, 'load', function(eventObj) {
                var nav = document.getElementById('navigation');
                //.childNodes : 특정 엘리먼트의 자식 엘리먼트들을 배열로 담아 리턴해줌
                for(var i = 0; i < nav.childNodes.length; i++) {
                    var child = nav.childNodes[i];
                    //.nodeType : 특정 엘리먼트 성격을 체크(3:공백)
                    if(child.nodeType==3)
                        continue;
                    addEvent(child, 'click', clickHandler);
                }
            })
        </script>
        <style type="text/css">
            #navigation li {
                /*li 사용시 표현되는 점 제거*/
                list-style:none;
                /*엘리먼트들이 일렬로 나열됨*/
                float:left;
                padding:5px;
            }
            #navigation {
                cursor:pointer;
            }
            #navigation .selected {
                background-color:red;
                color:white;
            }
        </style>
    </head>
    <body>
        <ul id="navigation">
            <li>HTML</li>
            <li>CSS</li>
            <li>javascript</li>
            <li class="selected">jQuery</li>
            <li>PHP</li>
            <li>mysql</li>
        </ul>
    </body>
</html>
