<html>
    <body>
        <ul class="first">
            <li class="foo"> list item 1 </li>
            <li> list item 2 </li>
            <li class="bar"> list item 3 </li>
        </ul>
        <ul class="second">
            <li class="foo"> list item 1 </li>
            <li> list item 2 </li>
            <li class="bar"> list item 3 </li>
        </ul>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript">$('ul.first').find('.foo').css('background-color', 'red').end().find('.bar').css('background-color', 'green');</script>
    </body>
</html>
