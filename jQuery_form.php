<!DOCTYPE html>
<html>
    <head>
        <style>
            span {
            }
        </style>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>
    <body>
        <p>
            <input type="text" />
            <span></span>
        </p>
        <script>
            $("input").focus( function () {
                //next : this에 대한 다음 엘리먼트를 선택(형제 엘리먼트 선택)
                //html : 특정 엘리먼트에 컨텐츠 영역으로 html 태그를 insert 시킨다.
                $(this).next("span").html('focus');
            }).blur( function() { //chain context를 유지한 상태로 blur 이벤트 발생
                $(this).next("span").html('blur');
            }).change(function(e){
                //e.target = this (= 이벤트를 발생시킨 엘리먼트)
                //e : 이벤트 핸들러가 호출될 때 이벤트 오브젝트가 전달 됨.(관습적으로 사용)
                alert('change!! '+$(e.target).val());
                //데이터가 선택되었을 때 발생하는 이벤트 select
            }).select(function(){
                $(this).next('span').html('select');
            });
        </script>
    </body>
</html>
