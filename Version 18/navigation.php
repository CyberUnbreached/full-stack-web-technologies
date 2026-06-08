<?php
switch ($page) {

    case "home.php":
        echo '<li class="active"><a href="index.php" class="smoothScroll">Home</a></li>
              <li><a href="index.php?page=school">School</a></li>
              <li><a href="index.php?page=hobbies">Hobbies</a></li>
              <li><a href="index.php?page=work">Work</a></li>
              <li><a href="index.php?page=contact">Contact</a></li>
              <li><a href="index.php?page=results">Results</a></li>';
        break;

    case "work.php":
        echo '<li><a href="index.php" class="smoothScroll">Home</a></li>
              <li><a href="index.php?page=school">School</a></li>
              <li><a href="index.php?page=hobbies">Hobbies</a></li>
              <li class="active"><a href="index.php?page=work">Work</a></li>
              <li><a href="index.php?page=contact">Contact</a></li>
              <li><a href="index.php?page=results">Results</a></li>';
        break;

    case "hobbies.php":
        echo '<li><a href="index.php" class="smoothScroll">Home</a></li>
              <li><a href="index.php?page=school">School</a></li>
              <li class="active"><a href="index.php?page=hobbies">Hobbies</a></li>
              <li><a href="index.php?page=work">Work</a></li>
              <li><a href="index.php?page=contact">Contact</a></li>
              <li><a href="index.php?page=results">Results</a></li>';
        break;

    case "school.php":
        echo '<li><a href="index.php" class="smoothScroll">Home</a></li>
              <li class="active"><a href="index.php?page=school">School</a></li>
              <li><a href="index.php?page=hobbies">Hobbies</a></li>
              <li><a href="index.php?page=work">Work</a></li>
              <li><a href="index.php?page=contact">Contact</a></li>
              <li><a href="index.php?page=results">Results</a></li>';
        break;

    case "contact.php":
        echo '<li><a href="index.php" class="smoothScroll">Home</a></li>
              <li><a href="index.php?page=school">School</a></li>
              <li><a href="index.php?page=hobbies">Hobbies</a></li>
              <li><a href="index.php?page=work">Work</a></li>
              <li class="active"><a href="index.php?page=contact">Contact</a></li>
              <li><a href="index.php?page=results">Results</a></li>';
        break;

    case "results.php":  // <-- NEW CASE YOU NEED
        echo '<li><a href="index.php" class="smoothScroll">Home</a></li>
              <li><a href="index.php?page=school">School</a></li>
              <li><a href="index.php?page=hobbies">Hobbies</a></li>
              <li><a href="index.php?page=work">Work</a></li>
              <li><a href="index.php?page=contact">Contact</a></li>
              <li class="active"><a href="index.php?page=results">Results</a></li>';
        break;
}
?>
