<html>
    <head>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript">
            $('#navigation li').live('click', function() {
                //#navigation 하위 모든 li 태그의 class 삭제
                $('#navigation li').removeClass('selected');
                //this : 지금 사용자가 클릭한 엘리먼트. 즉 이벤트가 발생할 객체.
                $(this).addClass('selected');
            })
        </script>
        <style type="text/css">
            #navigation li {
                list-style:none;
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
