<!-- 속성제어(attr, prop, removeAttr, removeProp, "val") -->
<!DOCTYPE html>
<html>
    <head>
        <style>p {
                color:blue;
                margin:8px;
            }
        </style>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>
    <body>
        <input type="text" value="some text"/>
        <p>
        </p>
        <script>
            //키보드를 치면 이벤트 발생(키보드를 땠을 때) <->keydown
            $("input").keyup( function () {
                //특정한 엘리먼트가 가지고 있는 value값을 return
                var value = $(this).val();
                //text : 엘리먼트 컨텐츠 영역에 전달된 인자를 셋팅
                $("p").text(value);
            }).keyup();
              //trigger -> input 엘리먼트가 가지고 있는 이벤트 중에 keyup이라고 하는
              //이벤트명을 가지고 있는 이벤트를 호출(= 초기값 셋팅)
          </script>
    </body>
</html>
