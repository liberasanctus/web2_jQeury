<!--
<html>
    <head>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript">
            function clickHandler(e){
                alert('thank you');
            }
            //웹 페이지 다운로드가 끝난 상황을 체크해서 다운로드가 끝나면 button에 이벤트를 설치
            //bind : 이벤트를 설치할 때 사용하는 메소드
            //ready : 문서가 다운로드가 끝나서 특정 태그들이 화면에 온전하게 표시가 되면 ready 이벤트가 실행됨
            //        브라우져는 뒤에 전달되는 함수를 호출해서 필요한 작업을 할 수 있게 됨.
            //        안전하게 이벤트를 설치하기 위한 도구
            $(document).bind('ready', function(){
                 $('#click_me').bind('click', clickHandler);
                 //익명함수 : 이벤트를 설치할 때 사용하는 여러가지 로직들은 보통 재활용되지 않는 경우가 많기 때문에
                 //          익명함수를 사용
                 $('#remove_event').bind('click', function(e){
                     //unbind(이벤트 삭제)를 할 때는 어떤 이벤트 타입에 어떤 이벤트 핸들러인지 정확히 지정해줘야 한다.
                     $('#click_me').unbind('click', clickHandler);
                 });
                 $('#trigger_event').bind('click', function(e){
                    //선택한 엘리먼트에 설치되어 있는 이벤트 중에 'click'이라는 이벤트를 호출.
                     $('#click_me').trigger('click');
                 });
             })
        </script>
    </head>
    <body>
        <input id="click_me" type="button" value="click me" />
        <input id="remove_event" type="button" value="unbind" />
        <input id="trigger_event" type="button" value="trigger" />
    </body>
</html>
-->

<html>
    <head>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript">
            function clickHandler(e){
                alert('thank you');
            }
            //위 예제에서 사용했던 jQuery문법과 다른 점은 바로 ready를 사용했다는 점이다.(= helper)
            //간결하고 직관적
            $(document).ready(function(){
                 $('#click_me').click(clickHandler);
                 $('#remove_event').click(function(e){
                     $('#click_me').unbind('click', clickHandler);
                 });
                 $('#trigger_event').click(function(e){
                      console.log(e);
                     $('#click_me').trigger('click');
                 });
             })
        </script>
    </head>
    <body>
        <input id="click_me" type="button" value="click me" />
        <input id="remove_event" type="button" value="unbind" />
        <input id="trigger_event" type="button" value="trigger" />
    </body>
</html>
