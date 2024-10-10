<h1>Base MVC</h1>
<p>Welcome to this base mvc project.</p>

<ul>
<?php
    foreach($books as $book) {
        echo '<ul>';
            echo '<h2>' . $book->title . '</h2>';
            echo '<p>€' . $book->price . '</p>';
        echo '</ul>';
    }
?>
</ul>