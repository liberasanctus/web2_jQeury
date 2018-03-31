<html>
    <body>
        <ul>
            <li>test2</li>
        </ul>
        <ul class="foo">
            <li>test</li>
        </ul>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript">
            (function($){
                //ul.foo가 클릭되면 이벤트 발생
                $('ul.foo').click( function() {
                    //this : 이벤트를 발생시킨 엘리먼트. 즉, 클릭되어진 객체
                    $('li', this).css('background-color','red');
                });
            })(jQuery)
        </script>
    </body>
</html>
