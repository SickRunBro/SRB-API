<!DOCTYPE html>
<html>
    <head>
        <title>SRB API Testing Interface</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h2>SRB API Testing Interface</h2>
            <p>Check the browser's console for output</p>
            <h3>Videos</h3>            
            <button id="video_get-one" type="button">Get one</button>
            <button id="video_get-all-by-user" type="button">Get all for this user</button>
            <button id="video_get-all-by-lat-long" type="button">Get all by lat long</button>
            <form action="search.php" method="GET">
                <input type="text" name="query" />
                <input type="submit" value="Search" />
            </form>
            <!--            <button id="video_update" type="button">Update</button>-->
            <!--            <button id="video_delete" type="button">Delete</button>-->
            <p>----------------------------------------------</p>
            <br>


        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="QueryTest.js"></script>
    </body>
</html>
