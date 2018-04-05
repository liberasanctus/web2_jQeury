<!-- 클래스(addClass, hasClass, removeClass, "toggleClass") -->
<!DOCTYPE html>
<html>
    <head>
        <style>p {
                margin: 4px;
                font-size:16px;
                font-weight:bolder;
                cursor:pointer;
            }
            .blue {
                color:blue;
            }
            .highlight {
                background:yellow;
            }
        </style>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>
    <body>
        <p class="blue"> Click to toggle </p>
        <p class="blue highlight"> highlight </p>
        <p class="blue"> on these </p>
        <p class="blue"> paragraphs </p>
        <script>
             $("p").click( function () {
                 //class를 가지고 있다면 삭제, 가지고 있지 않다면 추가
                 //this => 클릭된 엘리먼트
                 $(this).toggleClass("highlight");
             });
         </script>
    </body>
</html>
