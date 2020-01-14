<?php

    require 'connection.php';

    $query = "SELECT authors.authorName FROM authors, authorships
    WHERE authors.authorId = authorships.authorId
    GROUP by authors.authorName
    HAVING COUNT(*) <= 6";

    $result = mysqli_query($mysqli, $query);
    
    while ($authors = mysqli_fetch_assoc($result)) {
        echo "<p>{$authors['authorName']}</p>";
    }