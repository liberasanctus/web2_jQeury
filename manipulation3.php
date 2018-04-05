<!-- 삭제(detach, empty, "remove", unwrap) -->
<!DOCTYPE html>
<html>
    <head>
        <style>
            p {
                background:yellow;
                margin:6px 0;
            }
        </style>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>
    <body>
        <p>Hello</p>
        how are
        <p>you?</p>
        <button>
            Call remove() on paragraphs
        </button>
        <script>
            // 래퍼     이벤트  이벤트핸들러
            $("button").click( function () {
                // 선택된 엘리먼트 제거
                $("p").remove();
            });
        </script>
    </body>
</html>
