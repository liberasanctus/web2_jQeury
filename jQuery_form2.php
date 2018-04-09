<!DOCTYPE html>
<html>
    <head>
        <style>
            p {
                margin:0;
                color:blue;
            }
            div, p {
                margin-left:10px;
            }
            span {
                color:red;
            }
        </style>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>
    <body>
        <p>
            Type 'correct' to validate.
        </p>
        <form action="javascript:alert('success!');">
            <div>
                <input type="text" />
                <!-- submit 버튼을 클릭하면 form에서 정의되어 있는 action으로 데이터를 전송 -->
                <input type="submit" />
            </div>
        </form>
        <span></span>
        <script>
            //데이터를 입력하고 Enter(또는 submit 버튼)를 누르게 되면
            //그때 데이터가 form의 action으로 지정되어 있는 곳으로 전송이 되는데
            //그 순간에 submit이라는 이벤트가 발생
            $("form").submit( function() {
                    //:first -> filter(input 엘리먼트 중에 첫번째로 등장하는 엘리먼트)
                if ($("input:first").val() == "correct")
                    //show : 엘리먼트가 감춰져 있을 때 화면에 표시되게 함
                    $("span").text("Validated...").show();
                    //return true면 이벤트가 원래 작동하는 방식데로 작동
                    return true;
                }
                //fadeOut : 효과
                $("span").text("Not valid!").show().fadeOut(1000);
                return false;
            });
        </script>
    </body>
</html>
