<html>
    <body>
        <a id="tutorial" href="http://jquery.com" target="_self">jQuery</a>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript">
            //Chain의 예
            //id 속성값으로 tutorial을 가지고 있는 엘리먼트의 href속성값, target값, color값을 변경한다.
            //jQuery('#tutorial').attr('href', 'http://jquery.org').attr('target', '_blank').css('color', 'red');

            //Javascript 사용시
            var tutorial = document.getElementById('tutorial');
            tutorial.setAttribute('href', 'http://jquery.org');
            tutorial.setAttribute('target', '_blank');
            tutorial.style.color = 'red';
        </script>
    </body>
</html>
