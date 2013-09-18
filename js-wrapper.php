<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>test-hover-item</title>
    <style type="text/css">
    * { margin: 0; padding: 0; }
    li { display: inline-block }
    a { width: 80px; display: block; overflow: hidden text-align: center }
    a.selected {
        background: #f234ee;
    }
    </style>
</head>
<body>
    <ul>
    <?php
    for ($i = 0; $i < 10000; $i++) {
        echo "<li><a href='#'>Link $i</a></li>";
    }
    ?>
    </ul>
    <script>
    var ul = Array.prototype.slice.call(document.getElementsByTagName('ul'))[0];

    ul.addEventListener('mouseover', function (e) {
        e.target.className = 'selected';
    });
    ul.addEventListener('mouseout', function (e) {
        e.target.className = '';
    });
    </script>
</body>
</html>