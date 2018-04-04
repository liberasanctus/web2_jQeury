<html>
    <head>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript">
            function clickHandler(e) {
                alert('thank you');
            }
            //live는 "위임""이라는 방식을 사용
            //현재 화면상에 존재하지 않는 엘리먼트라고 할지라도 이벤트를 설치할 수 있음.
            //나중에 엘리먼트가 화면에 생기면 이벤트 영향을 받는다.
            //성능면에서 위험도가 많음.
            //bind나 helper를 이용해서 이벤트를 설치하기를 권장함
            //**현재는 live -> on / die -> off로 사용해야함
            $('#click_me').live('click', clickHandler);
            $('#remove_event').live('click', function(e) {
                //die = unbind
                $('#click_me').die('click', clickHandler);
            });
            $('#trigger_event').live('click', function(e) {
                $('#click_me').trigger('click');
            });
        </script>
    </head>
    <body>
        <input id="click_me" type="button" value="click me" />
    <input id="remove_event" type="button" value="unbind" />
    <input id="trigger_event" type="button" value="trigger" />
    </body>
</html>
