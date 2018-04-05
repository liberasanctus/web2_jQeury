<!-- 치환("replaceAll", replaceWith) -->
<!DOCTYPE html>
<html>
    <head>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>
    <body>
        <p> Hello </p>
        <p> cruel </p>
        <p> World </p>
        <script>
        // $("")안에 HTML 코드가 온다면 문서상에 존재하는 특정한 엘리먼트를 선택하는 선택자가 아니라
        // 코드에 해당되는 HTML를 만들어주는 것이다.
        // replaceAll("제어하고자 하는 엘리먼트") : 앞쪽에서 선언한 엘리먼트를 교체한다.
        $("<b>Paragraph. </b>").replaceAll("p"); // check replaceWith() examples
      </script>
    </body>
</html>
