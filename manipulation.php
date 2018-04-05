<!-- 자식으로 삽입("append", appendTo, html, prepend, prependTo, text) -->
<!-- 형제로 삽입("after", before, insertAfter, insertBefore) -->
<!DOCTYPE html>
<html>
    <head>
        <style>
            p {
                background:yellow;
            }
        </style>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>
    <body>
        <p>
            I would like to say:
        </p>
        <script>
        //append : 자식 엘리먼트로 추가
        //$("p").append("<strong>Hello</strong>");

        //after : 형제로 추가
        $("p").after("<b>Hello</b>");
      </script>
    </body>
</html>
