<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

 



<head>
    <title>zNugget's Key System</title>


    
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            background-color: #FFF;
            color: #222;
            margin: 0;
            padding: 0;
        }
        
        #content {
            width: 900px;
            margin: auto;
            background-color: #FFFFFF;
            padding: 1em;
        }
        
        h1 {
            font-size: 1.4em;
            text-align: center;
        }
        
        textarea {
            width: 100%;
            font-size: inherit;
            border-radius: 3px;
            padding: 0.3em;
        }
        
        #button {
            width: 100%;
            font-size: 0.8em;
            line-height: 2em;
        }
        
        pre {
            margin: 1em;
            padding: 1em;
            font-size: 12px;
            background-color: #FFF;
            border: 1px solid #FFF;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div id="content">
        <h1>zNugget's Key System</h1>

        <p>
            <ul>

            </ul>
            <p>Press the "Get Key" button to generate your key</p>
            <p>(This key will only work for you.)</p>


            <script src="sha256.min.js"></script>
            <textarea hidden id="input" rows=5>sdf</textarea>
            <input id="button" type="button" value="Get Key" />
            <textarea id="output" rows=1 style="text-align: center"></textarea>

            <script>
                document.getElementById('button').onclick = function() {
                    document.getElementById('output').value = sha256(document.getElementById('input').value);
                };
            </script>


            </code>
            </pre>
    </div>
</body>

<!-- Mirrored from geraintluff.github.io/sha256/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jul 2022 03:21:39 GMT -->

</html>
