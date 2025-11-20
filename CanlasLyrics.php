<?php 
//Title
$songTitle = "Good 4 u";
$artist = "Olivia Rodrigo";
$mood = "angsty";

//2 numeric variables – later used with operators
$verseCount = 1 + true;
$chorusCount = 2 + true;
$bridgeCount = 1;
$totalCount = $verseCount + $chorusCount + $bridgeCount;

//Build Noun and Verb Arrays from the Song
$nouns = ["love", "life", "God", "girl"];
$verbs = ["moved", "Cryin", "bought", "takin", "cared"];
$adjectives = ["found", "unaffected", "emotional" ];
$sections = ["V1", "Chorus1", "V2", "Chorus2", "Bridge","Chorus3"];

//Numbers of parts
$Count = "The song has " . $verseCount . " Verses and " .  $chorusCount  . " Chorus and also  " . $bridgeCount . " bridge ";

// Lyrics Part
$sections[0] = "Well, good for you, I guess you $verbs[0] on really easily
You $adjectives[0] a new $nouns[3] and it only took a couple weeks
Remember when you said that you wanted to give me the world?
(World)
And good for you, I guess that you've been workin' on yourself
I guess that therapist I $adjectives[0] for you, she really helped
Now you can be a better man for your brand-new $nouns[3] (Girl)";

$sections[1] = "Well, good for you
You look happy and healthy, not me
If you ever $verbs[4] to ask
Good for you
You're doin' great out there without me, baby
$nouns[2], I wish that I could do that
I've lost my mind, I've spent the night
$verbs[1]' on the floor of my bathroom
But you're so $adjectives[1], I really don't get it
But I guess good for you";

$sections[2] = "Well, good for you, I guess you're gettin' everything you want (Ah)
You $verbs[2] a new car and your career's really $verbs[3]' off (Ah)
It's like we never even happened
Baby, what is up with that? (Ah)
And good for you, it's like you never even met me
Remember when you swore to God I was the only
Person who ever got you? Well, screw that, and screw you
You will never have to hurt the way you know that I do";

$sections[3] = "Well, good for you
You look happy and healthy, not me
If you ever $verbs[4] to ask
Good for you
You're doin' great out there without me, baby
God, I wish that I could do that
I've lost my mind, I've spent the night
$verbs[1]' on the floor of my bathroom
But you're so $adjectives[1], I really don't get it
But I guess good for you";

$sections[4] = "Maybe I'm too $adjectives[2]
But your apathy's like a wound in salt
Maybe I'm too $adjectives[2]
Or maybe you never $verbs[4] at all
Maybe I'm too $adjectives[2]
Your apathy is like a wound in salt
Maybe I'm too $adjectives[2]
Or maybe you never $verbs[4] at all";

$sections [5] = "Well, good for you
You look happy and healthy, not me
If you ever $verbs[4] to ask
Good for you
You're doin' great out there without me, baby
Like a sociopath
I've lost my mind, I've spent the night
$verbs[1]' on the floor of my bathroom
But you're so $adjectives[1], I really don't get it
But I guess good for you";

?>


<!-- HTML Part -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good 4 U Lyrics Remix</title>
    <!-- CSS -->
    <style> 
        body {background-image: url("BLK.jpg")}
        .Title {font-family: Arial; text-align: justify; color: white; max-width: 500px; margin: 20px auto;}
        .Song {font-family: Arial; text-align: justify; color:rgb(177, 91, 231); max-width: 500px; margin: 20px auto;}
        .Container {background: #A9A9A9; max-width: 600px; margin: 40px auto; padding: 25px 30px; border-radius: 13px; }
    </style>
</head>
<body>
    <div class = "Container">
    <!-- Title Block -->
    <?= "<div class = 'Title'>"; ?>
    <h1> Song Title: <?php echo $songTitle ?> </h1>
    <h2> By: <?php echo $artist ?></h2>
    <h3> <?php echo $Count ?> </h3>
    <h3> This song has <?php echo $totalCount ?> parts </h3>
    <?= "</div>";?>

    <!-- Lyrics -->
    <?= "<div class = 'Song'>"; ?>
    <P>Verse 1</P>
    <p><?= $sections[0] ?></p>
    <P>Chorus</P>
    <p><?= $sections[1] ?></p>
    <p>Verse 2</p>
    <p><?= $sections[2] ?></p>
    <p>Chorus</p>
    <p><?= $sections[3] ?></p>
    <p>Bridge</p>
    <p><?= $sections[4] ?></p>
    <P>Chorus</P>
    <p><?= $sections[5] ?></p>
    <?= "</div>";?>
    </div>


</body>
</html>