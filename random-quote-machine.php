<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
      <?php $colorArray = array("#990000","#994C00","#999900","#4C9900","#009900","#00994C","#009999","#004C99","#000099","#4C0099","#990099","#99004C","#404040");
            $randomColorIndex = array_rand($colorArray, 1);
            $randomColor = $colorArray[$randomColorIndex];
        ?>
      * {
        //border: 1px solid black;
      }
      :root {
        --background-and-font-color: <?=$randomColor?>
      }
      body {
        background-color: var(--background-and-font-color);
      }
      .main-box {
        background-color: #FFF;
        width: 350px;
        align-items: center;
        margin-top: 20px;
        margin-left: 5px;
        margin-right: 5px;
        height: 250px;
        border-radius: 50px;
        box-shadow: 2px 1px black;
      }
      .flex-box {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .quote-container {
        width: 80%;
        height: 50%;
        margin: auto;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        color: var(--background-and-font-color);
        font-size: 0.9em;
        font-family: "Sofia",sans-serif;
      }
      .author-container {
        text-align: center;
        margin-left: 50px;
        color: var(--background-and-font-color);
        font-size: 1.0em;
        font-family: "Sofia",sans-serif;
        text-shadow: 3px 3px 3px black;
      }
      .dropdown-container {
        margin-left: 10px;
      }
      .author-dropdown-parent-container {
        display: flex;
      }
      .button {
        background-color: var(--background-and-font-color);
        color: white;
      }

    </style>
  </head>

  <body>
    <?php
      $scienceQuotes = array(array("Carl Sagan","We live in a society exquisitely dependent on science and technology, in which hardly anyone knows anything about science and technology."),
                             array("Robert A. Heinlein","Everything is theoretically impossible until it is done."),
                             array("Isaac Asimov","The saddest aspect of life right now is that science gathers knowledge faster than society gathers wisdom."),
                             array("Albert Einstein","If we knew what it was we were doing, it would not be called research, would it?"),
                             array("Edward Teller","The science of today is the technology of tomorrow."),
                             array("Werner von Braun","Research is what I’m doing when I don’t know what I’m doing."),
                             array("Galileo Galilei","In questions of science, the authority of a thousand is not worth the humble reasoning of a single individual."),
                             array("Neil deGrasse Tyson","The good thing about science is that it’s true whether or not you believe in it."),
                             array("Madam Marie Curie","Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less."),
                             array("Richard Feynman","I learned very early the difference between knowing the name of something and knowing something."));
      $philosophyQuotes = array(array("Socrates","The unexamined life is not worth living."),
                                array("Martin Heidegger","He who thinks great thoughts, often makes great errors."),
                                array("Bertrand Russell","It is undesirable to believe a proposition when there is no ground whatever for supposing it true."),
                                array("Seneca the Younger","Even while they teach, men learn."),
                                array("Renee Descartes","One cannot conceive anything so strange and so implausible that it has not already been said by one philosopher or another."),
                                array("Ludwig Wittgenstein","Philosophy is a battle against the bewitchment of our intelligence by means of language."),
                                array("William James","There is only one thing a philosopher can be relied upon to do, and that is to contradict other philosophers."),
                                array("Aristotle","We are what we repeatedly do. Excellence, then, is not an act, but a habit."),
                                array("Soren Kierkegaard","Life must be understood backward. But it must be lived forward."),
                                array("Epicurus","The greater the difficulty, the more glory in surmounting it."));
      $entrepreneurQuotes = array(array("Peter Drucker","The best way to predict the future is to create it."),
                                  array("Vince Lombardi","Winners never quit and quitters never win."),
                                  array("Warren Buffet","It takes 20 years to build a reputation and five minutes to ruin it. If you think about that, you’ll do things differently."),
                                  array("Jeff Bezos","One of the huge mistakes people make is that they try to force an interest on themselves. You don't choose your passions; your passions choose you."),
                                  array("Thomas Edison","I have not failed. I’ve just found 10,000 ways that won’t work."),
                                  array("Winston Churchill","Success is walking from failure to failure with no loss of enthusiasm."),
                                  array("Albert Schweitzer","Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful."),
                                  array("Jim Rohn","Formal education will make you a living; self-education will make you a fortune."),
                                  array("Ralph Nader","The function of leadership is to produce more leaders, not more followers."),
                                  array("Bill Gates","Your most unhappy customers are your greatest source of learning."));
      $indexOfRandomQuote;
      $quote;
      $author;

      function generateQuote($quoteList) {
        global $quote, $author;
        $indexOfRandomQuote = rand(0, count($quoteList) - 1);
        $quote = $quoteList[$indexOfRandomQuote][1];
        $author = $quoteList[$indexOfRandomQuote][0];
      }

      if(isset($_POST['authorCategory'])) {
        $authorCategory = $_POST['authorCategory'];
        switch($authorCategory) {
          case "scientist":
            generateQuote($scienceQuotes);
            break;
          case "philosopher":
            generateQuote($philosophyQuotes);
            break;
          case "entrepreneur":
            generateQuote($entrepreneurQuotes);
            break;
        }
      }
      else {

        $randNum = rand(1,3);
        switch($randNum) {
          case 1: $authorCategory = "scientist"; break;
          case 2: $authorCategory = "philosopher"; break;
          case 3: $authorCategory = "entrepreneur"; break;
        }

        switch($authorCategory) {
          case "scientist":
            generateQuote($scienceQuotes);
            break;
          case "philosopher":
            generateQuote($philosophyQuotes);
            break;
          case "entrepreneur":
            generateQuote($entrepreneurQuotes);
            break;
        }
      }
    ?>
    <div class="flex-box">
      <div class="main-box">
        <div class="quote-container">"<?php echo $quote; ?>"</div>
        <div class="author-container">- <?php echo $author; ?></div>
        <div class="author-dropdown-parent-container">
          <div class="dropdown-container">
            <form action="random-quote-machine.php" method="post">
                <select name="authorCategory">
                  <option value=<?=$authorCategory?>>(Select a category)</option>
                  <option value="scientist">Scientist</option>
                  <option value="philosopher">Philosopher</option>
                  <option value="entrepreneur">Entrepreneur</option>
                </select>
                <input class="button" type="submit" value="Generate A New Quote" />
            </form>
          </div>
        </div>
      </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>


</html>
